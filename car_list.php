<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
        a {
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>
<body>

<h2>All Cars</h2>

<a href="add_car.php">
    <button>Add New Car</button>
</a>

<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Car Name</th>
        <th>Fuel</th>
        <th>Price</th>
        <th>Rating</th>
        <th>Sales / Year</th>
        <th>Second Hand Availability</th>
        <th>Second Hand price</th>
        <th>Actions</th>
    </tr>

<?php
$sql = "SELECT cars.*, companies.name AS company_name
        FROM cars
        JOIN companies ON cars.company_id = companies.id
        ORDER BY cars.id DESC";

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
    <td><?= $row['sales_per_year'] ?></td>
    <td><?= $row['second_hand_available'] ?></td>
    <td><?= $row['second_hand_price'] ?></td>
    <td>
        <a href="edit_car.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete_car.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Are you sure you want to delete this car?')">
           Delete
        </a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="admin_dashboard.php">← Back to Admin Dashboard</a>

</body>
</html>