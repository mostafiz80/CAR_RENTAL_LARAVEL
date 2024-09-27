<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.customers.index', [
            'users' => User::where('role', 'customer')->simplePaginate(10),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.customers.add-new');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            return redirect(route('customers.create'))->with('success', 'Customer account created successfully done.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(User $customer)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $customer)
    {
        return view('administrator.customers.edit', [
            'user' => $customer,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $customer)
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
        ]);
        $customer->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        if ($customer) {
            return redirect(route('customers.edit', $customer->id))->with('success', 'Customer updated successfully done.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $customer)
    {
        try {
            $customer->delete();
            return redirect(route('customers.index'))->with('success', 'User deleted successfully done.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Check if the error is a foreign key constraint violation
            if ($e->getCode() == '23000') {
                // Handle the foreign key violation and provide a user-friendly message
                return back()->withErrors(['error' => 'Cannot delete the user as it is linked to a rental record.']);
            }
            // Handle other potential query exceptions
            return back()->withErrors(['error' => 'An error occurred while deleting the car.']);
        }
    }
    public function userProfile()
    {
        $user = auth('')->user();
        return view('administrator.customers.profile', [
            'user' => $user,
        ]);
    }
}