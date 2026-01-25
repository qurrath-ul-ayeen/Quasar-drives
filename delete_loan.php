<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'] ?? '';

if ($id == '') {
    die("Invalid Loan ID");
}

// Optional: check if loan exists first
$check = mysqli_query($conn, "SELECT * FROM loans WHERE id = $id");
if (mysqli_num_rows($check) == 0) {
    die("Loan not found");
}

// Delete loan
$delete = mysqli_query($conn, "DELETE FROM loans WHERE id = $id");

if ($delete) {
    // Redirect back to admin page
    header("Location: admin_dashboard.php");
    exit;
} else {
    echo "Failed to delete loan: " . mysqli_error($conn);
}
?>