<h1>Your Car Rental Order</h1>
<p>Customer name {{ $rental['customer_name'] }},</p>
<p>Customer booked a car.</p>
<ul>
    <li>Car: {{ $rental['car_name'] }}</li>
    <li>Rental Date: {{ $rental['rented_at'] }}</li>
    <li>Return Date: {{ $rental['return_date'] }}</li>
    <li>Total Price: {{ $rental['total_price'] }}</li>
</ul>
<p>We hope you enjoy your ride!</p>
