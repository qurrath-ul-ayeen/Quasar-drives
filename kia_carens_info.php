<?php
// kia_carens_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kia Carens - Car Information</title>

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
        .back-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="box">

    <h1>Kia Carens</h1>

    <p>
        The <strong>Kia Carens</strong> is a premium family-oriented MPV that blends
        SUV-inspired design with comfort, safety, and practicality. It is ideal
        for long trips and city driving with large families.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.5L Petrol / 1.4L Turbo Petrol / 1.5L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>Manual / Automatic / iMT / DCT</td></tr>
        <tr><td>Seating Capacity</td><td>6 / 7 Seater</td></tr>
        <tr><td>Mileage</td><td>16 – 21 km/l (variant dependent)</td></tr>
        <tr><td>Boot Space</td><td>216 liters (expandable)</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Large Touchscreen Infotainment System</li>
        <li>Connected Car Technology</li>
        <li>Ventilated Front Seats</li>
        <li>Digital Instrument Cluster</li>
        <li>Wireless Phone Charging</li>
        <li>Ambient Interior Lighting</li>
        <li>Multiple USB Charging Ports</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6 Airbags (Standard)</li>
        <li>ABS with EBD</li>
        <li>Electronic Stability Control (ESC)</li>
        <li>Hill Assist Control</li>
        <li>Rear Parking Sensors & Camera</li>
        <li>ISOFIX Child Seat Mounts</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹10.5 Lakh – ₹19.7 Lakh <br>
        <strong>Second-Hand:</strong> Depends on condition & year
    </p>

    <p>
        <em>
            This information page is part of <strong>Quasar Drives</strong>.
            Final booking and purchase are handled through the main website.
        </em>
    </p>

    <!-- 🔙 BACK BUTTON -->
    <a class="back-btn" href="javascript:window.close();">← Back</a>

</div>

</body>
</html>