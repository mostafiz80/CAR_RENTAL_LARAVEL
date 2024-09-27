<?php
namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class PagesController extends Controller
{
    public function homePage()
    {
        return view('pages/homepage', [
            'cars' => Car::inRandomOrder()->limit(10)->get(),
        ]);
    }
    public function aboutPage()
    {
        return view('pages/aboutpage');
    }
    public function contactPage()
    {
        return view('pages/contact');
    }
    public function createAdmin()
    {
        $admin = User::where('role', 'admin')->count();
        if (!$admin == 0) {
            return redirect(route('home'));
        } else {
            return view('pages.create-admin');
        }
    }
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);
        event(new Registered($admin));
        Auth::login($admin);
        return redirect(route('admin.dashboard'));
    }
}