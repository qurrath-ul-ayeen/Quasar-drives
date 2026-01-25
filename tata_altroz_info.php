<?php
// tata_altroz_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tata Altroz - Car Information</title>

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

    <h1>Tata Altroz</h1>

    <p>
        The <strong>Tata Altroz</strong> is a premium hatchback known for its strong safety ratings, modern
        design, efficient engines, and tech‑rich features. It competes in the premium hatch segment and is
        available with petrol, diesel, and iCNG powertrains for versatility. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.2 L Petrol / 1.5 L Diesel / 1.2 L iCNG</td></tr>
        <tr><td>Fuel Type</td><td>Petrol, Diesel, CNG</td></tr>
        <tr><td>Transmission</td><td>5‑Speed Manual / AMT / DCA (varies by engine)</td></tr>
        <tr><td>Power</td><td>~87 PS (Petrol) / ~89 PS (Diesel) / ~74 PS (iCNG)</td></tr>
        <tr><td>Torque</td><td>~115 Nm (Petrol) / ~200 Nm (Diesel) / ~103 Nm (iCNG)</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>~345 L (CNG slightly less)</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>~37 L</td></tr>
        <tr><td>Dimensions (L×W×H)</td><td>~3990×1755×1523 mm</td></tr>
        <tr><td>Ground Clearance</td><td>~165 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.25″ HD touchscreen infotainment with Apple CarPlay & Android Auto (higher trims) :contentReference[oaicite:1]{index=1}</li>
        <li>10.25″ digital instrument cluster with connected car tech (iRA) :contentReference[oaicite:2]{index=2}</li>
        <li>360° surround view camera with blind‑view monitor (higher trims) :contentReference[oaicite:3]{index=3}</li>
        <li>Wireless phone charging and dual USB charging ports :contentReference[oaicite:4]{index=4}</li>
        <li>Voice‑enabled electric sunroof (select variants) :contentReference[oaicite:5]{index=5}</li>
        <li>Air purifier and express cooling features :contentReference[oaicite:6]{index=6}</li>
        <li>Ambient cabin lighting for premium feel :contentReference[oaicite:7]{index=7}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>5‑Star Bharat NCAP safety rating (petrol, diesel & iCNG) — one of the highest in the segment :contentReference[oaicite:8]{index=8}</li>
        <li>Six airbags standard across all variants :contentReference[oaicite:9]{index=9}</li>
        <li>ABS with EBD & ESP electronic stability program :contentReference[oaicite:10]{index=10}</li>
        <li>ISOFIX child seat mounts :contentReference[oaicite:11]{index=11}</li>
        <li>360° camera & blind‑view monitor (select trims) :contentReference[oaicite:12]{index=12}</li>
        <li>SOS & breakdown assistance features :contentReference[oaicite:13]{index=13}</li>
        <li>Rain‑sensing wipers and auto headlamps (higher trims) :contentReference[oaicite:14]{index=14}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹6.89 Lakh – ₹11+ Lakh (ex‑showroom India, varies by engine and trim) :contentReference[oaicite:15]{index=15} <br>
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