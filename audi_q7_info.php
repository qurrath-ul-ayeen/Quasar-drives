<?php
// audi_q7_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audi Q7 ‑ Car Information</title>

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

    <h1>Audi Q7</h1>

    <p>
        The <strong>Audi Q7</strong> is a luxury full‑size SUV that offers premium comfort,
        advanced technology, spacious seating, and confident performance for family and
        adventure driving.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbo Petrol / 3.0L Turbo V6 Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>8‑Speed Tiptronic Automatic</td></tr>
        <tr><td>Power</td><td>249 PS – 335 PS (varies by engine)</td></tr>
        <tr><td>Torque</td><td>370 – 700 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>7 seats</td></tr>
        <tr><td>Boot Space</td><td>890 L (with seats up)</td></tr>
        <tr><td>Drive Type</td><td>Quattro All‑Wheel Drive</td></tr>
        <tr><td>Ground Clearance</td><td>200 mm approx.</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.1″ touchscreen MMI® Navigation Plus</li>
        <li>Virtual Cockpit digital driver display</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Panoramic sunroof</li>
        <li>Tri‑zone automatic climate control</li>
        <li>Leather seats with power adjust</li>
        <li>360° camera with parking sensors</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>ABS with EBD & ESC</li>
        <li>Adaptive cruise control</li>
        <li>Lane keeping assist</li>
        <li>Blind spot monitoring</li>
        <li>Rear‑cross traffic assist</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹75 Lakh – ₹92 Lakh (ex‑showroom, India) <br>
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