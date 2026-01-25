<?php
include 'db.php';

if (!isset($_GET['car_id'])) {
    die("Car not selected");
}

$car_id = (int)$_GET['car_id'];

// fetch car basic details (optional but professional)
$car_q = mysqli_query($conn, "SELECT car_name, price FROM cars WHERE id=$car_id");
$car = mysqli_fetch_assoc($car_q);
?>

<!DOCTYPE html>
<html>
<head>
<title>Apply Loan | Quasar Drives</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    padding:20px;
}
.loan-box{
    background:#fff;
    max-width:600px;
    margin:auto;
    padding:30px;
    border-radius:12px;
    box-shadow:0 12px 25px rgba(0,0,0,.12);
}
.loan-box h2{
    text-align:center;
    margin-bottom:10px;
}
.car-info{
    text-align:center;
    color:#555;
    margin-bottom:20px;
}
input, select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:6px;
    border:1px solid #ccc;
}
button{
    width:100%;
    padding:12px;
    background:#f39c12;
    color:#fff;
    border:none;
    font-size:16px;
    font-weight:bold;
    border-radius:6px;
    cursor:pointer;
}
button:hover{
    background:#e67e22;
}
.emi-box{
    background:#f1f1f1;
    padding:12px;
    margin-top:10px;
    border-radius:6px;
    font-weight:bold;
    text-align:center;
}
.back{
    text-align:center;
    margin-top:15px;
}
.back a{
    text-decoration:none;
    color:#3498db;
}
</style>
</head>

<body>

<div class="loan-box">

<h2>Car Loan Application</h2>

<div class="car-info">
    <strong><?php echo $car['car_name']; ?></strong><br>
    Price: ₹<?php echo number_format($car['price']); ?>
</div>

<form action="loan_submit.php" method="post">

    <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">

    <!-- CUSTOMER DETAILS -->
    <input type="text" name="customer_name" placeholder="Full Name" required>
    <input type="email" name="customer_email" placeholder="Email Address" required>
    <input type="number" name="customer_mobile" placeholder="Mobile Number" required>

    <!-- BANK DETAILS -->
    <select name="bank_name" required>
        <option value="">Select Bank</option>
        <option>HDFC Bank</option>
        <option>ICICI Bank</option>
        <option>SBI</option>
        <option>Axis Bank</option>
        <option>Kotak Mahindra</option>
    </select>

    <!-- LOAN DETAILS -->
    <input type="number" id="loan_amount" name="loan_amount"
           placeholder="Loan Amount (₹)" required>

    <input type="number" id="interest"
           name="interest_rate"
           placeholder="Interest Rate (%)"
           value="9"
           required>

    <select id="tenure" name="tenure" required>
        <option value="">Select Tenure</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="36">3 Years</option>
        <option value="48">4 Years</option>
        <option value="60">5 Years</option>
        <option value="72">6 Years</option>
    </select>

    <!-- EMI -->
    <input type="hidden" name="emi" id="emi_value">

    <div class="emi-box" id="emi_display">
        EMI: ₹0
    </div>

    <button type="submit">Submit Loan Application</button>

</form>

<div class="back">
    <a href="javascript:history.back()">← Back to Car</a>
</div>

</div>

<script>
function calculateEMI(){
    let P = document.getElementById("loan_amount").value;
    let R = document.getElementById("interest").value / 12 / 100;
    let N = document.getElementById("tenure").value;

    if(P && R && N){
        let emi = (P * R * Math.pow(1+R, N)) /
                  (Math.pow(1+R, N) - 1);

        emi = Math.round(emi);

        document.getElementById("emi_display").innerHTML =
            "EMI: ₹" + emi.toLocaleString();

        document.getElementById("emi_value").value = emi;
    }
}

document.getElementById("loan_amount").addEventListener("input", calculateEMI);
document.getElementById("interest").addEventListener("input", calculateEMI);
document.getElementById("tenure").addEventListener("change", calculateEMI);
</script>

</body>
</html>