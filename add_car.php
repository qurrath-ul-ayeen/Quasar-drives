<?php
include "db.php";

if (isset($_POST['save'])) {

    $company_id = $_POST['company_id'];
    $car_name = $_POST['car_name'];
    $price = $_POST['price'];
    $fuel_type = $_POST['fuel_type'];
    $rating = $_POST['rating'];
    $sales = $_POST['sales_per_year'];
    $city = $_POST['city_available'];
    $second = $_POST['second_hand_available'];
    $second_price = $_POST['second_hand_price'];

    $sql = "INSERT INTO cars 
    (company_id, car_name, price, fuel_type, rating, sales_per_year, city_available, second_hand_available, second_hand_price)
    VALUES 
    ('$company_id','$car_name','$price','$fuel_type','$rating','$sales','$city','$second','$second_price')";

    mysqli_query($conn, $sql);

    header("Location: manage_cars.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
</head>
<body>

<h2>Add New Car</h2>

<form method="post">

    <label>Company</label><br>
    <select name="company_id" required>
        <option value="">Select Company</option>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM companies");
        while ($c = mysqli_fetch_assoc($res)) {
            echo "<option value='{$c['id']}'>{$c['name']}</option>";
        }
        ?>
    </select>
    <br><br>

    <input type="text" name="car_name" placeholder="Car Name" required><br><br>

    <input type="number" name="price" placeholder="Price" required><br><br>

    <label>Fuel Type</label><br>
    <select name="fuel_type">
        <option>Petrol</option>
        <option>Diesel</option>
        <option>Electric</option>
    </select>
    <br><br>

    <input type="number" step="0.1" name="rating" placeholder="Rating"><br><br>

    <input type="number" name="sales_per_year" placeholder="Sales Per Year"><br><br>

    <input type="text" name="city_available" placeholder="Cities (comma separated)"><br><br>

    <label>Second Hand Available</label><br>
    <select name="second_hand_available">
        <option>No</option>
        <option>Yes</option>
    </select>
    <br><br>

    <input type="number" name="second_hand_price" placeholder="Second Hand Price"><br><br>

    <button type="submit" name="save">Save Car</button>

</form>

<br>
<a href="manage_cars.php">← Back to Manage Cars</a>

</body>
</html>