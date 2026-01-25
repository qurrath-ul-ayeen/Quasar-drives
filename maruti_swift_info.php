<?php
// maruti_swift_info.php

$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maruti Suzuki Swift - Car Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 20px auto;
            line-height: 1.6;
            background: #f7f7f7;
            padding: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100%;
            max-width: 280px;
            height: auto;
            margin: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-button:hover { background: #c0392b; }
        .note { font-size: 14px; color: #555; margin-top: 25px; }
        
    </style>
</head>
<body>

    <h1>Maruti Suzuki Swift</h1>

    <p>
        The <strong>Maruti Suzuki Swift</strong> is one of India’s most popular premium hatchbacks,
        known for its sporty design, excellent fuel efficiency, and reliable performance.
        It is ideal for city driving as well as long highway journeys.
    </p>

    <h2>Key Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.2L DualJet Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>Manual / AMT</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
        <tr><td>Mileage</td><td>22 – 23 km/l</td></tr>
        <tr><td>Boot Space</td><td>268 liters</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
        <tr><td>Safety</td><td>Dual Airbags, ABS with EBD</td></tr>
    </table>

    <h2>Features</h2>
    <ul>
        <li>Sporty and aerodynamic design</li>
        <li>Touchscreen infotainment system</li>
        <li>Steering-mounted controls</li>
        <li>Automatic climate control</li>
        <li>Excellent resale value</li>
    </ul>

    <h2>Images</h2>
    <div class="images">
        <img src="assets/images/cars/swift/front.jpg" alt="Maruti Swift Front View">
        <img src="assets/images/cars/swift/side.jpg" alt="Maruti Swift Side View">
        <img src="assets/images/cars/swift/interior.jpg" alt="Maruti Swift Interior">
    </div>

    <p>
        <strong>Note:</strong> This page is for informational purposes only.
        Booking, loan, and purchase options are handled directly through
        <strong>Quasar Drives</strong>.
    </p>

    <!-- 🔙 BACK BUTTON -->
   <div class="center">
    <a href="car_details.php?id=<?php echo $car_id; ?>" class="back-button">
        ← Back to Car Details
    </a>
</div>
</body>
</html>