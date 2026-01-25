<?php
// tata_harrier_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tata Harrier - Car Information</title>

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

    <h1>Tata Harrier</h1>

    <p>
        The <strong>Tata Harrier</strong> is a premium mid‑size SUV that blends strong performance, modern
        design, and advanced safety. It’s a comfortable family SUV with feature‑rich tech and excellent road
        presence, making it a popular choice in the competitive SUV segment in India. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>Kryotec 2.0 L Turbocharged Diesel (1956 cc)</td></tr>
        <tr><td>Fuel Type</td><td>Diesel</td></tr>
        <tr><td>Power</td><td>~170 PS @ 3750 rpm</td></tr>
        <tr><td>Torque</td><td>~350 Nm @ 1750‑2500 rpm</td></tr>
        <tr><td>Transmission</td><td>6‑Speed Manual / 6‑Speed Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>~445 L (expandable to ~815 L)</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>50 L</td></tr>
        <tr><td>Dimensions (L×W×H)</td><td>~4605×1922×1718 mm</td></tr>
        <tr><td>Ground Clearance</td><td>~205 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Large 12.3″ floating touchscreen with Apple CarPlay & Android Auto :contentReference[oaicite:1]{index=1}</li>
        <li>10.25″ digital driver display & connected car tech :contentReference[oaicite:2]{index=2}</li>
        <li>Dual‑zone automatic climate control :contentReference[oaicite:3]{index=3}</li>
        <li>Wireless phone charging & premium JBL audio (varies by trim) :contentReference[oaicite:4]{index=4}</li>
        <li>Multi‑drive modes (Eco, City, Sport) :contentReference[oaicite:5]{index=5}</li>
        <li>Paddle shifters with automatic transmission :contentReference[oaicite:6]{index=6}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>5‑Star Global NCAP safety rating :contentReference[oaicite:7]{index=7}</li>
        <li>6‑7 airbags depending on variant :contentReference[oaicite:8]{index=8}</li>
        <li>ABS with EBD and Electronic Stability Control (ESC) :contentReference[oaicite:9]{index=9}</li>
        <li>Hill‑hold control and traction control :contentReference[oaicite:10]{index=10}</li>
        <li>360° camera and TPMS (varies by trim) :contentReference[oaicite:11]{index=11}</li>
        <li>Advanced Level‑2 ADAS (adaptive cruise control, lane assistance, AEB on select trims) :contentReference[oaicite:12]{index=12}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹14.99 Lakh – ₹25.94 Lakh (ex‑showroom, India; depending on variant and trim level) :contentReference[oaicite:13]{index=13} <br>
        <strong>Second‑Hand:</strong> Varies based on year, condition, and mileage.
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