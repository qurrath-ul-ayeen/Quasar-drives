<?php
// tata_safari_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tata Safari - Car Information</title>

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

    <h1>Tata Safari</h1>

    <p>
        The <strong>Tata Safari</strong> is a flagship SUV from Tata Motors that blends rugged capability,
        spacious comfort, and modern technology. Known for its commanding road presence, strong safety
        ratings, and versatile seating (6‑seater or 7‑seater), the Safari appeals to families and adventure
        seekers alike. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0 L Kryotec Turbocharged Diesel (1956 cc)</td></tr>
        <tr><td>Power</td><td>~170 PS @ 3750 rpm</td></tr>
        <tr><td>Torque</td><td>350 Nm @ 1750‑2500 rpm</td></tr>
        <tr><td>Transmission</td><td>6‑Speed Manual / 6‑Speed Automatic</td></tr>
        <tr><td>Fuel Type</td><td>Diesel (Petrol variants announced too)</td></tr>
        <tr><td>Seating Capacity</td><td>6 / 7 (varies by trim)</td></tr>
        <tr><td>Boot Space</td><td>~420 L (third row folded)</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>50 L</td></tr>
        <tr><td>Dimensions</td><td>L ~4668 mm × W ~1922 mm × H ~1795 mm</td></tr>
        <tr><td>Wheelbase</td><td>2741 mm</td></tr>
        <tr><td>Ground Clearance</td><td>~200‑205 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Large touchscreen infotainment with Apple CarPlay & Android Auto (varies by trim) :contentReference[oaicite:1]{index=1}</li>
        <li>Digital instrument cluster with clear graphics :contentReference[oaicite:2]{index=2}</li>
        <li>Panoramic sunroof (premium trims) :contentReference[oaicite:3]{index=3}</li>
        <li>Premium JBL audio system with subwoofer (in higher trims) :contentReference[oaicite:4]{index=4}</li>
        <li>Terrain response modes (Normal, Rough, Wet) for varied driving conditions :contentReference[oaicite:5]{index=5}</li>
        <li>Heated seats and ventilated front seats (in top variants) :contentReference[oaicite:6]{index=6}</li>
        <li>iRA connected car technology (features depend on variant) :contentReference[oaicite:7]{index=7}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>5‑Star Global NCAP safety rating (excellent adult & child protection) :contentReference[oaicite:8]{index=8}</li>
        <li>6‑7 airbags depending on variant (including knee airbag) :contentReference[oaicite:9]{index=9}</li>
        <li>ABS with EBD & Electronic Stability Control (ESC) :contentReference[oaicite:10]{index=10}</li>
        <li>Traction Control & Hill‑Hold Assist :contentReference[oaicite:11]{index=11}</li>
        <li>Tyre Pressure Monitoring System (TPMS) :contentReference[oaicite:12]{index=12}</li>
        <li>360° camera and blind‑spot monitoring (top trims) :contentReference[oaicite:13]{index=13}</li>
        <li>Level‑2 ADAS suite on higher variants (adaptive cruise, AEB, lane assist) :contentReference[oaicite:14]{index=14}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹13.29 Lakh – ₹30.79 Lakh (ex‑showroom India, varies significantly by trim and features) :contentReference[oaicite:15]{index=15} <br>
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