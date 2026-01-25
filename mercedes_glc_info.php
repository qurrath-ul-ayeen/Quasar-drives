<?php
// mercedes_glc_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercedes-Benz GLC - Car Information</title>

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

    <h1>Mercedes-Benz GLC</h1>

    <p>
        The <strong>Mercedes-Benz GLC</strong> is a luxury compact SUV offering premium comfort,
        advanced safety features, and powerful performance. It is designed for smooth driving,
        modern technology, and a refined luxury experience.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.0L Turbo Petrol / 2.2L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>9-Speed Automatic (9G-TRONIC)</td></tr>
        <tr><td>Power</td><td>258 PS (Petrol) / 194 PS (Diesel)</td></tr>
        <tr><td>Torque</td><td>370 Nm (Petrol) / 400 Nm (Diesel)</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>550 L</td></tr>
        <tr><td>Drive Type</td><td>All Wheel Drive (AWD)</td></tr>
        <tr><td>Ground Clearance</td><td>190 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>12.3″ touchscreen infotainment system with MBUX</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Digital cockpit with customizable display</li>
        <li>Panoramic sunroof</li>
        <li>Ambient interior lighting with 64 colors</li>
        <li>Power-adjustable front seats with memory function</li>
        <li>Premium Burmester surround sound system</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>9 airbags</li>
        <li>ABS with EBD & ESP</li>
        <li>Adaptive cruise control with stop & go</li>
        <li>Lane keeping assist</li>
        <li>Blind spot monitoring</li>
        <li>360-degree camera with parking sensors</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹65 Lakh – ₹75 Lakh (ex-showroom, India) <br>
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