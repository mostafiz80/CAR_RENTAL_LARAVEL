<?php
namespace App\Http\Controllers;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    public function customerDashboard()
    {
        $user = auth()->user();
        return view('customers/dashboard', ['user' => $user]);
    }
    public function bookingHistory()
    {
        $userId = Auth::id();
        // Fetch current bookings (ongoing or future)
        $currentBookings = Rental::where('user_id', $userId)->where('status', 'ongoing')->where('end_date', '>=', now())->with('car', 'user')->get();
        // Fetch past bookings (completed, canceled, or ended)
        $pastBookings = Rental::where('user_id', $userId)
            ->where(function ($query) {
                $query->where('status', 'completed')->orWhere('status', 'canceled')->orWhere('end_date', '<', now()); // Booking has already ended
            })
            ->with('car', 'user')
            ->get();
        $user = auth()->user();
        $rentalhistory = Rental::where('user_id', Auth::id())->with('car', 'user')->get();
        return view('customers/booking-history', [
            'currentBookings' => $currentBookings,
            'pastBookings' => $pastBookings,
        ]);
    }
    public function bookingDetails($booking)
    {
        return view('customers.booking-details', [
            'booking' => Rental::where('id', $booking)->with('car')->first(),
        ]);
    }
    public function updateCurrentUser(UpdateProfileRequest $request)
    {
        $user = User::where('id', auth()->user()->id);
        $user->update($request->only('name', 'address', 'phone'));
        return redirect()->back()->with('success', 'Profile updated successfully done.');
    }
    public function changePassword()
    {
        return view('customers.changepwd');
    }
    public function updatePassword(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        // Update the password
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        // Redirect with success message
        return back()->with('success', 'Password updated successfully.');
    }
}