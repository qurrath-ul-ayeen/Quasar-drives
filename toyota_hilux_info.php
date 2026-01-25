<?php
// toyota_hilux_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toyota Hilux - Car Information</title>

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

    <h1>Toyota Hilux</h1>

    <p>
        The <strong>Toyota Hilux</strong> is a rugged lifestyle pickup truck known for its
        extreme durability, off-road capability, and powerful diesel engine.
        It is built for adventure, heavy-duty use, and tough terrains.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.8L Turbo Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Diesel</td></tr>
        <tr><td>Transmission</td><td>6-Speed Manual / 6-Speed Automatic</td></tr>
        <tr><td>Power</td><td>204 PS</td></tr>
        <tr><td>Torque</td><td>500 Nm</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Drive Type</td><td>4x4</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>80 L</td></tr>
        <tr><td>Ground Clearance</td><td>216 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>8″ touchscreen infotainment system</li>
        <li>Android Auto & Apple CarPlay</li>
        <li>Off-road driving modes</li>
        <li>Automatic climate control</li>
        <li>Leather upholstery</li>
        <li>Power-adjustable driver seat</li>
        <li>All-terrain tyres</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>7 airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Hill descent & hill-start assist</li>
        <li>Rear parking camera & sensors</li>
        <li>Traction control system</li>
        <li>Vehicle stability control</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹30.4 Lakh – ₹37.9 Lakh (ex-showroom, India) <br>
        <strong>Second-Hand:</strong> Depends on year, condition, and usage
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