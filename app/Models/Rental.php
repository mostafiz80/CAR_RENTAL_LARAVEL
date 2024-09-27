<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Rental extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'car_id', 'start_date', 'end_date', 'total_cost', 'status'];

    const STATUS_PENDING = 'pending';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELED = 'canceled';
    
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Method to check if the rental can be canceled
    public function canBeCanceled()
    {
        return $this->status === 'ongoing' && $this->start_date > now();
    }

    // Cancel the rental
    public function cancel()
    {
        if ($this->canBeCanceled()) {
            $this->update(['status' => 'canceled']);
            return true;
        }
        return false;
    }

    /**
     * Check if the car is available for the selected date range.
     *
     * @param int $carId
     * @param string $startDate
     * @param string $endDate
     * @return bool
     */
    public static function isCarAvailable($carId, $startDate, $endDate)
    {
        // Check if there is any rental that overlaps with the requested date range for the specific car
        return !self::where('car_id', $carId)  // Only check for this specific car
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])  // Overlaps at start
                    ->orWhereBetween('end_date', [$startDate, $endDate])  // Overlaps at end
                    ->orWhere(function ($q) use ($startDate, $endDate) {
                        $q->where('start_date', '<=', $startDate)   // Booking starts before or at startDate
                            ->where('end_date', '>=', $endDate);      // And ends after or at endDate
                    });
            })
            ->exists();  // If any overlapping rental exists for this car, return false (not available)
    }


    /**
     * Calculate the total cost based on the car's daily rent price and rental duration.
     *
     * @param float $dailyRentPrice
     * @param string $startDate
     * @param string $endDate
     * @return float
     */
    public static function calculateTotalCost($dailyRentPrice, $startDate, $endDate)
    {
        $numberOfDays = Carbon::parse($startDate)->diffInDays(Carbon::parse($endDate)) + 1; // Include both days
        return $dailyRentPrice * $numberOfDays;
    }

}
