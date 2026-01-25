<?php
// hyundai_i20_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hyundai i20 - Car Information</title>

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

    <h1>Hyundai i20</h1>

    <p>
        The <strong>Hyundai i20</strong> is a premium hatchback known for its stylish design,
        refined ride quality, modern interiors, and advanced features.
        It is ideal for city driving while remaining comfortable on highways.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.2L Petrol / 1.0L Turbo Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>5-Speed Manual / IVT / 7-Speed DCT</td></tr>
        <tr><td>Power</td><td>83 PS (1.2L) / 120 PS (Turbo)</td></tr>
        <tr><td>Torque</td><td>115 Nm / 172 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>311 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>37 L</td></tr>
        <tr><td>Ground Clearance</td><td>170 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.25″ touchscreen infotainment system</li>
        <li>10.25″ digital instrument cluster</li>
        <li>Bose premium sound system</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Electric sunroof</li>
        <li>Ambient interior lighting</li>
        <li>Wireless phone charging</li>
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
        <strong>New:</strong> ₹7.0 Lakh – ₹11.2 Lakh (ex-showroom, India) <br>
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