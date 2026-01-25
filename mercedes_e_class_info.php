<?php
// mercedes_e_class_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercedes‑Benz E‑Class ‑ Car Information</title>

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

    <h1>Mercedes‑Benz E‑Class</h1>

    <p>
        The <strong>Mercedes‑Benz E‑Class</strong> is a premium executive sedan known for its
        sophistication, comfort, high technology, and refined performance. It blends luxury
        and advanced features for a first‑class driving experience.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbo Petrol / 2.0L Diesel / Hybrid options</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel / Hybrid</td></tr>
        <tr><td>Transmission</td><td>9‑Speed Automatic (9G‑TRONIC)</td></tr>
        <tr><td>Power</td><td>197 PS – 333 PS (varies by engine)</td></tr>
        <tr><td>Torque</td><td>300 – 480 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>540 L</td></tr>
        <tr><td>Drive Type</td><td>Rear Wheel Drive (RWD) / 4MATIC AWD</td></tr>
        <tr><td>Ground Clearance</td><td>145 mm approx.</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>12.3″ dual displays for instrument cluster & infotainment (MBUX)</li>
        <li>Augmented reality navigation</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Ambient interior lighting with 64 colors</li>
        <li>Panoramic sunroof</li>
        <li>Heated & ventilated front seats with multi‑way adjustment</li>
        <li>Premium Burmester surround sound system</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags (front, side, curtain)</li>
        <li>Active Brake Assist & Attention Assist</li>
        <li>Adaptive cruise control (DISTRONIC)</li>
        <li>Lane keeping assist & blind spot assist</li>
        <li>Active parking assist with 360° camera</li>
        <li>Pre‑safe system</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹70 Lakh – ₹85 Lakh (ex‑showroom, India) <br>
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