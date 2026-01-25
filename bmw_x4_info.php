<?php
// bmw_x4_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMW X4 ‑ Car Information</title>

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

    <h1>BMW X4</h1>

    <p>
        The <strong>BMW X4</strong> is a luxury compact coupe-SUV combining sporty design,
        powerful performance, and advanced technology. It offers a dynamic driving experience
        with comfort and premium features.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbocharged Petrol / Diesel / 3.0L Turbocharged Petrol / Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>8‑Speed Automatic / 7‑Speed Dual Clutch</td></tr>
        <tr><td>Power</td><td>184 PS – 360 PS</td></tr>
        <tr><td>Torque</td><td>300 – 500 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>500 L</td></tr>
        <tr><td>Drive Type</td><td>Rear-Wheel Drive / xDrive AWD</td></tr>
        <tr><td>Ground Clearance</td><td>183 mm approx.</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.25″ iDrive touchscreen infotainment system</li>
        <li>Digital instrument cluster</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>LED headlights & taillights</li>
        <li>Leather seats with power adjustment</li>
        <li>Panoramic sunroof</li>
        <li>Multi-zone climate control</li>
        <li>Optional M Sport package for enhanced performance</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>ABS with EBD & DSC</li>
        <li>Adaptive cruise control</li>
        <li>Lane departure warning</li>
        <li>Blind spot monitoring</li>
        <li>Rear parking sensors & 360° camera</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹65 Lakh – ₹80 Lakh (ex‑showroom, India) <br>
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