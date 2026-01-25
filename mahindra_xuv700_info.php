<?php
// mahindra_xuv700_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahindra XUV700 - Car Information</title>

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

    <h1>Mahindra XUV700</h1>

    <p>
        The <strong>Mahindra XUV700</strong> is a premium midsize SUV known for its strong performance,
        advanced tech features, modern comfort, and excellent safety. It’s ideal for families,
        long drives, and tech‑savvy drivers looking for a feature‑rich SUV experience. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>2.0L Turbo Petrol / 2.2L Turbo Diesel</td></tr>
        <tr><td>Power</td><td>Up to ~200 PS (Petrol) / ~185 PS (Diesel)</td></tr>
        <tr><td>Torque</td><td>~380 Nm (Petrol); Up to ~450 Nm (Diesel AT)</td></tr>
        <tr><td>Transmission</td><td>6‑Speed Manual / 6‑Speed Automatic</td></tr>
        <tr><td>Drive Type</td><td>FWD / AWD (Diesel Automatic)</td></tr>
        <tr><td>Seating Capacity</td><td>5 / 6 / 7 seats</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>60 L</td></tr>
        <tr><td>Boot Space</td><td>Adequate everyday cargo space, expands with seats folded</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Dual 10.25″ digital screens for instrument cluster and infotainment :contentReference[oaicite:1]{index=1}</li>
        <li>Mahindra AdrenoX connected car tech with Alexa voice support :contentReference[oaicite:2]{index=2}</li>
        <li>Wireless Apple CarPlay & Android Auto :contentReference[oaicite:3]{index=3}</li>
        <li>Panoramic sunroof (higher variants) :contentReference[oaicite:4]{index=4}</li>
        <li>Dual‑zone automatic climate control :contentReference[oaicite:5]{index=5}</li>
        <li>Premium audio and surround sound systems (varies by trim) :contentReference[oaicite:6]{index=6}</li>
        <li>Multiple drive modes for different terrain and efficiency needs :contentReference[oaicite:7]{index=7}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>5‑Star Global NCAP safety rating for adult protection :contentReference[oaicite:8]{index=8}</li>
        <li>7 airbags across cabin (higher trims) :contentReference[oaicite:9]{index=9}</li>
        <li>ABS with EBD & Electronic Stability Control :contentReference[oaicite:10]{index=10}</li>
        <li>Advanced Driver Assistance Systems (Level 2 ADAS):</li>
        <ul>
            <li>Adaptive Cruise Control</li>
            <li>Forward Collision Warning & Automatic Emergency Braking</li>
            <li>Lane Keep Assist & Traffic Sign Recognition</li>
        </ul>
        <li>360° camera and blind‑spot monitoring (top variants) :contentReference[oaicite:11]{index=11}</li>
        <li>ISOFIX child seat mounts :contentReference[oaicite:12]{index=12}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹13.99 Lakh – ₹26.99 Lakh (ex‑showroom India, varies by variant) :contentReference[oaicite:13]{index=13} <br>
        <strong>Second‑Hand:</strong> Depends on year, condition, and mileage.
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