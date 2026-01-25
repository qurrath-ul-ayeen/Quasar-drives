<?php
// honda_city_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Honda City - Car Information</title>

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

    <h1>Honda City</h1>

    <p>
        The <strong>Honda City</strong> is one of India’s most trusted and premium mid-size sedans.
        Known for its refined engine, spacious cabin, comfort, and reliability,
        the City is ideal for both family use and long highway drives.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L i-VTEC Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>6-Speed Manual / CVT Automatic</td></tr>
        <tr><td>Power</td><td>121 PS</td></tr>
        <tr><td>Torque</td><td>145 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>506 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>40 L</td></tr>
        <tr><td>Ground Clearance</td><td>165 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>8″ touchscreen infotainment system</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Fully digital instrument cluster</li>
        <li>Electric sunroof</li>
        <li>Automatic climate control</li>
        <li>Paddle shifters (CVT)</li>
        <li>Rear AC vents</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6 airbags (standard)</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill-start assist</li>
        <li>Lane watch camera</li>
        <li>Rear parking camera & sensors</li>
        <li>Honda Sensing (ADAS – selected variants)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹11.8 Lakh – ₹16.5 Lakh (ex-showroom, India) <br>
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