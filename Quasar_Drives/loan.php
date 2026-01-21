<?php
include 'db.php';

if (!isset($_GET['car_id'])) {
    die("Car ID missing");
}

$car_id = $_GET['car_id'];

/* Fetch car details */
$car_q = mysqli_query($conn, "SELECT car_name, price FROM cars WHERE id='$car_id'");
if (mysqli_num_rows($car_q) == 0) {
    die("Car not found");
}
$car = mysqli_fetch_assoc($car_q);
$car_price = $car['price'];

$emi = $total_payable = "";

if (isset($_POST['apply_loan'])) {

    $customer_name  = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_phone = $_POST['customer_phone'];
    $address        = $_POST['address'];

    $down_payment = $_POST['down_payment'];
    $loan_months  = $_POST['loan_months'];

    /* Loan calculation */
    $interest_rate = 10; // 10% annual

    $loan_amount = $car_price - $down_payment;
    $monthly_rate = ($interest_rate / 12) / 100;

    $emi = ($loan_amount * $monthly_rate * pow(1 + $monthly_rate, $loan_months)) /
           (pow(1 + $monthly_rate, $loan_months) - 1);

    $emi = round($emi, 2);
    $total_payable = round($emi * $loan_months, 2);

    /* Insert into loans table */
    $sql = "INSERT INTO loans
    (car_id, customer_name, customer_email, customer_phone, address,
     down_payment, loan_amount, interest_rate, loan_months, emi, total_payable, loan_status)
    VALUES
    ('$car_id','$customer_name','$customer_email','$customer_phone','$address',
     '$down_payment','$loan_amount','$interest_rate','$loan_months','$emi','$total_payable','Pending')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Loan Application Submitted Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Apply for Car Loan</title>
<style>
body {
    font-family: Arial;
    background: #f4f4f4;
}
.box {
    width: 460px;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 12px rgba(0,0,0,0.2);
}
input, textarea, select {
    width: 100%;
    padding: 9px;
    margin: 7px 0;
}
button {
    background: #003366;
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
}
.result {
    background: #eef6ff;
    padding: 10px;
    margin-top: 10px;
    border-radius: 6px;
}
</style>
</head>

<body>

<div class="box">
<h2>Apply for Car Loan</h2>

<p><b>Car:</b> <?= htmlspecialchars($car['car_name']) ?></p>
<p><b>Price:</b> ₹<?= number_format($car_price) ?></p>

<form method="POST">

<input type="text" name="customer_name" placeholder="Full Name" required>
<input type="email" name="customer_email" placeholder="Email" required>
<input type="text" name="customer_phone" placeholder="Phone Number" required>
<textarea name="address" placeholder="Address" required></textarea>

<input type="number" name="down_payment" placeholder="Down Payment" required>

<select name="loan_months" required>
    <option value="">Select Loan Duration</option>
    <option value="12">12 Months</option>
    <option value="24">24 Months</option>
    <option value="36">36 Months</option>
    <option value="60">60 Months</option>
</select>

<p><b>Interest Rate:</b> 10% per annum</p>

<button type="submit" name="apply_loan">Apply for Loan</button>

</form>

<?php if ($emi != "") { ?>
<div class="result">
    <p><b>Loan Amount:</b> ₹<?= number_format($loan_amount) ?></p>
    <p><b>Monthly EMI:</b> ₹<?= number_format($emi,2) ?></p>
    <p><b>Total Payable:</b> ₹<?= number_format($total_payable,2) ?></p>
    <p><i>* Subject to admin approval</i></p>
</div>
<?php } ?>

</div>

</body>
</html>