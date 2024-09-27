<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function login()
    {
        return view('administrator.auth.login');
    }
    public function dashboard()
    {
        $stats = Car::selectRaw(
            '
        COUNT(*) as total_cars,
        SUM(availability = 1) as total_available_cars
    ',
        )->first();
        $totalcar = $stats->total_cars;
        $totalavailablecar = $stats->total_available_cars;
        $totalrentals = Rental::where('status', 'completed')->count();
        $totalearned = Rental::where('status', 'completed')->sum('total_cost');
        return view('administrator.pages.dashboard', [
            'totalcar' => $totalcar,
            'totalavailablecar' => $totalavailablecar,
            'totalrentals' => $totalrentals,
            'totalearned' => $totalearned,
        ]);
    }
    public function permission()
    {
        return view('administrator.manage-role');
    }
}