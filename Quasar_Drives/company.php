<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("Company not selected");
}

$company_id = intval($_GET['id']);

/* Get company */
$company = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM companies WHERE id = $company_id")
);

/* Get models of this company */
$cars = mysqli_query(
    $conn,
    "SELECT id, car_name FROM cars WHERE company_id = $company_id"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $company['name']; ?> Models</title>
    <style>
        body { font-family: Arial; background:#f0f2f5; padding:20px; }
        ul { list-style:none; padding:0; }
        li {
            background:#fff;
            margin:10px 0;
            padding:15px;
            border-radius:8px;
            box-shadow:0 3px 6px rgba(0,0,0,.1);
        }
        a {
            text-decoration:none;
            color:#007bff;
            font-size:18px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<h1><?php echo $company['name']; ?> Models</h1>
<a href="showroom.php">← Back to Showroom</a>
<br><br>

<ul>
<?php while ($car = mysqli_fetch_assoc($cars)) { ?>
    <li>
        <a href="car_details.php?id=<?php echo $car['id']; ?>">
            <?php echo $car['car_name']; ?>
        </a>
    </li>
<?php } ?>
</ul>

</body>
</html>