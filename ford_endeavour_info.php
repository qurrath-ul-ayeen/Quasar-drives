<?php
// ford_endeavour_info.php

$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ford Endeavour - Car Information</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 20px auto; line-height: 1.6; }
        h1 { color: #2c3e50; }
        h2 { color: #34495e; margin-top: 25px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 8px; text-align: left; }
        img { max-width: 100%; height: auto; margin: 10px 0; border-radius: 6px; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .back-button {
            display: inline-block;
            margin: 25px 0;
            text-decoration: none;
            color: #fff;
            background: #e74c3c;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-button:hover { background: #c0392b; }
        .note { font-size: 14px; color: #555; margin-top: 25px; }
    </style>
</head>
<body>

<h1>Ford Endeavour</h1>

<p>The Ford Endeavour is a premium SUV designed for both city driving and off-road adventures. It offers luxurious interiors, advanced safety features, and powerful performance suitable for long journeys and rough terrains.</p>

<h2>Specifications</h2>
<table>
    <tr><th>Feature</th><th>Details</th></tr>
    <tr><td>Engine</td><td>2.0L Bi-Turbo Diesel / 3.2L Diesel</td></tr>
    <tr><td>Fuel Type</td><td>Diesel</td></tr>
    <tr><td>Transmission</td><td>10-Speed Automatic / 6-Speed Manual</td></tr>
    <tr><td>Seating Capacity</td><td>7</td></tr>
    <tr><td>Mileage</td><td>12 - 14 km/l</td></tr>
    <tr><td>Boot Space</td><td>286 liters</td></tr>
    <tr><td>Top Speed</td><td>180 km/h</td></tr>
    <tr><td>Engine Power</td><td>168 - 197 hp</td></tr>
    <tr><td>Dimensions (L×W×H)</td><td>4915 × 1860 × 1835 mm</td></tr>
    <tr><td>Ground Clearance</td><td>225 mm</td></tr>
    <tr><td>Safety Features</td><td>6 Airbags, ABS with EBD, Electronic Stability Program, Hill Launch Assist, Rear Parking Sensors</td></tr>
</table>

<h2>Images</h2>
<img src="assets/images/cars/endeavour/front.jpg" alt="Ford Endeavour Front View">
<img src="assets/images/cars/endeavour/side.jpg" alt="Ford Endeavour Side View">
<img src="assets/images/cars/endeavour/interior.jpg" alt="Ford Endeavour Interior">

<p class="note">
    Note: This page is for informational purposes only. All purchases, loans, and contact are handled through <strong>Quasar Drives</strong>.
</p>

<!-- Back Button -->
<div class="center">
    <a href="car_details.php?id=<?php echo $car_id; ?>" class="back-button">
        ← Back to Car Details
    </a>
</div>

</body>
</html>