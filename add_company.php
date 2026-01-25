<?php
include "db.php";
error_reporting(0);

if(isset($_POST['save'])){
    $name  = $_POST['name'];
    $image = $_POST['image'];

    if($name != ""){
        mysqli_query($conn, "INSERT INTO companies (name, image) VALUES ('$name', '$image')");
        header("Location: admin_dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
    <style>
        body{margin:0;font-family:Arial;background:#f4f6f9;}
        .sidebar{width:220px;height:100vh;background:#111;color:#fff;position:fixed;}
        .sidebar h2{text-align:center;padding:15px;}
        .sidebar a{display:block;padding:12px 20px;color:#fff;text-decoration:none;}
        .sidebar a:hover{background:#ff4d4d;}
        .main{margin-left:220px;padding:30px;}
        .card{background:#fff;padding:20px;width:400px;border-radius:6px;
              box-shadow:0 4px 8px rgba(0,0,0,0.1);}
        input{width:100%;padding:10px;margin-top:10px;}
        button{margin-top:15px;padding:10px;background:#ff4d4d;color:#fff;border:none;}
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="add_company.php">Add Company</a>
    <a href="index.php">Back to Site</a>
</div>

<div class="main">
    <div class="card">
        <h2>Add Company</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Company Name" required>
            <input type="text" name="image" placeholder="Image path (e.g. images/bmw.png)">
            <button name="save">Save Company</button>
        </form>
    </div>
</div>

</body>
</html>