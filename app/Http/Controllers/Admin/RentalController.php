<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.rentals.index', [
            'bookings' => Rental::with('car', 'user')->cursorPaginate(10),
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show($rental)
    {
        $rental = Rental::find($rental)->with('car', 'user')->first();
        return view('administrator.rentals.show', [
            'booking'=> $rental,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        return view('administrator.rentals.edit', [
            'cars' => Car::all(),
            'rental' => Rental::where('id', $rental->id)
                ->with('user', 'car')
                ->first(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateStatusComplete(Rental $rental)
    {
        Rental::where('id', $rental->id)->update(['status' => Rental::STATUS_COMPLETED]);
        return back()->with('success', 'Status updated successfully done. Ride Completed');
    }
    public function updateStatusCancel(Rental $rental)
    {
        // Attempt to cancel the rental
        if ($rental->cancel()) {
            return redirect()->route('rentals.index')->with('success', 'Rental has been canceled successfully.');
        } else {
            return redirect()->route('rentals.index')->with('cancel', 'Rental cannot be canceled.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();
        return back()->with('success','Booking has been deleted from our records.');
    }
}