<h1>Your Car Rental Details</h1>
<p>Dear {{ $rental['customer_name'] }},</p>
<p>Thank you for renting a car with us. Here are your rental details:</p>
<ul>
    <li>Car: {{ $rental['car_name'] }}</li>
    <li>Rental Date: {{ $rental['rented_at'] }}</li>
    <li>Return Date: {{ $rental['return_date'] }}</li>
    <li>Total Price: {{ $rental['total_price'] }}</li>
</ul>
<p>We hope you enjoy your ride!</p>
