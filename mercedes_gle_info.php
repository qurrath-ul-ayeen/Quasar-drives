<?php
// mercedes_gle_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercedes‑Benz GLE ‑ Car Information</title>

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

    <h1>Mercedes‑Benz GLE</h1>

    <p>
        The <strong>Mercedes‑Benz GLE</strong> is a luxury mid‑size SUV designed for comfort,
        performance, and versatility. It combines spacious interior room, advanced technology,
        and refined driving dynamics for both city and highway use.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbo Petrol / 3.0L V6 / Diesel options</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>9‑Speed Automatic (9G‑TRONIC)</td></tr>
        <tr><td>Power</td><td>255 PS – 362 PS (varies by engine)</td></tr>
        <tr><td>Torque</td><td>370 – 520 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats (optional 7 seats)</td></tr>
        <tr><td>Boot Space</td><td>630 L</td></tr>
        <tr><td>Drive Type</td><td>4MATIC All‑Wheel Drive</td></tr>
        <tr><td>Ground Clearance</td><td>200 mm approx.</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>12.3″ touchscreen infotainment with MBUX</li>
        <li>Augmented reality navigation</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Panoramic sunroof</li>
        <li>Ambient interior lighting</li>
        <li>Heated & ventilated front seats</li>
        <li>360° camera with parking sensors</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>Active Brake Assist & Attention Assist</li>
        <li>Adaptive cruise control (DISTRONIC)</li>
        <li>Blind spot monitoring & lane assist</li>
        <li>Active parking assist</li>
        <li>Pre‑safe system</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹75 Lakh – ₹90 Lakh (ex‑showroom, India) <br>
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