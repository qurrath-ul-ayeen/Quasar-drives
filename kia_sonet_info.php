<?php
// kia_seltos_info.php

$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kia Seltos - Car Information</title>

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
        img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
            border-radius: 8px;
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

    <h1>Kia Seltos</h1>

    <p>
        The <strong>Kia Seltos</strong> is a premium compact SUV known for its bold design,
        advanced technology, powerful engine options, and excellent comfort. It is one of
        the most popular SUVs in India.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>1.5L Petrol / 1.5L Diesel / 1.5L Turbo Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>Manual / Automatic / DCT</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
        <tr><td>Mileage</td><td>16 – 21 km/l (variant dependent)</td></tr>
        <tr><td>Boot Space</td><td>433 liters</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>LED Headlamps & DRLs</li>
        <li>Large Touchscreen Infotainment System</li>
        <li>Ventilated Front Seats</li>
        <li>Digital Instrument Cluster</li>
        <li>Wireless Charging</li>
        <li>Bose Premium Sound System</li>
        <li>Panoramic Sunroof (select variants)</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6 Airbags (top variants)</li>
        <li>ABS with EBD</li>
        <li>Electronic Stability Control (ESC)</li>
        <li>Hill Assist Control</li>
        <li>Rear Parking Camera & Sensors</li>
        <li>ISOFIX Child Seat Mounts</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹10.9 Lakh – ₹20.3 Lakh <br>
        <strong>Second-Hand:</strong> Depends on condition & model year
    </p>

    <p>
        <em>
            Note: This page is for informational purposes only.
            Purchases and bookings are handled through <strong>Quasar Drives</strong>.
        </em>
    </p>

    <!-- 🔙 BACK BUTTON AT LAST -->
    <a class="back-btn" href="javascript:window.close();">← Back</a>

</div>

</body>
</html>