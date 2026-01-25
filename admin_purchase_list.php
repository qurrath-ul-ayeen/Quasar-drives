<?php
include 'db.php';

/* Fetch Purchases */
$purchase_q = mysqli_query($conn, "
    SELECT * FROM purchases 
    ORDER BY purchase_date DESC
");

/* Fetch Loans */
$loan_q = mysqli_query($conn, "
    SELECT * FROM loans 
    ORDER BY applied_date DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin – Purchases & Loans</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f6f8;
            padding:20px;
        }
        h2{
            margin-top:40px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            margin-top:15px;
        }
        th, td{
            border:1px solid #ccc;
            padding:8px;
            text-align:left;
            font-size:14px;
        }
        th{
            background:#eee;
        }
        a{
            text-decoration:none;
            font-weight:bold;
        }
        .contact-btn{
            color:green;
        }
        .edit{
            color:blue;
        }
        .delete{
            color:red;
        }
    </style>
</head>
<body>

<!-- ================= PURCHASES ================= -->
<h2>🛒 Purchases</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Car ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Payment</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

<?php if(mysqli_num_rows($purchase_q) > 0): ?>
<?php while($p = mysqli_fetch_assoc($purchase_q)):
    $phone = preg_replace('/\D/','',$p['customer_phone']);

    $msg = urlencode(
        "Hello {$p['customer_name']},\n\n".
        "Thank you for purchasing from *Quasar Drives* \n\n".
        "Purchase Amount: ₹{$p['total_amount']}\n\n".
        "Regards,\n*Quasar Drives*"
    );
?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['car_id'] ?></td>
    <td><?= $p['customer_name'] ?></td>
    <td><?= $p['customer_email'] ?></td>
    <td><?= $p['customer_phone'] ?></td>
    <td><?= $p['payment_method'] ?></td>
    <td>₹<?= number_format($p['total_amount'],2) ?></td>
    <td><?= $p['purchase_status'] ?></td>
    <td><?= $p['purchase_date'] ?></td>
    <td>
        <a class="edit" href="edit_purchase.php?id=<?= $p['id'] ?>">Edit</a> |
        <a class="delete" href="delete_purchase.php?id=<?= $p['id'] ?>"
           onclick="return confirm('Delete this purchase?')">Delete</a> |
        <a class="contact-btn"
           href="https://wa.me/91<?= $phone ?>?text=<?= $msg ?>"
           target="_blank">Contact</a>
    </td>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr><td colspan="10">No purchases found</td></tr>
<?php endif; ?>
</table>


<!-- ================= LOANS ================= -->
<h2>🏦 Loan Applications</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Car ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Loan Amount</th>
        <th>EMI</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

<?php if(mysqli_num_rows($loan_q) > 0): ?>
<?php while($l = mysqli_fetch_assoc($loan_q)):
    $phone = preg_replace('/\D/','',$l['customer_phone']);

    $msg = urlencode(
        "Hello {$l['customer_name']},\n\n".
        "Your *loan application* at Quasar Drives has been received \n\n".
        "Loan Amount: ₹{$l['loan_amount']}\n".
        "EMI: ₹{$l['emi']}\n\n".
        "Regards,\n*Quasar Drives*"
    );
?>
<tr>
    <td><?= $l['id'] ?></td>
    <td><?= $l['car_id'] ?></td>
    <td><?= $l['customer_name'] ?></td>
    <td><?= $l['customer_email'] ?></td>
    <td><?= $l['customer_phone'] ?></td>
    <td>₹<?= number_format($l['loan_amount'],2) ?></td>
    <td>₹<?= number_format($l['emi'],2) ?></td>
    <td><?= $l['loan_status'] ?></td>
    <td><?= $l['applied_date'] ?></td>
    <td>
        <a class="edit" href="edit_loan.php?id=<?= $l['id'] ?>">Edit</a> |
        <a class="delete" href="delete_loan.php?id=<?= $l['id'] ?>"
           onclick="return confirm('Delete this loan?')">Delete</a> |
        <a class="contact-btn"
           href="https://wa.me/91<?= $phone ?>?text=<?= $msg ?>"
           target="_blank">Contact</a>
    </td>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr><td colspan="10">No loans found</td></tr>
<?php endif; ?>
</table>

</body>
</html>