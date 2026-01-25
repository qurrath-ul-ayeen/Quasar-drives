<?php
// toyota_innova_crysta_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toyota Innova Crysta - Car Information</title>

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

    <h1>Toyota Innova Crysta</h1>

    <p>
        The <strong>Toyota Innova Crysta</strong> is a premium MPV known for its excellent comfort,
        powerful diesel engine, spacious cabin, and unmatched reliability.
        It is a top choice for large families and long-distance travel.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.4L Turbo Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Diesel</td></tr>
        <tr><td>Transmission</td><td>5-Speed Manual</td></tr>
        <tr><td>Power</td><td>150 PS</td></tr>
        <tr><td>Torque</td><td>343 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>7 / 8 seats</td></tr>
        <tr><td>Drive Type</td><td>Rear Wheel Drive (RWD)</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>55 L</td></tr>
        <tr><td>Ground Clearance</td><td>178 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>8″ touchscreen infotainment system</li>
        <li>Android Auto & Apple CarPlay</li>
        <li>Premium leather seats</li>
        <li>Automatic climate control</li>
        <li>Powered driver seat</li>
        <li>Rear AC vents for all rows</li>
        <li>Excellent ride comfort</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>7 airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill-start assist</li>
        <li>Rear parking camera & sensors</li>
        <li>Vehicle stability control</li>
        <li>Traction control system</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹19.9 Lakh – ₹26.5 Lakh (ex-showroom, India) <br>
        <strong>Second-Hand:</strong> Depends on year, variant, and condition
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