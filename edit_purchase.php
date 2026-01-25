<?php
include 'db.php';

$id = $_GET['id'] ?? '';
if ($id == '') {
    die("Invalid Purchase ID");
}

/* Fetch purchase data */
$q = mysqli_query($conn, "SELECT * FROM purchases WHERE id='$id'");
$data = mysqli_fetch_assoc($q);
if (!$data) {
    die("Purchase record not found");
}

/* Update purchase */
if (isset($_POST['update'])) {

    $customer_name        = $_POST['customer_name'];
    $customer_email       = $_POST['customer_email'];
    $customer_phone       = $_POST['customer_phone'];
    $address              = $_POST['address'];
    $payment_method       = $_POST['payment_method'];
    $bank_name            = $_POST['bank_name'];
    $account_holder_name  = $_POST['account_holder_name'];
    $account_number       = $_POST['account_number'];
    $ifsc_code            = $_POST['ifsc_code'];
    $transaction_id       = $_POST['transaction_id'];
    $total_amount         = $_POST['total_amount'];
    $purchase_status      = $_POST['purchase_status'];
    $loan_status          = $_POST['loan_status'];

    mysqli_query($conn, "
        UPDATE purchases SET
            customer_name='$customer_name',
            customer_email='$customer_email',
            customer_phone='$customer_phone',
            address='$address',
            payment_method='$payment_method',
            bank_name='$bank_name',
            account_holder_name='$account_holder_name',
            account_number='$account_number',
            ifsc_code='$ifsc_code',
            transaction_id='$transaction_id',
            total_amount='$total_amount',
            purchase_status='$purchase_status',
            loan_status='$loan_status'
        WHERE id='$id'
    ");

    header("Location: admin_purchase.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Purchase</title>
<style>
body{font-family:Arial;background:#f4f4f4;padding:20px;}
.box{
    background:#fff;
    padding:20px;
    width:600px;
    margin:auto;
    border-radius:8px;
}
input, textarea, select{
    width:100%;
    padding:8px;
    margin:6px 0;
}
button{
    padding:10px;
    width:100%;
    background:#003366;
    color:white;
    border:none;
    font-size:16px;
    border-radius:5px;
}
</style>
</head>
<body>

<div class="box">
<h2>Edit Purchase Details</h2>

<form method="POST">

<label>Customer Name</label>
<input type="text" name="customer_name" value="<?= htmlspecialchars($data['customer_name']) ?>" required>

<label>Email</label>
<input type="email" name="customer_email" value="<?= htmlspecialchars($data['customer_email']) ?>" required>

<label>Phone</label>
<input type="text" name="customer_phone" value="<?= htmlspecialchars($data['customer_phone']) ?>" required>

<label>Address</label>
<textarea name="address" required><?= htmlspecialchars($data['address']) ?></textarea>

<label>Payment Method</label>
<select name="payment_method">
    <option value="Cash" <?=($data['payment_method']=='Cash')?'selected':''?>>Cash</option>
    <option value="UPI" <?=($data['payment_method']=='UPI')?'selected':''?>>UPI</option>
    <option value="Card" <?=($data['payment_method']=='Card')?'selected':''?>>Card</option>
    <option value="Bank Transfer" <?=($data['payment_method']=='Bank Transfer')?'selected':''?>>Bank Transfer</option>
</select>

<label>Bank Name</label>
<input type="text" name="bank_name" value="<?= htmlspecialchars($data['bank_name']) ?>">

<label>Account Holder Name</label>
<input type="text" name="account_holder_name" value="<?= htmlspecialchars($data['account_holder_name']) ?>">

<label>Account Number</label>
<input type="text" name="account_number" value="<?= htmlspecialchars($data['account_number']) ?>">

<label>IFSC Code</label>
<input type="text" name="ifsc_code" value="<?= htmlspecialchars($data['ifsc_code']) ?>">

<label>Transaction ID</label>
<input type="text" name="transaction_id" value="<?= htmlspecialchars($data['transaction_id']) ?>">

<label>Total Amount</label>
<input type="number" name="total_amount" value="<?= htmlspecialchars($data['total_amount']) ?>" required>

<label>Purchase Status</label>
<select name="purchase_status">
    <option value="Pending" <?=($data['purchase_status']=='Pending')?'selected':''?>>Pending</option>
    <option value="Completed" <?=($data['purchase_status']=='Completed')?'selected':''?>>Completed</option>
    <option value="Cancelled" <?=($data['purchase_status']=='Cancelled')?'selected':''?>>Cancelled</option>
</select>



<button name="update">Update Purchase</button>

</form>
</div>

</body>
</html>