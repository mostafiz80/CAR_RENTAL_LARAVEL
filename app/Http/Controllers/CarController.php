<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;
class CarController extends Controller
{
    public function carsListing(Request $request)
    {
        $query = Car::query();
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand', $request->brand);
        }
        if ($request->has('car_type') && $request->car_type != '') {
            $query->where('car_type', $request->car_type);
        }
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('daily_rent_price', [$request->min_price, $request->max_price]);
        }
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'LIKE', "%{$request->search}%");
        }
        return view('pages/cars/cars', [
            'cars' => $query->paginate(6),
            'filters' => Car::select('brand', 'car_type')->get(),
        ]);
    }
    public function carDetails(Request $request, Car $car)
    {
        return view('pages.cars.cardetails', [
            'cardata' => $car,
        ]);
    }
}