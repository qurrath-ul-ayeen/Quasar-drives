<?php
// maruti_baleno_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maruti Suzuki Baleno - Car Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 20px auto;
            line-height: 1.6;
            background: #f7f7f7;
            padding: 20px;
        }
        h1, h2 { color: #2c3e50; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        .images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        img {
            width: 100%;
            max-width: 280px;
            height: auto;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        ul { margin-left: 20px; }
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-btn:hover { background: #2980b9; }
    </style>
</head>
<body>

    <h1>Maruti Suzuki Baleno</h1>

    <p>
        The <strong>Maruti Suzuki Baleno</strong> is a premium hatchback that offers a perfect balance
        of comfort, space, fuel efficiency, and modern features. It is known for its smooth ride
        quality and spacious cabin, making it a popular family car.
    </p>

    <h2>Key Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.2L DualJet Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>Manual / AMT</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
        <tr><td>Mileage</td><td>22 – 23 km/l</td></tr>
        <tr><td>Boot Space</td><td>318 liters</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
        <tr><td>Safety</td><td>Dual Airbags, ABS with EBD, ESP (select variants)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Premium hatchback design</li>
        <li>Touchscreen SmartPlay infotainment system</li>
        <li>Head-up display (HUD)</li>
        <li>360-degree camera (select variants)</li>
        <li>Comfortable and spacious interiors</li>
    </ul>

    <h2>Images</h2>
    <div class="images">
        <img src="assets/images/cars/baleno/front.jpg" alt="Maruti Baleno Front View">
        <img src="assets/images/cars/baleno/side.jpg" alt="Maruti Baleno Side View">
        <img src="assets/images/cars/baleno/interior.jpg" alt="Maruti Baleno Interior">
    </div>

    <p>
        <strong>Note:</strong> This page is for informational purposes only.
        All bookings, loans, and purchases are managed through
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