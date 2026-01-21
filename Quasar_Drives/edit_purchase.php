<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'] ?? '';

if ($id == '') die("Invalid Purchase ID");

// Fetch existing data
$sql = "SELECT * FROM purchases WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (!$data) die("Purchase not found");

// Update data
if (isset($_POST['update'])) {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_phone = $_POST['customer_phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];
    $bank_name = $_POST['bank_name'];
    $account_holder_name = $_POST['account_holder_name'];
    $ifsc_code = $_POST['ifsc_code'];
    $transaction_id = $_POST['transaction_id'];
    $total_amount = $_POST['total_amount'];
    $purchase_status = $_POST['purchase_status'];

    $update = "
        UPDATE purchases SET
        customer_name='$customer_name',
        customer_email='$customer_email',
        customer_phone='$customer_phone',
        address='$address',
        payment_method='$payment_method',
        bank_name='$bank_name',
        account_holder_name='$account_holder_name',
        ifsc_code='$ifsc_code',
        transaction_id='$transaction_id',
        total_amount='$total_amount',
        purchase_status='$purchase_status'
        WHERE id=$id
    ";

    if (mysqli_query($conn, $update)) {
        header("Location: admin_purchase_list.php");
        exit;
    } else {
        echo "Update Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Purchase</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        form {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border:1px solid #ccc;
            border-radius: 8px;
        }
        input, select, textarea {
            width:100%;
            padding:8px;
            margin-bottom:10px;
            border:1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding:10px;
            width:100%;
            background:#28a745;
            color:white;
            border:none;
            font-size:16px;
            cursor:pointer;
            border-radius:5px;
        }
        h2 { text-align:center; }
    </style>
</head>
<body>

<form method="post">
    <h2>Edit Purchase</h2>

    <label>Customer Name</label>
    <input type="text" name="customer_name" value="<?= htmlspecialchars($data['customer_name']) ?>" required>

    <label>Email</label>
    <input type="email" name="customer_email" value="<?= htmlspecialchars($data['customer_email']) ?>" required>

    <label>Phone</label>
    <input type="text" name="customer_phone" value="<?= htmlspecialchars($data['customer_phone']) ?>" required>

    <label>Address</label>
    <textarea name="address" required><?= htmlspecialchars($data['address']) ?></textarea>

    <label>Payment Method</label>
    <select name="payment_method" required>
        <option value="Cash" <?= $data['payment_method']=="Cash"?"selected":"" ?>>Cash</option>
        <option value="UPI" <?= $data['payment_method']=="UPI"?"selected":"" ?>>UPI</option>
        <option value="Card" <?= $data['payment_method']=="Card"?"selected":"" ?>>Card</option>
        <option value="Bank Transfer" <?= $data['payment_method']=="Bank Transfer"?"selected":"" ?>>Bank Transfer</option>
    </select>

    <label>Bank Name</label>
    <input type="text" name="bank_name" value="<?= htmlspecialchars($data['bank_name']) ?>">

    <label>Account Holder Name</label>
    <input type="text" name="account_holder_name" value="<?= htmlspecialchars($data['account_holder_name']) ?>">

    <label>IFSC Code</label>
    <input type="text" name="ifsc_code" value="<?= htmlspecialchars($data['ifsc_code']) ?>">

    <label>Transaction ID</label>
    <input type="text" name="transaction_id" value="<?= htmlspecialchars($data['transaction_id']) ?>">

    <label>Total Amount</label>
    <input type="number" name="total_amount" value="<?= htmlspecialchars($data['total_amount']) ?>" required>

    <label>Purchase Status</label>
    <select name="purchase_status" required>
        <option value="Pending" <?= $data['purchase_status']=="Pending"?"selected":"" ?>>Pending</option>
        <option value="Completed" <?= $data['purchase_status']=="Completed"?"selected":"" ?>>Completed</option>
        <option value="Cancelled" <?= $data['purchase_status']=="Cancelled"?"selected":"" ?>>Cancelled</option>
    </select>

    <button type="submit" name="update">Update Purchase</button>
</form>

</body>
</html>