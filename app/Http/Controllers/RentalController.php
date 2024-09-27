<?php
namespace App\Http\Controllers;
use App\Http\Requests\ConfirmBookingRequest;
use App\Http\Requests\StoreBookingRequest;
use App\Mail\CarBooked;
use App\Mail\CustomerRentalDetailsMail;
use App\Models\Rental;
use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class RentalController extends Controller
{
    public function startBooking(StoreBookingRequest $request)
    {
        // Extract validated data
        $validated = $request->validated();
        // Parse the dates to the required format
        $startDate = Carbon::parse($validated['start_date'])->format('Y/m/d');
        $endDate = Carbon::parse($validated['end_date'])->format('Y/m/d');
        // Check if the car is available for the selected date range
        if (!Rental::isCarAvailable($validated['car_id'], $startDate, $endDate)) {
            return back()->withErrors(['The car is not available for the selected date range.']);
        }
        // Fetch car details
        $car = Car::findOrFail($validated['car_id']);
        // Calculate total cost
        $totalCost = Rental::calculateTotalCost($car->daily_rent_price, $startDate, $endDate);
        // Return the booking details view
        return view('pages.booking.booking-start', [
            'cardata' => $car,
            'car_id' => $car->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_cost' => $totalCost,
        ]);
    }
    public function confirmBooking(ConfirmBookingRequest $request)
    {
        $validated = $request->validated();
        // Fetch car details
        $car = Car::findOrFail($validated['car_id']);
        //dd($car);
        // Wrap booking process in a transaction for integrity
        DB::beginTransaction();
        try {
            // Create the booking
            $booking = Rental::create([
                'user_id' => Auth::id(),
                'car_id' => $car->id,
                'start_date' => $validated['start_date'],
                'end_date' => $validated['end_date'],
                'total_cost' => $validated['total_cost'],
                'status' => 'ongoing', // Default status
            ]);
            $rental = [
                'customer_name' => auth()->user()->name,
                'car_name' => $car->name,
                'rented_at' => $validated['start_date'],
                'return_date' => $validated['end_date'],
                'total_price' => $validated['total_cost'],
            ];
            // Queue the emails to the customer and admin
            Mail::to(auth()->user()->email)->queue(new CustomerRentalDetailsMail($rental));
            $admin = User::where('role', 'admin')->first();
            Mail::to($admin->email)->queue(new CarBooked($rental));
            // Commit the transaction
            DB::commit();
            // Redirect to the success page
            return redirect(route('rental.success', $booking->id));
        } catch (\Exception $e) {
            // Rollback on failure
            DB::rollBack();
            return back()->withErrors(['An error occurred while processing the booking.']);
        }
    }
    public function bookingSuccess(Request $request, $rentalid)
    {
        $booking = Rental::where('id', $rentalid)->get()->first();
        return view('pages.booking.booking-success', [
            'bookingdata' => $booking,
        ]);
    }
    public function bookingCancel(Request $request, $rentalid)
    {
        $booking = Rental::findOrFail($rentalid);
        if ($booking->cancel()) {
            return redirect(route('booking.history'))->with('success', 'Rental has been canceled successfully.');
        } else {
            return redirect(route('booking.history'))->with('failed', 'Rental cannot be canceled.');
        }
    }
}