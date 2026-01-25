<?php
// hyundai_tucson_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hyundai Tucson - Car Information</title>

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

    <h1>Hyundai Tucson</h1>

    <p>
        The <strong>Hyundai Tucson</strong> is a premium mid-size SUV that offers a bold design,
        luxurious interiors, advanced technology, and strong performance.
        It is designed for customers who want comfort, safety, and a premium driving experience.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine Options</td><td>2.0L Petrol / 2.0L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol, Diesel</td></tr>
        <tr><td>Transmission</td><td>6-Speed Automatic (Petrol) / 8-Speed Automatic (Diesel)</td></tr>
        <tr><td>Power</td><td>156 PS (Petrol) / 186 PS (Diesel)</td></tr>
        <tr><td>Torque</td><td>192 Nm (Petrol) / 416 Nm (Diesel)</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>539 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>54 L</td></tr>
        <tr><td>Ground Clearance</td><td>192 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>10.25″ touchscreen infotainment system</li>
        <li>10.25″ digital instrument cluster</li>
        <li>Panoramic sunroof</li>
        <li>Ventilated and heated front seats</li>
        <li>Bose premium sound system</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Dual-zone automatic climate control</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>6 airbags (standard)</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill-start assist & downhill brake control</li>
        <li>360° camera</li>
        <li>Front & rear parking sensors</li>
        <li>Level-2 ADAS (AEB, blind-spot monitoring, lane keep assist, adaptive cruise control)</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹29.0 Lakh – ₹36.0 Lakh (ex-showroom, India) <br>
        <strong>Second-Hand:</strong> Depends on year, condition, and mileage
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