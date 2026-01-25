<?php
include 'db.php'; // include your database connection

// Fetch all companies
$query = "SELECT * FROM companies";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Showroom</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; padding: 20px; }

        .company-card {
            display: inline-block;
            margin: 15px;
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 200px;
        }

        .company-card img {
            width: 150px;
            height: 100px;
            object-fit: contain;
        }

        .company-card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .company-card a:hover {
            color: #0056b3;
        }

        .back-btn {
            display: inline-block;
            margin-top: 40px;
            padding: 10px 25px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .back-btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<h1>Welcome to Our Car Showroom</h1>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="company-card">
        
        <a href="company.php?id=<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?>
        </a>
    </div>
<?php } ?>

<!-- ✅ ONE BUTTON ONLY (OUTSIDE LOOP) -->
<br><br>
<a href="index.php" class="back-btn">⬅ Back to Main Site</a>

</body>
</html>