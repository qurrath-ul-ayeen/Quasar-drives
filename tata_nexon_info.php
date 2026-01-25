<?php
// tata_nexon_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tata Nexon - Car Information</title>

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

    <h1>Tata Nexon</h1>

    <p>
        The <strong>Tata Nexon</strong> is a popular compact SUV known for its strong safety, versatile engine
        options, modern tech features, and efficient performance. It’s available in petrol, diesel, and CNG
        variants with manual and automatic transmissions to suit different driving needs. :contentReference[oaicite:0]{index=0}
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.2 L Turbo Petrol / 1.5 L Turbo Diesel / 1.2 L Turbo CNG</td></tr>
        <tr><td>Fuel Type</td><td>Petrol, Diesel, CNG</td></tr>
        <tr><td>Transmission</td><td>6‑Speed Manual / 6‑Speed AMT / 7‑Speed DCA</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>~382 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>~44 L</td></tr>
        <tr><td>Dimensions</td><td>Compact SUV (Sub‑4 m)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Touchscreen infotainment with Apple CarPlay & Android Auto (varies by variant) :contentReference[oaicite:1]{index=1}</li>
        <li>Sunroof option on higher trims :contentReference[oaicite:2]{index=2}</li>
        <li>Modern connected car tech (varies by variant) :contentReference[oaicite:3]{index=3}</li>
        <li>Dual‑tone exterior colour options :contentReference[oaicite:4]{index=4}</li>
        <li>Multiple drive options with manual, AMT, and DCA choices :contentReference[oaicite:5]{index=5}</li>
        <li>Efficient fuel economy across engine types :contentReference[oaicite:6]{index=6}</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Global NCAP 5‑Star Safety Rating for both adult and child protection — one of the highest in its class :contentReference[oaicite:7]{index=7}</li>
        <li>6 airbags (standard across most variants) :contentReference[oaicite:8]{index=8}</li>
        <li>Electronic Stability Program (ESP) and ABS with EBD :contentReference[oaicite:9]{index=9}</li>
        <li>ISOFIX child seat anchorages :contentReference[oaicite:10]{index=10}</li>
        <li>360‑degree camera and blind‑view monitor (higher trims) :contentReference[oaicite:11]{index=11}</li>
        <li>Front and rear parking sensors :contentReference[oaicite:12]{index=12}</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹8.0 Lakh – ₹14.2 Lakh (ex‑showroom, approximate) across petrol, diesel, and CNG variants. :contentReference[oaicite:13]{index=13} <br>
        <strong>Second‑Hand:</strong> Depends on model year, condition, and mileage.
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