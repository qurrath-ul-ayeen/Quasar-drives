<?php
// hyundai_venue_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hyundai Venue - Car Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 20px auto;
            line-height: 1.7;
            background: #f4f6f8;
            padding: 20px;
        }
        .box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        ul {
            margin-left: 20px;
        }
        .back-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
        }
        .back-btn:hover { background: #2980b9; }
    </style>
</head>
<body>

<div class="box">

    <h1>Hyundai Venue</h1>

    <p>
        The <strong>Hyundai Venue</strong> is a compact SUV designed for urban driving,
        offering stylish looks, modern features, efficient engines, and reliable safety.
        It is well-suited for city use while still being comfortable on highways.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.2L Petrol / 1.0L Turbo Petrol / 1.5L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol, Diesel</td></tr>
        <tr><td>Transmission</td><td>5-Speed Manual / 6-Speed Manual / 7-Speed DCT</td></tr>
        <tr><td>Power</td><td>83 PS / 120 PS / 100 PS</td></tr>
        <tr><td>Torque</td><td>114 Nm / 172 Nm / 240 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>350 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>45 L</td></tr>
        <tr><td>Ground Clearance</td><td>195 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>8″ touchscreen infotainment system</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Electric sunroof</li>
        <li>BlueLink connected car technology</li>
        <li>Wireless phone charging</li>
        <li>Digital instrument cluster</li>
        <li>Rear AC vents</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6 airbags (standard)</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill-start assist</li>
        <li>Rear parking camera</li>
        <li>Front & rear parking sensors</li>
        <li>TPMS (Tyre Pressure Monitoring System)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹7.9 Lakh – ₹13.6 Lakh (ex-showroom, India) <br>
        <strong>Second-Hand:</strong> Depends on year, condition, and mileage
    </p>

    <p>
        <em>
            This page is for informational purposes only.
            Purchase and booking services are handled through <strong>Quasar Drives</strong>.
        </em>
    </p>

    <a class="back-btn" href="javascript:window.close();">
        ← Back to Car Details
    </a>

</div>

</body>
</html>