<?php
// tata_punch_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tata Punch - Car Information</title>

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

    <h1>Tata Punch</h1>

    <p>
        The <strong>Tata Punch</strong> is a compact SUV known for robust safety, modern features and strong
        performance in the sub‑compact class. It’s ideal for city driving, daily commutes and short trips,
        offering a balanced mix of comfort, tech and practicality. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.2 L Revotron Petrol / 1.2 L CNG / 1.2 L Turbo Petrol (facelift) :contentReference[oaicite:1]{index=1}</td></tr>
        <tr><td>Fuel Type</td><td>Petrol, CNG</td></tr>
        <tr><td>Transmission</td><td>5‑Speed Manual / 5‑Speed AMT :contentReference[oaicite:2]{index=2}</td></tr>
        <tr><td>Power</td><td>~87 bhp (NA Petrol) / ~72 bhp (CNG) / ~118 bhp (Turbo Petrol) :contentReference[oaicite:3]{index=3}</td></tr>
        <tr><td>Torque</td><td>~115 Nm (NA Petrol) / ~103 Nm (CNG) / ~170 Nm (Turbo Petrol) :contentReference[oaicite:4]{index=4}</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>~366 L (approx.) :contentReference[oaicite:5]{index=5}</td></tr>
        <tr><td>Ground Clearance</td><td>~187 mm :contentReference[oaicite:6]{index=6}</td></tr>
        <tr><td>Dimensions (L×W×H)</td><td>~3827×1742×1615 mm :contentReference[oaicite:7]{index=7}</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>~37 L :contentReference[oaicite:8]{index=8}</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Touchscreen infotainment system with Apple CarPlay & Android Auto :contentReference[oaicite:9]{index=9}</li>
        <li>10.25″ touchscreen available on facelift top trims :contentReference[oaicite:10]{index=10}</li>
        <li>Automatic climate control (higher variants) :contentReference[oaicite:11]{index=11}</li>
        <li>Multi‑drive modes like Eco and City :contentReference[oaicite:12]{index=12}</li>
        <li>LED lighting and stylish alloy wheels on select trims :contentReference[oaicite:13]{index=13}</li>
        <li>Wireless phone charging and rear AC vents (top variants) :contentReference[oaicite:14]{index=14}</li>
        <li>iRA connected car features on higher trims :contentReference[oaicite:15]{index=15}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>5‑Star safety rating (Bharat NCAP / Global NCAP) :contentReference[oaicite:16]{index=16}</li>
        <li>Dual front airbags standard :contentReference[oaicite:17]{index=17}</li>
        <li>ABS with EBD, ESC & Hill‑Hold Assist :contentReference[oaicite:18]{index=18}</li>
        <li>Rear parking sensors and 360° camera (facelift) :contentReference[oaicite:19]{index=19}</li>
        <li>ISOFIX child seat mounts :contentReference[oaicite:20]{index=20}</li>
        <li>Tyre Pressure Monitoring System (TPMS) :contentReference[oaicite:21]{index=21}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹6.1 Lakh – ₹10.3 Lakh (ex‑showroom India, varies by variant) :contentReference[oaicite:22]{index=22} <br>
        <strong>Second‑Hand:</strong> Depends on year, condition, and mileage.
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