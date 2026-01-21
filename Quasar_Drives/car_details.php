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
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $car['car_name']; ?> Details</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; padding: 20px; }
        .car-details {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="car-details">

    <p><strong>Company:</strong> <?php echo $car['company_name']; ?></p>
    <p><strong>Car Name:</strong> <?php echo $car['car_name']; ?></p>
    <p><strong>Price:</strong> <?php echo $car['price']; ?></p>
    <p><strong>Fuel:</strong> <?php echo $car['fuel_type']; ?></p>
    <p><strong>Rating:</strong> <?php echo $car['rating']; ?></p>
    <p><strong>City Available:</strong> <?php echo $car['city_available']; ?></p>
    <p><strong>Second Hand:</strong> <?php echo $car['second_hand_available']; ?></p>
    <p><strong>Second Hand Price:</strong> <?php echo $car['second_hand_price']; ?></p>

    <br>

    <!-- ✅ PURCHASE FORM -->
    <form action="purchase.php" method="get">
        <input type="hidden" name="car_id" value="<?php echo $car['id']; ?>">
        <button type="submit">Purchase Car</button>
    </form>

    <br>


    <a href="company.php?id=<?php echo $car['company_id']; ?>">
        ← Back to Cars
    </a>

</div>

</body>
</html>