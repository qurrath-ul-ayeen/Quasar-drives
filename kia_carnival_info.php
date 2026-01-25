<?php
// kia_carnival_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kia Carnival - Car Information</title>

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

    <h1>Kia Carnival</h1>

    <p>
        The <strong>Kia Carnival</strong> is a premium multi-purpose vehicle (MPV) known for its
        spacious luxury interiors, powerful performance, and family-friendly comfort.
        It’s perfect for long trips, group travel, and premium family use.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.2L CRDi Turbo Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Diesel</td></tr>
        <tr><td>Transmission</td><td>8-Speed Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>7 / 8 / 9 depending on variant</td></tr>
        <tr><td>Mileage</td><td>10 – 14 km/l (estimated)</td></tr>
        <tr><td>Boot Space</td><td>Large cargo area, expandable</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Premium captain seats (higher variants)</li>
        <li>Large touchscreen infotainment system</li>
        <li>Rear entertainment screens</li>
        <li>Tri-zone automatic climate control</li>
        <li>Roof-mounted AC vents & rear vents</li>
        <li>Multiple USB charging ports</li>
        <li>Wireless phone charging</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6-Airbag system</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill-start assist</li>
        <li>Rear parking sensors and camera</li>
        <li>ISOFIX child seat mounts</li>
        <li>TPMS (Tire Pressure Monitoring System)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹24.9 Lakh – ₹34.9 Lakh (approx.) <br>
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