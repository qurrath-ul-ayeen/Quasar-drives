<?php
// porsche_911_gt3_info.php

$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Porsche 911 GT3 - Car Information</title>
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

<h1>Porsche 911 GT3</h1>

<p>The Porsche 911 GT3 is a high-performance sports car designed for speed, precision, and track-ready performance. It combines lightweight engineering, aerodynamic design, and a naturally aspirated engine for thrilling driving experiences.</p>

<h2>Specifications</h2>
<table>
    <tr><th>Feature</th><th>Details</th></tr>
    <tr><td>Engine</td><td>4.0L Naturally Aspirated Flat-6</td></tr>
    <tr><td>Fuel Type</td><td>Petrol</td></tr>
    <tr><td>Transmission</td><td>7-Speed PDK / 6-Speed Manual</td></tr>
    <tr><td>Seating Capacity</td><td>2</td></tr>
    <tr><td>Mileage</td><td>Approx. 10-12 km/l</td></tr>
    <tr><td>Boot Space</td><td>132 liters</td></tr>
    <tr><td>Top Speed</td><td>318 km/h</td></tr>
    <tr><td>Engine Power</td><td>502 hp</td></tr>
    <tr><td>Dimensions (L×W×H)</td><td>4580 × 1880 × 1250 mm</td></tr>
    <tr><td>0-100 km/h</td><td>3.4 seconds</td></tr>
    <tr><td>Safety Features</td><td>ABS, Traction Control, Multiple Airbags, Stability Control</td></tr>
</table>

<h2>Images</h2>
<img src="assets/images/cars/porsche_911_gt3/front.jpg" alt="Porsche 911 GT3 Front View">
<img src="assets/images/cars/porsche_911_gt3/side.jpg" alt="Porsche 911 GT3 Side View">
<img src="assets/images/cars/porsche_911_gt3/interior.jpg" alt="Porsche 911 GT3 Interior">

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