<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'] ?? '';

if ($id == '') die("Invalid Loan ID");

// Fetch existing loan data
$sql = "SELECT * FROM loans WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (!$data) die("Loan not found");

// Update loan
if (isset($_POST['update'])) {
    $customer_name  = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_phone = $_POST['customer_phone'];
    $address        = $_POST['address'];
    $down_payment   = $_POST['down_payment'];
    $loan_months    = $_POST['loan_months'];
    $interest_rate  = $_POST['interest_rate'];

    // Recalculate loan amount, EMI, total payable
    $loan_amount = $data['loan_amount'] ?? 0;
    $loan_amount = ($data['loan_amount'] > 0) ? $data['loan_amount'] : 0;
    $loan_amount = ($data['loan_amount'] ?? $loan_amount);

    $car_price = $loan_amount + $down_payment; // approximate original car price
    $loan_amount = $car_price - $down_payment;

    $monthly_rate = ($interest_rate / 12) / 100;
    $emi = ($loan_amount * $monthly_rate * pow(1 + $monthly_rate, $loan_months)) /
           (pow(1 + $monthly_rate, $loan_months) - 1);
    $emi = round($emi,2);
    $total_payable = round($emi * $loan_months,2);

    $loan_status = $_POST['loan_status'];

    $update = "
        UPDATE loans SET
        customer_name='$customer_name',
        customer_email='$customer_email',
        customer_phone='$customer_phone',
        address='$address',
        down_payment='$down_payment',
        loan_amount='$loan_amount',
        interest_rate='$interest_rate',
        loan_months='$loan_months',
        emi='$emi',
        total_payable='$total_payable',
        loan_status='$loan_status'
        WHERE id=$id
    ";

    if (mysqli_query($conn, $update)) {
        header("Location: admin_dashboard.php"); // redirect back to admin page
        exit;
    } else {
        echo "Update Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Loan</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        form {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border:1px solid #ccc;
            border-radius:8px;
        }
        input, select, textarea {
            width:100%;
            padding:8px;
            margin-bottom:10px;
            border:1px solid #ccc;
            border-radius:4px;
        }
        button {
            padding:10px;
            width:100%;
            background:#003366;
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
    <h2>Edit Loan</h2>

    <label>Customer Name</label>
    <input type="text" name="customer_name" value="<?= htmlspecialchars($data['customer_name']) ?>" required>

    <label>Email</label>
    <input type="email" name="customer_email" value="<?= htmlspecialchars($data['customer_email']) ?>" required>

    <label>Phone</label>
    <input type="text" name="customer_phone" value="<?= htmlspecialchars($data['customer_phone']) ?>" required>

    <label>Address</label>
    <textarea name="address" required><?= htmlspecialchars($data['address']) ?></textarea>

    <label>Down Payment</label>
    <input type="number" name="down_payment" value="<?= htmlspecialchars($data['down_payment']) ?>" required>

    <label>Loan Months</label>
    <select name="loan_months" required>
        <option value="12" <?= $data['loan_months']==12?"selected":"" ?>>12 Months</option>
        <option value="24" <?= $data['loan_months']==24?"selected":"" ?>>24 Months</option>
        <option value="36" <?= $data['loan_months']==36?"selected":"" ?>>36 Months</option>
        <option value="60" <?= $data['loan_months']==60?"selected":"" ?>>60 Months</option>
    </select>

    <label>Interest Rate (%)</label>
    <input type="number" step="0.01" name="interest_rate" value="<?= htmlspecialchars($data['interest_rate']) ?>" required>

    <label>Loan Status</label>
    <select name="loan_status" required>
        <option value="Pending" <?= $data['loan_status']=="Pending"?"selected":"" ?>>Pending</option>
        <option value="Approved" <?= $data['loan_status']=="Approved"?"selected":"" ?>>Approved</option>
        <option value="Rejected" <?= $data['loan_status']=="Rejected"?"selected":"" ?>>Rejected</option>
    </select>

    <button type="submit" name="update">Update Loan</button>
</form>

</body>
</html>