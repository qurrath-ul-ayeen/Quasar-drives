<?php
include "db.php";
 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quasar Drives | Premium Car Showroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
        }

        /* NAVBAR */
        .navbar {
            background: #111;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: #fff;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #ff4d4d;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)),
                        url("assets/images/banner.jpg") center/cover;
            color: #fff;
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            opacity: .9;
        }

        /* SECTION */
        .section {
            padding: 50px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        /* CARDS */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }

        .card h3 {
            margin: 10px 0;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #ff4d4d;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .card a:hover {
            background: #e60000;
        }

        footer {
            background: #111;
            color: #aaa;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><strong>🚗 Quasar Drives</strong></div>
    <div>
        <a href="index.php">Home</a>
        <a href="showroom.php">Showroom</a>
        <a href="admin_dashboard.php">Admin</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Elevate Every Journey with Quasar Drives</h1>
    <p>Premium cars • Trusted dealers • Best prices</p>
</div>

<!-- WHY CHOOSE US -->
<style>
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.info-box {
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,.08);
}

.info-box h3 {
    margin-bottom: 10px;
    color: #111;
}

.info-box p {
    font-size: 14px;
    color: #555;
}

.cta {
    background: linear-gradient(135deg, #bfc6c7ff, #373939d0);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
}

.cta a {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 25px;
    background: #fff;
    color: #0074ccff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}
</style>

<div class="section">
    <h2>Why Choose Quasar Drives</h2>

    <div class="info-grid">
        <div class="info-box">
            <h3>✔ Trusted Dealers</h3>
            <p>Every car is verified and quality checked.</p>
        </div>

        <div class="info-box">
            <h3>💰 Best Value</h3>
            <p>Transparent pricing with no hidden costs.</p>
        </div>

        <div class="info-box">
            <h3>📄 Easy Financing</h3>
            <p>Flexible EMI and bank loan assistance.</p>
        </div>

        <div class="info-box">
            <h3>🛠 Lifetime Support</h3>
            <p>After-sales service and warranty support.</p>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta">
    <h2>Find Your Dream Car</h2>
    <p>Explore the latest collection at Quasar Drives</p>
    <a href="showroom.php">Browse Cars</a>
</div>

<!-- FOOTER -->
<footer>
    © <?php echo date("Y"); ?> Quasar Drives | All Rights Reserved
</footer>

</body>
</html>