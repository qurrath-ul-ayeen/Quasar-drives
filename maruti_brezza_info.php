<?php
// maruti_brezza_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maruti Suzuki Brezza - Car Information</title>
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

    <h1>Maruti Suzuki Brezza</h1>

    <p>
        The <strong>Maruti Suzuki Brezza</strong> is a compact SUV that combines bold styling,
        high ground clearance, strong safety features, and excellent fuel efficiency.
        It is well suited for Indian road conditions and daily family use.
    </p>

    <h2>Key Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L K-Series Petrol</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / CNG</td></tr>
        <tr><td>Transmission</td><td>Manual / Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
        <tr><td>Mileage</td><td>18 – 26 km/l (Petrol / CNG)</td></tr>
        <tr><td>Boot Space</td><td>328 liters</td></tr>
        <tr><td>Drive Type</td><td>Front Wheel Drive (FWD)</td></tr>
        <tr><td>Safety</td><td>6 Airbags, ABS with EBD, ESP</td></tr>
    </table>

    <h2>Key Features</h2>
    <ul>
        <li>Bold compact SUV design</li>
        <li>High ground clearance</li>
        <li>360-degree camera (select variants)</li>
        <li>Heads-Up Display (HUD)</li>
        <li>Strong safety package with 6 airbags</li>
    </ul>

    <h2>Images</h2>
    <div class="images">
        <img src="assets/images/cars/brezza/front.jpg" alt="Maruti Brezza Front View">
        <img src="assets/images/cars/brezza/side.jpg" alt="Maruti Brezza Side View">
        <img src="assets/images/cars/brezza/interior.jpg" alt="Maruti Brezza Interior">
    </div>

    <p>
        <strong>Note:</strong> This page is for informational purposes only.
        Booking, loan, and purchase options are managed through
        <strong>Quasar Drives</strong>.
    </p>

    <!-- 🔙 BACK BUTTON -->
    <div class="center">
    <a href="car_details.php?id=<?php echo $car_id; ?>" class="back-button">
        ← Back to Car Details
    </a>
</div>

</body>
</html>