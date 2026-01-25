<?php
// ford_ecosport_info.php
$car_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ford EcoSport - Car Information</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 20px auto; line-height: 1.6; }
        h1 { color: #2c3e50; }
        h2 { color: #34495e; margin-top: 25px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 8px; text-align: left; }
        img { max-width: 100%; height: auto; margin: 10px 0; border-radius: 6px; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .back-button {
            display: inline-block;
            margin: 25px 0;
            text-decoration: none;
            color: #fff;
            background: #e74c3c;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-button:hover { background: #c0392b; }
        .note { font-size: 14px; color: #555; margin-top: 25px; }
    </style>
</head>
<body>

    <h1>Ford EcoSport</h1>

    <p>The Ford EcoSport is a compact SUV offering a blend of style, performance, and practicality. It is designed for city driving as well as occasional long trips, featuring a high seating position, modern technology, and efficient fuel consumption.</p>

    <h2>Specifications</h2>
    <table>
        <tr><th>Feature</th><th>Details</th></tr>
        <tr><td>Engine</td><td>1.5L Petrol / Diesel</td></tr>
        <tr><td>Fuel Type</td><td>Petrol / Diesel</td></tr>
        <tr><td>Transmission</td><td>Manual / Automatic</td></tr>
        <tr><td>Seating Capacity</td><td>5</td></tr>
        <tr><td>Mileage</td><td>15 - 20 km/l (depending on variant)</td></tr>
        <tr><td>Boot Space</td><td>352 liters</td></tr>
        <tr><td>Top Speed</td><td>170 km/h</td></tr>
        <tr><td>Engine Power</td><td>123 hp (Petrol), 100 hp (Diesel)</td></tr>
        <tr><td>Dimensions (L×W×H)</td><td>3995 × 1765 × 1655 mm</td></tr>
        <tr><td>Ground Clearance</td><td>200 mm</td></tr>
        <tr><td>Safety Features</td><td>Dual Airbags, ABS with EBD, Hill Start Assist, Rear Parking Sensors</td></tr>
    </table>

    <h2>Images</h2>
    <img src="assets/images/cars/ecosport/front.jpg" alt="Ford EcoSport Front View">
    <img src="assets/images/cars/ecosport/side.jpg" alt="Ford EcoSport Side View">
    <img src="assets/images/cars/ecosport/interior.jpg" alt="Ford EcoSport Interior">

    <h2>Overview</h2>
    <p>
        The Ford EcoSport combines SUV practicality with compact dimensions for easy city driving.
        It offers a commanding driving position, comfortable cabin, and modern features including touchscreen infotainment,
        safety systems, and fuel-efficient engines. Its stylish design and versatility make it a popular choice among
        urban SUV buyers.
    </p>

    <p class="note">
        Note: This page is for informational purposes only. All purchases, loans, and contact
        are handled through <strong>Quasar Drives</strong>.
    </p>

    <!-- Back Button at the bottom -->
    <div class="center">
        <a href="car_details.php?id=<?php echo $car_id; ?>" class="back-button">
            ← Back to Car Details
        </a>
    </div>

</body>
</html>