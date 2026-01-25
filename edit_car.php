<?php
include "db.php";

$id = $_GET['id'];

// Fetch old data
$sql = "SELECT cars.*, companies.name AS company_name 
        FROM cars 
        LEFT JOIN companies ON cars.company_id = companies.id
        WHERE cars.id='$id'";

$car = mysqli_fetch_assoc(mysqli_query($conn, $sql));

// Fetch all companies for dropdown
$companies = mysqli_query($conn, "SELECT * FROM companies");

// Update
if(isset($_POST['update'])) {
    $company_id = $_POST['company_id'];
    $car_name = $_POST['car_name'];
    $fuel = $_POST['fuel_type'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $sales = $_POST['sales_per_year'];
    $second_hand_available = $_POST['second_hand_available'];
    $second_hand_price = $_POST['second_hand_price'];

    mysqli_query($conn,"
        UPDATE cars SET
        company_id='$company_id',
        car_name='$car_name',
        fuel_type='$fuel',
        price='$price',
        rating='$rating',
        sales_per_year='$sales',
        second_hand_available='$second_hand_available',
        second_hand_price='$second_hand_price'
        WHERE id='$id'
    ");

    header("Location: car_list.php");
    exit;
}
?>

<h2>Edit Car</h2>

<form method="post">
    <label>Company:</label>
    <select name="company_id" required>
        <?php while($c = mysqli_fetch_assoc($companies)) { ?>
            <option value="<?= $c['id'] ?>" <?= ($c['id'] == $car['company_id'])?"selected":"" ?>>
                <?= $c['name'] ?>
            </option>
        <?php } ?>
    </select><br><br>

    <label>Car Name:</label>
    <input type="text" name="car_name" value="<?= $car['car_name'] ?>" required><br><br>

    <label>Fuel Type:</label>
    <select name="fuel_type" required>
        <option value="Petrol" <?= ($car['fuel_type']=="Petrol")?"selected":"" ?>>Petrol</option>
        <option value="Diesel" <?= ($car['fuel_type']=="Diesel")?"selected":"" ?>>Diesel</option>
        <option value="Electric" <?= ($car['fuel_type']=="Electric")?"selected":"" ?>>Electric</option>
    </select><br><br>

    <label>Price:</label>
    <input type="number" name="price" value="<?= $car['price'] ?>" required><br><br>

    <label>Rating:</label>
    <input type="number" step="0.1" name="rating" value="<?= $car['rating'] ?>"><br><br>

    <label>Sales / Year:</label>
    <input type="number" name="sales_per_year" value="<?= $car['sales_per_year'] ?>"><br><br>

    <label>Second Hand Available:</label>
    <select name="second_hand_available">
        <option value="Yes" <?= ($car['second_hand_available']=="Yes")?"selected":"" ?>>Yes</option>
        <option value="No" <?= ($car['second_hand_available']=="No")?"selected":"" ?>>No</option>
    </select><br><br>

    <label>Second Hand Price:</label>
    <input type="number" name="second_hand_price" value="<?= $car['second_hand_price'] ?>"><br><br>

    <button name="update">Update</button>
</form>

<br>
<a href="car_list.php">← Back to Car List</a>