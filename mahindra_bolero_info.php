<?php
// mahindra_bolero_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahindra Bolero - Car Information</title>

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

    <h1>Mahindra Bolero</h1>

    <p>
        The <strong>Mahindra Bolero</strong> is a rugged, durable 7‑seater SUV designed to handle daily use,
        tough roads, and rural or urban conditions with strong reliability and a classic SUV look. It’s
        known for its simple but robust build and practical features. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L mHawk75 Diesel, Turbocharged</td></tr>
        <tr><td>Fuel Type</td><td>Diesel</td></tr>
        <tr><td>Power</td><td>~75 bhp / 55.9 kW @ 3600 rpm</td></tr>
        <tr><td>Torque</td><td>210 Nm @ 1600–2200 rpm</td></tr>
        <tr><td>Transmission</td><td>5‑Speed Manual</td></tr>
        <tr><td>Drive Type</td><td>Rear‑Wheel Drive (RWD)</td></tr>
        <tr><td>Seating Capacity</td><td>7 seats</td></tr>
        <tr><td>Fuel Tank</td><td>60 L</td></tr>
        <tr><td>Dimensions (L×W×H)</td><td>3995×1745×1880 mm</td></tr>
        <tr><td>Wheelbase</td><td>2680 mm</td></tr>
        <tr><td>Ground Clearance</td><td>~180 mm</td></tr>
        <tr><td>Boot Space</td><td>Adequate, with foldable rear seating</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Robust ladder‑frame chassis for durability and strength</li>
        <li>Power steering and large wheelbase for stable handling :contentReference[oaicite:1]{index=1}</li>
        <li>215/75 R15 steel wheels with rugged tyres for tough roads :contentReference[oaicite:2]{index=2}</li>
        <li>Comfortable 7‑seat layout for families and group use</li>
        <li>Simple and functional interior design focused on reliability</li>
        <li>Available touchscreen infotainment and steering‑mounted controls in newer variants :contentReference[oaicite:3]{index=3}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Dual front airbags</li>
        <li>ABS with EBD (Electronic Brakeforce Distribution)</li>
        <li>Seat belt warning system</li>
        <li>Reverse parking sensors</li>
        <li>Strong body structure and ladder frame for impact resistance</li>
        <li>Engine immobiliser for theft protection :contentReference[oaicite:4]{index=4}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹7.99 Lakh – ₹9.99 Lakh (ex‑showroom India, varies by variant including Bolero & Bolero Neo) :contentReference[oaicite:5]{index=5} <br>
        <strong>Second‑Hand:</strong> Depends on year, condition, and mileage
    </p>

    <p>
        <em>
            This page is for informational purposes only.
            Purchase and booking services are handled through <strong>Quasar Drives</strong>.
        </em>
    </p>

    <!-- 🔙 BACK BUTTON -->
    <a class="back-btn" href="javascript:window.close();">
        ← Back to Car Details
    </a>

</div>

</body>
</html>