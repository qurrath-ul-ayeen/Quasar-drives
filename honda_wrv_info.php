<?php
// honda_wrv_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Honda WR-V - Car Information</title>

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

    <h1>Honda WR-V</h1>

    <p>
        The <strong>Honda WR-V</strong> is a compact crossover SUV that combines the comfort
        of a hatchback with SUV-inspired styling and high ground clearance.
        It is ideal for city driving as well as light off-road conditions.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.2L i-VTEC Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol</td></tr>
        <tr><td>Transmission</td><td>5-Speed Manual</td></tr>
        <tr><td>Power</td><td>90 PS</td></tr>
        <tr><td>Torque</td><td>110 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>363 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>40 L</td></tr>
        <tr><td>Ground Clearance</td><td>188 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>7″ touchscreen infotainment system</li>
        <li>Android Auto & Apple CarPlay</li>
        <li>LED DRLs and projector headlamps</li>
        <li>Cruise control</li>
        <li>Steering-mounted controls</li>
        <li>Rear parking camera</li>
        <li>Roof rails with sporty design</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>Dual front airbags</li>
        <li>ABS with EBD</li>
        <li>Rear parking sensors</li>
        <li>ISOFIX child seat mounts</li>
        <li>High-speed alert system</li>
        <li>Seat belt reminder</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹9.1 Lakh – ₹12 Lakh (when available) <br>
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