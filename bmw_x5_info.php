<?php
// bmw_x5_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMW X5 ‑ Car Information</title>

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

    <h1>BMW X5</h1>

    <p>
        The <strong>BMW X5</strong> is a mid-size luxury SUV offering a perfect balance of
        performance, comfort, and technology. It provides a spacious interior, premium
        features, and BMW’s signature driving dynamics.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>3.0L Inline-6 / 4.4L Twin-Turbo V8 / Plug-in Hybrid</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel / Hybrid</td></tr>
        <tr><td>Transmission</td><td>8‑Speed Automatic</td></tr>
        <tr><td>Power</td><td>286 PS – 530 PS</td></tr>
        <tr><td>Torque</td><td>450 – 750 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 – 7 seats (depending on variant)</td></tr>
        <tr><td>Boot Space</td><td>645 L</td></tr>
        <tr><td>Drive Type</td><td>Rear-Wheel Drive / xDrive AWD</td></tr>
        <tr><td>0-100 km/h</td><td>3.9 – 6.1 seconds</td></tr>
        <tr><td>Top Speed</td><td>250 km/h (electronically limited)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>12.3″ digital instrument cluster & 10.25″ central touchscreen</li>
        <li>iDrive 7.0 infotainment system with gesture control</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Premium leather interior with ambient lighting</li>
        <li>Panoramic sunroof</li>
        <li>Multi-zone climate control</li>
        <li>Optional M Sport package for enhanced performance</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>ABS with EBD & DSC</li>
        <li>Adaptive cruise control & lane keeping assist</li>
        <li>Blind spot monitoring</li>
        <li>Rear parking sensors & 360° camera</li>
        <li>Advanced driver assistance systems (ADAS)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹75 Lakh – ₹1.20 Crore (ex‑showroom, India) <br>
        <strong>Second-Hand:</strong> Depends on year, variant, and condition
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