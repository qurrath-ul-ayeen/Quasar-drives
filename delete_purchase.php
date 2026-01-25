<?php
include 'db.php'; // Your database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the purchase
    $delete_query = "DELETE FROM purchases WHERE id='$id'";
    if (mysqli_query($conn, $delete_query)) {
        // Redirect back to purchase list after deletion
        header("Location: purchase_list.php");
        exit;
    } else {
        echo "Error deleting purchase: " . mysqli_error($conn);
    }
} else {
    echo "Invalid Purchase ID!";
}
?>