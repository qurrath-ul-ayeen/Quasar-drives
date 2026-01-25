<?php
include 'db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Car Details");
}

$car_id = (int)$_GET['id'];

$sql = "SELECT cars.*, companies.name AS company_name
        FROM cars
        JOIN companies ON cars.company_id = companies.id
        WHERE cars.id = $car_id";

$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Car not found");
}

$car = mysqli_fetch_assoc($result);

// Parts list
$parts = [
    'engine' => 'Engine',
    'steering' => 'Steering / Dashboard',
    'tires' => 'Tires / Wheels',
    'seats' => 'Seats / Cabin',
    'exterior' => 'Exterior',
    'interior' => 'Interior'
];

// ✅ Map car models to separate info PHP files

$model_files = [
    'figo' => 'ford_figo_info.php',
    'ecosport' => 'ford_ecosport_info.php',
    'endeavour' => 'ford_endeavour_info.php',
    'porsche 911 gt3' => 'porsche_911_gt3_info.php',
    'swift' => 'maruti_swift_info.php',
    'baleno' => 'maruti_baleno_info.php',
    'brezza' => 'maruti_brezza_info.php',
    'ertiga' => 'maruti_ertiga_info.php',
    'dzire' => 'maruti_dzire_info.php',
    'kia seltos' => 'kia_seltos_info.php',
    'kia carens' => 'kia_carens_info.php',
    'kia ev6' => 'kia_ev6_info.php',
    'kia carnival' => 'kia_carnival_info.php',
    'kia sonet' => 'kia_sonet_info.php',
    'mahindra xuv700' => 'mahindra_xuv700_info.php',
    'mahindra thar' => 'mahindra_thar_info.php',
    'mahindra bolero' => 'mahindra_bolero_info.php',
    'mahindra scorpio-n' => 'mahindra_scorpio_n_info.php',
    'mahindra xuv300' => 'mahindra_xuv300_info.php',
    'tata nexon' => 'tata_nexon_info.php',
    'tata harrier' => 'tata_harrier_info.php',
    'tata safari' => 'tata_safari_info.php',
    'tata punch' => 'tata_punch_info.php',
    'tata altroz' => 'tata_altroz_info.php',
    'hyundai verna' => 'hyundai_verna_info.php',
    'hyundai creta' => 'hyundai_creta_info.php',
    'hyundai i20' => 'hyundai_i20_info.php',
    'hyundai venue' => 'hyundai_venue_info.php',
    'hyundai tucson' => 'hyundai_tucson_info.php',
    'honda city' => 'honda_city_info.php',
    'honda amaze' => 'honda_amaze_info.php',
    'honda wr-v' => 'honda_wrv_info.php',
    'honda jazz' => 'honda_jazz_info.php',
    'honda civic' => 'honda_civic_info.php',
    'toyota innova crysta' => 'toyota_innova_crysta_info.php',
    'toyota fortuner' => 'toyota_fortuner_info.php',
    'toyota glanza' => 'toyota_glanza_info.php',
    'toyota hilux' => 'toyota_hilux_info.php',
    'toyota camry' => 'toyota_camry_info.php',
    'mercedes c-class' => 'mercedes_c_class_info.php',
    'mercedes e-class' => 'mercedes_e_class_info.php',
    'mercedes glc' => 'mercedes_glc_info.php',
    'mercedes gle' => 'mercedes_gle_info.php',
    'audi a4' => 'audi_a4_info.php',
    'audi q3' => 'audi_q3_info.php',
    'audi a6' => 'audi_a6_info.php',
    'audi q7' => 'audi_q7_info.php',
    'bmw 3 series' => 'bmw_3_series_info.php',
    'bmw x1' => 'bmw_x1_info.php',
    'bmw 3 series' => 'bmw_3_series_info.php',
    'bmw x5' => 'bmw_x5_info.php',
    'bmw x3' => 'bmw_x3_info.php',
    'bmw 7 series' => 'bmw_7_series_info.php',
    'bmw x2' => 'bmw_x2_info.php',
    'bmw x4' => 'bmw_x4_info.php',
    'bmw 2 series' => 'bmw_2_series_info.php',
    'bmw m4' => 'bmw_m4_info.php',
    'bmw m5' => 'bmw_m5_info.php'

    ];

// Use car_name instead of model
$car_name_lower = strtolower(trim($car['car_name']));

// Check if info file exists
$info_file = $model_files[$car_name_lower] ?? null;

// Normalize model name for lookup
/* ---------- NORMALIZE CAR NAME ---------- */
$car_name_lower = strtolower(trim($car['car_name']));
$info_file = $model_files[$car_name_lower] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $car['car_name']; ?> Details</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; padding: 20px; }
        .car-details { background: #fff; padding: 30px; border-radius: 10px; max-width: 900px; margin: auto; }
        .car-details p { margin: 6px 0; }
        .section { margin-top: 30px; }
        .images img { width: 220px; height: 150px; object-fit: cover; margin: 6px; border-radius: 6px; border: 1px solid #ccc; }
        button { padding: 10px 20px; background: green; color: white; border: none; cursor: pointer; border-radius: 5px; }
        .center { text-align: center; }
        .info-btn { text-decoration:none; color:#fff; background:#3498db; padding:10px 20px; border-radius:5px; display:inline-block; margin: 20px 0; }
        .info-btn:hover { background:#2980b9; }
    </style>
</head>
<body>

<div class="car-details">

    <h2 class="center"><?php echo $car['car_name']; ?></h2>

    <p><strong>Company:</strong> <?php echo $car['company_name']; ?></p>
    <p><strong>Price:</strong> ₹<?php echo number_format($car['price']); ?></p>
    <p><strong>Fuel:</strong> <?php echo $car['fuel_type']; ?></p>
    <p><strong>Rating:</strong> ⭐ <?php echo $car['rating']; ?></p>
    <p><strong>City Available:</strong> <?php echo $car['city_available']; ?></p>
    <p><strong>Second Hand:</strong> <?php echo $car['second_hand_available']; ?></p>

    <?php if ($car['second_hand_available'] == 'Yes') { ?>
        <p><strong>Second Hand Price:</strong> ₹<?php echo number_format($car['second_hand_price']); ?></p>
    <?php } ?>

    <hr>

    <!-- 🔹 CAR IMAGES SECTION -->
    <?php
    foreach ($parts as $key => $label) {
        $img_q = mysqli_query($conn, "
            SELECT * FROM car_images 
            WHERE car_id = '$car_id' AND part_name = '$key'
        ");

        if (mysqli_num_rows($img_q) > 0) {
            echo "<div class='section'>";
            echo "<h3>$label</h3>";
            echo "<div class='images'>";

            while ($img = mysqli_fetch_assoc($img_q)) {
                echo "<img src='uploads/{$img['photo']}' alt='$label'>";
            }

            echo "</div>";
            echo "</div>";
        }
    }
    ?>

    <br><br>

    <!-- ✅ PURCHASE FORM -->
    <div class="center">
        <form action="purchase.php" method="get">
            <input type="hidden" name="car_id" value="<?php echo $car['id']; ?>">
            <button type="submit">Purchase Car</button>
        </form>
    </div>

    <!-- ✅ INFORMATION BUTTON -->
    <?php if ($info_file): ?>
    <div class="center" style="margin:20px 0;">
        <a href="<?php echo $info_file; ?>?id=<?php echo $car['id']; ?>"
           target="_blank"
           style="text-decoration:none; color:#fff; background:#3498db; padding:10px 20px; border-radius:5px;">
           More Info About <?php echo $car['car_name']; ?>
        </a>
    </div>
<?php else: ?>
    <div class="center" style="margin:20px 0; color:red;">
        Information page not available for this model.
    </div>
<?php endif; ?>

    <a href="company.php?id=<?php echo $car['company_id']; ?>">
        ← Back to Cars
    </a>

</div>

</body>
</html>