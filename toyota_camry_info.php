<?php
// toyota_camry_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toyota Camry - Car Information</title>

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

    <h1>Toyota Camry</h1>

    <p>
        The <strong>Toyota Camry</strong> is a premium executive sedan known for its elegant design,
        hybrid technology, exceptional comfort, and smooth performance.
        It is ideal for luxury-oriented buyers who value refinement and reliability.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>2.5L Petrol Hybrid</td></tr>
        <tr><td>Fuel Type</td><td>Petrol + Electric (Hybrid)</td></tr>
        <tr><td>Transmission</td><td>e-CVT Automatic</td></tr>
        <tr><td>Power</td><td>218 PS (combined)</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>524 L</td></tr>
        <tr><td>Fuel Tank Capacity</td><td>50 L</td></tr>
        <tr><td>Ground Clearance</td><td>160 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>9″ touchscreen infotainment system</li>
        <li>Android Auto & Apple CarPlay</li>
        <li>Premium leather upholstery</li>
        <li>Electric sunroof</li>
        <li>Dual-zone automatic climate control</li>
        <li>Powered front seats</li>
        <li>JBL premium sound system</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>9 airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Toyota Safety Sense</li>
        <li>Lane departure warning</li>
        <li>Adaptive cruise control</li>
        <li>Rear parking camera & sensors</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹46 Lakh – ₹48 Lakh (ex-showroom, India) <br>
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