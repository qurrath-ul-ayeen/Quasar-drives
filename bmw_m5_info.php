<?php
// bmw_m5_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMW M5 ‑ Car Information</title>

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

    <h1>BMW M5</h1>

    <p>
        The <strong>BMW M5</strong> is a high-performance luxury sports sedan, combining
        the comfort and features of a premium executive car with extreme power and
        precision handling. It’s ideal for those who want speed, style, and technology.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>4.4L Twin-Turbo V8 Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>8‑Speed M Steptronic Automatic</td></tr>
        <tr><td>Power</td><td>625 PS (Standard) / 625–750 PS (Competition)</td></tr>
        <tr><td>Torque</td><td>750 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>530 L</td></tr>
        <tr><td>Drive Type</td><td>M xDrive All-Wheel Drive</td></tr>
        <tr><td>0-100 km/h</td><td>3.3 seconds</td></tr>
        <tr><td>Top Speed</td><td>305 km/h (electronically limited)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>M-specific adaptive suspension & braking system</li>
        <li>12.3″ digital instrument cluster & 10.25″ infotainment display</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Premium leather and M-design interior</li>
        <li>Panoramic sunroof</li>
        <li>Multi-zone climate control</li>
        <li>Advanced navigation and performance telemetry</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>ABS with EBD & DSC</li>
        <li>Adaptive cruise control</li>
        <li>Lane keeping assist</li>
        <li>Blind spot monitoring</li>
        <li>Rear parking sensors & 360° camera</li>
        <li>M-specific driving assist features</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹1.85 Crore – ₹2.15 Crore (ex‑showroom, India) <br>
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