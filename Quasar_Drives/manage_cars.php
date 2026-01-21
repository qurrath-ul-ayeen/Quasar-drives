<?php
include "db.php";
?>

<h2>Manage Cars</h2>

<a href="add_car.php">
    <button>Add New Car</button>
</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Car Name</th>
        <th>Fuel</th>
        <th>Price</th>
        <th>Rating</th>
        <th>Second Hand</th>
        <th>Actions</th>
    </tr>

<?php
$sql = "SELECT cars.*, companies.name AS company_name
        FROM cars
        JOIN companies ON cars.company_id = companies.id";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['company_name'] ?></td>
        <td><?= $row['car_name'] ?></td>
        <td><?= $row['fuel_type'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['rating'] ?></td>
        <td><?= $row['second_hand_available'] ?></td>
        <td>
            <a href="edit_car.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_car.php?id=<?= $row['id'] ?>"
               onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
<?php } ?>
</table>