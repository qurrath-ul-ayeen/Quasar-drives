<?php
include 'db.php';

// Fetch purchases
$purchase_q = mysqli_query($conn, "SELECT * FROM purchases ORDER BY purchase_date DESC");

// Fetch loans
$loan_q = mysqli_query($conn, "SELECT * FROM loans ORDER BY id DESC"); // or apply_date if you have
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Transactions</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; padding:20px; }
        table { width: 100%; border-collapse: collapse; background:white; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        a { text-decoration: none; }
        .contact-btn { color:green; font-weight:bold; }
    </style>
</head>
<body>

<h2>All Transactions (Purchases + Loans)</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Car ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Payment / Loan Info</th>
            <th>Status</th>
            <th>Amount / EMI</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Purchases -->
        <?php
        if(mysqli_num_rows($purchase_q) > 0) {
            while($row = mysqli_fetch_assoc($purchase_q)){
                $phone = preg_replace('/\D/', '', $row['customer_phone']);
                $msg = urlencode("Hello {$row['customer_name']},\n\nThank you for purchasing from Quasar Drives.\n\nRegards,\n*Quasar Drives*");

                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>Purchase</td>";
                echo "<td>{$row['car_id']}</td>";
                echo "<td>{$row['customer_name']}</td>";
                echo "<td>{$row['customer_email']}</td>";
                echo "<td>{$row['customer_phone']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>
                        Method: ".($row['payment_method'] ?: '-')."<br>
                        Bank: ".($row['bank_name'] ?: '-')."<br>
                        Account: ".($row['account_holder_name'] ?: '-')."<br>
                        IFSC: ".($row['ifsc_code'] ?: '-')."<br>
                        Txn ID: ".($row['transaction_id'] ?: '-')."
                      </td>";
                echo "<td>{$row['purchase_status']}</td>";
                echo "<td>₹".number_format($row['total_amount'],2)."</td>";
                echo "<td>{$row['purchase_date']}</td>";
                echo "<td>
                        <a href='edit_purchase.php?id={$row['id']}'>Edit</a> |
                        <a href='delete_purchase.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a> |
                        <a href='https://wa.me/91{$phone}?text={$msg}' target='_blank' class='contact-btn'>Contact</a>
                      </td>";
                echo "</tr>";
            }
        }
        ?>

        <!-- Loans -->
        <?php
        if(mysqli_num_rows($loan_q) > 0) {
            while($row = mysqli_fetch_assoc($loan_q)){
                $phone = preg_replace('/\D/', '', $row['customer_phone']);
                $msg = urlencode("Hello {$row['customer_name']},\n\nYour loan application for Quasar Drives is received.\nRegards,\n*Quasar Drives*");

                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>Loan</td>";
                echo "<td>{$row['car_id']}</td>";
                echo "<td>{$row['customer_name']}</td>";
                echo "<td>{$row['customer_email']}</td>";
                echo "<td>{$row['customer_phone']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>
                        Down Payment: ₹".number_format($row['down_payment'],2)."<br>
                        Loan Amount: ₹".number_format($row['loan_amount'],2)."<br>
                        EMI: ₹".number_format($row['emi'],2)."<br>
                        Total Payable: ₹".number_format($row['total_payable'],2)."<br>
                        Interest Rate: {$row['interest_rate']}%<br>
                        Months: {$row['loan_months']}
                      </td>";
                echo "<td>{$row['loan_status']}</td>";
                echo "<td>₹".number_format($row['loan_amount'],2)."</td>";
                echo "<td>".($row['apply_date'] ?? 'N/A')."</td>"; // replace apply_date if your column name differs
                echo "<td>
                        <a href='edit_loan.php?id={$row['id']}'>Edit</a> |
                        <a href='delete_loan.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a> |
                        <a href='https://wa.me/91{$phone}?text={$msg}' target='_blank' class='contact-btn'>Contact</a>
                      </td>";
                echo "</tr>";
            }
        }
        ?>

    </tbody>
</table>

</body>
</html>