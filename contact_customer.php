<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM purchases WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if(!$data){
    die("Invalid purchase record");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Customer</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
        }
        .btn {
            display: block;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
        }
        .whatsapp { background:#25D366; }
        .email { background:#0072c6; }
    </style>
</head>
<body>

<div class="box">
    <h3>Customer Contact Details</h3>

    <p><b>Name:</b> <?= $data['customer_name']; ?></p>
    <p><b>Phone:</b> <?= $data['customer_phone']; ?></p>
    <p><b>Email:</b> <?= $data['customer_email']; ?></p>
    <p><b>Address:</b> <?= $data['address']; ?></p>
    <p><b>Payment:</b> <?= $data['payment_method']; ?></p>

    <!-- CONTACT OPTIONS -->
    <a class="btn whatsapp"
       href="https://wa.me/91<?= $data['customer_phone']; ?>"
       target="_blank">
       Contact via WhatsApp
    </a>

    <a class="btn email"
       href="mailto:<?= $data['customer_email']; ?>">
       Contact via Email
    </a>
</div>

</body>
</html>