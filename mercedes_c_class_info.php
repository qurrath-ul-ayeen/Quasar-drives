<?php
// mercedes_c_class_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercedes-Benz C-Class - Car Information</title>

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

    <h1>Mercedes-Benz C-Class</h1>

    <p>
        The <strong>Mercedes-Benz C-Class</strong> is a premium luxury sedan known for its
        elegant design, advanced technology, superior comfort, and refined performance.
        It delivers a true luxury driving experience with modern features and safety.
    </p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L Turbo Petrol / 2.0L Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>9-Speed Automatic (9G-TRONIC)</td></tr>
        <tr><td>Power</td><td>170 PS (Petrol) / 200 PS (Diesel)</td></tr>
        <tr><td>Torque</td><td>250 Nm (Petrol) / 440 Nm (Diesel)</td></tr>
        <tr><td>Seating Capacity</td><td>5 seats</td></tr>
        <tr><td>Boot Space</td><td>455 L</td></tr>
        <tr><td>Drive Type</td><td>Rear Wheel Drive (RWD)</td></tr>
        <tr><td>Ground Clearance</td><td>157 mm</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>11.9″ vertical touchscreen infotainment system</li>
        <li>Wireless Android Auto & Apple CarPlay</li>
        <li>Fully digital driver display</li>
        <li>Panoramic sunroof</li>
        <li>Ambient interior lighting</li>
        <li>Powered & memory front seats</li>
        <li>Premium Burmester sound system</li>
    </ul>

    <h2>Safety Features</h2>
    <ul>
        <li>7 airbags</li>
        <li>ABS with EBD & ESC</li>
        <li>Adaptive cruise control</li>
        <li>Lane keep assist</li>
        <li>Blind spot monitoring</li>
        <li>360-degree camera</li>
    </ul>

    <h2>Price Range (Approx.)</h2>
    <p>
        <strong>New:</strong> ₹59 Lakh – ₹66 Lakh (ex-showroom, India) <br>
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