<?php


session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include "db.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }
        .sidebar{
            width:220px;
            height:100vh;
            background:#111;
            color:#fff;
            position:fixed;
        }
        .sidebar h2{
            text-align:center;
            padding:15px;
            border-bottom:1px solid #333;
        }
        .sidebar a{
            display:block;
            padding:12px 20px;
            color:#fff;
            text-decoration:none;
        }
        .sidebar a:hover{
            background:#ff4d4d;
        }
        .main{
            margin-left:220px;
            padding:30px;
        }
        .card{
            background:#fff;
            padding:20px;
            border-radius:6px;
            box-shadow:0 4px 8px rgba(0,0,0,0.1);
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        }
        th, td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }
        th{
            background:#f1f1f1;
        }
        .btn{
            padding:6px 12px;
            background:#ff4d4d;
            color:#fff;
            text-decoration:none;
            border-radius:4px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="add_company.php">Add Company</a>
    <a href="car_list.php">Manage Cars</a>
    <a href="admin_purchase_list.php">Purchase Data</a>
    <a href="index.php">Back to Site</a>
</div>

<div class="main">
    <h1>Dashboard</h1>

    <div class="card">
        <h3>Company List</h3>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>

            <?php
            $sql = "SELECT * FROM companies";
            $result = mysqli_query($conn, $sql);

            if($result && mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                    </tr>
                    ";
                }
            } else {
                echo "<tr><td colspan='2'>No companies added yet</td></tr>";
            }
         
            ?>
        </table>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>