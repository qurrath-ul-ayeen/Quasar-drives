<?php
// mahindra_thar_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahindra Thar - Car Information</title>

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

    <h1>Mahindra Thar</h1>

    <p>
        The <strong>Mahindra Thar</strong> is a rugged off-road SUV designed for adventure enthusiasts.
        It combines strong performance, 4x4 capabilities, and stylish design while maintaining modern
        comfort features. Perfect for off-road driving, weekend trips, and urban adventures alike.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbo Petrol / 2.2L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>6-Speed Manual / 6-Speed Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>4 / 5 depending on variant</td></tr>
        <tr><td>Mileage</td><td>12 – 16 km/l (approx.)</td></tr>
        <tr><td>Boot Space</td><td>Small cargo area, expandable with seats folded</td></tr>
        <tr><td>Drive Type</td><td>4x4 Off-Road Capable</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Removable hard/soft top roof</li>
        <li>Touchscreen infotainment system with Apple CarPlay & Android Auto</li>
        <li>All-terrain tyres & off-road suspension</li>
        <li>LED projector headlamps & DRLs</li>
        <li>Automatic climate control (higher variants)</li>
        <li>Rugged exterior design with iconic Jeep-style silhouette</li>
        <li>Roll cage for enhanced safety</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Dual front airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill hold & descent control</li>
        <li>Rear parking sensors and camera</li>
        <li>ISOFIX child seat mounts</li>
        <li>Tyre Pressure Monitoring System (TPMS)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹13.5 Lakh – ₹16.5 Lakh (approx.) <br>
        <strong>Second-Hand:</strong> Depends on year and condition
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