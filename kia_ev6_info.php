<?php
// kia_ev6_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kia EV6 - Car Information</title>

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

    <h1>Kia EV6</h1>

    <p>
        The <strong>Kia EV6</strong> is a fully electric crossover SUV that combines bold
        futuristic design with long-range performance, advanced technology, and quick charging capability.
        It’s one of Kia’s flagship electric vehicles, offering a premium EV experience.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Motor Type</td><td>Permanent Magnet Synchronous Motor</td></tr>
        <tr><td>Battery Capacity</td><td>58 kWh / 77.4 kWh</td></tr>
        <tr><td>Drive Type</td><td>RWD / AWD</td></tr>
        <tr><td>Range (WLTP)</td><td>Up to ~528 km</td></tr>
        <tr><td>0–100 km/h</td><td>~5.2 seconds (GT-Line / AWD)</td></tr>
        <tr><td>Charging</td><td>Ultra-fast DC fast charging (10-80% in ~18–20 min)</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Dual-motor AWD option for sportier performance</li>
        <li>Heat pump for efficient cabin heating</li>
        <li>Panoramic curved display (driver + infotainment)</li>
        <li>Remote Smart Parking Assist (select variants)</li>
        <li>Vehicle-to-Load (V2L) power delivery</li>
        <li>Advanced infotainment with navigation & wireless Android Auto / CarPlay</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Multiple airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Blind-Spot Collision Avoidance</li>
        <li>Lane Keep Assist & Lane Follow Assist</li>
        <li>Forward Collision-Avoidance Assist (FCA)</li>
        <li>Rear Cross-Traffic Collision-Avoidance Assist</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹60 lakh – ₹75 lakh*<br>
        <strong>Second-Hand:</strong> Based on release year and condition
    </p>

    <p>
        <em>
            This page is for informational purposes. Booking, loan, and purchase
            options are handled through <strong>Quasar Drives</strong>.
        </em>
    </p>

    <!-- 🔙 BACK BUTTON -->
    <a class="back-btn" href="javascript:window.close();">
        ← Back to Car Details
    </a>

</div>

</body>
</html>