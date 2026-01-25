<?php
// audi_a4_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audi A4 ‑ Car Information</title>

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

    <h1>Audi A4</h1>

    <p>
        The <strong>Audi A4</strong> is a premium luxury sedan that offers a balanced blend
        of performance, technology, and comfort. It’s known for its smooth ride, elegant design,
        and advanced infotainment features.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbocharged Petrol / Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>7‑Speed S‑Tronic Dual‑Clutch</td></tr>
        <tr><td>Power</td><td>190 PS – 249 PS (varies by engine)</td></tr>
        <tr><td>Torque</td><td>320 – 370 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>460 L</td></tr>
        <tr><td>Drive Type</td><td>Front‑Wheel Drive / Quattro AWD</td></tr>
        <tr><td>Ground Clearance</td><td>145 mm approx.</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.1″ touchscreen infotainment with MMI® Navigation Plus</li>
        <li>Virtual Cockpit digital instrument cluster</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>LED headlights & taillights</li>
        <li>Multi‑zone climate control</li>
        <li>Leather seating with power adjust</li>
        <li>Front & rear parking sensors</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>ABS with EBD & ESC</li>
        <li>Adaptive cruise control</li>
        <li>Lane keeping assist</li>
        <li>Blind spot monitoring</li>
        <li>Rear‑view camera</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹45 Lakh – ₹55 Lakh (ex‑showroom, India) <br>
        <strong>Second‑Hand:</strong> Depends on year, variant, and condition
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