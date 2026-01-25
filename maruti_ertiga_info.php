<?php
// maruti_ertiga_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maruti Suzuki Ertiga - Car Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 20px auto;
            line-height: 1.6;
            background: #f7f7f7;
            padding: 20px;
        }
        h1, h2 { color: #2c3e50; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        ul { margin-left: 20px; }
        .images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        img {
            width: 100%;
            max-width: 280px;
            height: auto;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-btn:hover { background: #2980b9; }
    </style>
</head>
<body>

    <h1>Maruti Suzuki Ertiga</h1>

    <p>
        The <strong>Maruti Suzuki Ertiga</strong> is a popular MPV designed for families,
        offering spacious seating for seven passengers, comfortable ride quality,
        and excellent fuel efficiency. It is well-suited for both city use and long journeys.
    </p>

    <h2>Key Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L K-Series Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / CNG</td></tr>
        <tr><td>Transmission</td><td>Manual / Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>7</td></tr>
        <tr><td>Mileage</td><td>20 – 26 km/l (Petrol/CNG)</td></tr>
        <tr><td>Boot Space</td><td>209 liters (expandable)</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
        <tr><td>Safety</td><td>Dual Airbags, ABS with EBD, ESP (select variants)</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>7-seater family MPV</li>
        <li>SmartPlay infotainment system</li>
        <li>Automatic climate control</li>
        <li>Comfortable captain-style seating</li>
        <li>Excellent fuel efficiency</li>
    </ul>

    <h2>Images</h2>
    <div class="images">
        <img src="assets/images/cars/ertiga/front.jpg" alt="Maruti Ertiga Front View">
        <img src="assets/images/cars/ertiga/side.jpg" alt="Maruti Ertiga Side View">
        <img src="assets/images/cars/ertiga/interior.jpg" alt="Maruti Ertiga Interior">
    </div>

    <p>
        <strong>Note:</strong> This page is for informational purposes only.
        All bookings, loans, and purchases are handled through
        <strong>Quasar Drives</strong>.
    </p>

    <!-- 🔙 BACK BUTTON -->
    <div class="center">
    <a href="car_details.php?id=<?php echo $car_id; ?>" class="back-button">
        ← Back to Car Details
    </a>
</div>
    </a>

</body>
</html>