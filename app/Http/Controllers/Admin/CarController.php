<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.cars.index', [
            'cars' => Car::orderBy('id', 'desc')->cursorPaginate(10),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.cars.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        // Initialize the image path
        $imagePath = null;
        // Handle the image upload
        if ($request->hasFile('image')) {
            // Get the original file extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Create a new filename with the current date and time
            $filename = 'car_image_' . now()->format('Ymd_His') . '.' . $extension;
            // Store the image in the 'public/cars/car_image' directory
            $imagePath = $request->file('image')->storeAs('cars/car_image', $filename, 'public');
        }
        // Create the car record in the database with the image path
        Car::create(array_merge($request->all(), ['image' => $imagePath]));
        return redirect()->route('cars.create')->with('success', 'New car added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('administrator.cars.show', [
            'car' => $car,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('administrator.cars.edit', [
            'car' => $car,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->all());
        return redirect()
            ->route('cars.edit', $car->id)
            ->with('success', 'Car infromation updated successfully done.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        try {
            if ($car->image) {
                Storage::disk('public')->delete($car->image); // Deletes the image from storage
            }
            // Attempt to delete the car
            Car::where('id', $car->id)->delete();
             return redirect()->route('cars.index')->with('success', 'Car deleted successfully done.');

        } catch (\Illuminate\Database\QueryException $e) {
            // Check if the error is a foreign key constraint violation
            if ($e->getCode() == '23000') {
                // Handle the foreign key violation and provide a user-friendly message
                return back()->withErrors(['error' => 'Cannot delete the car as it is linked to a rental record.']);
            }
        
            // Handle other potential query exceptions
            return back()->withErrors(['error' => 'An error occurred while deleting the car.']);
        }
        

    }
}
