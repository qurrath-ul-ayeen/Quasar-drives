<?php
include 'db.php';

$car = $conn->query("SELECT * FROM cars WHERE id = $car_id")->fetch_assoc();

if (!$car) { die("Car not found!"); }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $car['car_name'] ?> - Details</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #eef1f5; }
        .box {
            width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0,0,0,0.25);
        }
        img { width: 100%; height: 180px; object-fit: cover; border-radius: 10px; }
        h2 { text-align: center; }
        p { font-size: 18px; }
    </style>
</head>
<body>

<div class="box">
    <img src="default_car.jpg" alt="Car">
    <h2><?= $car['car_name'] ?></h2>

    <p><b>Price:</b> ₹<?= number_format($car['price']) ?></p>
    <p><b>Fuel Type:</b> <?= $car['fuel_type'] ?></p>
    <p><b>Rating:</b> <?= $car['rating'] ?>/5</p>
    <p><b>Sales_Per_Year:</b> <?= $car['sales_per_year'] ?></p>
    <p><b>Available Cities:</b> <?= $car['city_available'] ?></p>
    <p><b>Second Hand Available:</b> <?= $car['second_hand_available'] ?></p>

    <?php if (!empty($car['second_hand_price'])) { ?>
        <p><b>Second Hand Price:</b> ₹<?= number_format($car['second_hand_price']) ?></p>
    <?php } ?>

    
</button><?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <h3><?php echo $row['model_name']; ?></h3>

    <a href="purchase.php?car_id=<?php echo $row['id']; ?>"
       style="padding:8px 15px;background:green;color:white;text-decoration:none;">
        Purchase Car
    </a>

<?php } ?>
</div>

</body>
</html>