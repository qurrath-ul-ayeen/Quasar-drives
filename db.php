<?php
/* Auto-detect environment and connect DB */

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // 🔹 LOCALHOST (XAMPP / Workbench)
    $servername = "localhost";
    $username   = "root";
    $password   = "qurrath@123";
    $dbname     = "car_showroom";   // your local DB name
} else {
    // 🔹 INFINITYFREE (ONLINE)
    $servername = "sql303.infinityfree.com";
    $username   = "if0_40887513";
    $password   = "zHYAGhkzGmcBeVY";
    $dbname     = "if0_40887513_car_showroom";
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>