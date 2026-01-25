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
body{
    margin:0;
    font-family:Arial,Helvetica,sans-serif;
    background:#f5f5f5;
}

/* SPLASH COMMON */
.splash{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100vh;
    background:#111;
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:9999;
}

/* SPLASH 1 - LOGO */
#splash-logo img{
    width:360px;
    animation:logoZoom 1.5s ease;
}

/* SPLASH 2 - WELCOME */
#splash-welcome{
    display:none;
    color:#fff;
    text-align:center;
}

#splash-welcome h1{
    font-size:38px;
    margin-bottom:10px;
    animation:fadeSlide 1.5s ease;
}

#splash-welcome p{
    font-size:18px;
    color:#ccc;
    animation:fadeSlide 2s ease;
}

/* ANIMATIONS */
@keyframes logoZoom{
    from{ transform:scale(0.6); opacity:0; }
    to{ transform:scale(1); opacity:1; }
}

@keyframes fadeSlide{
    from{ transform:translateY(30px); opacity:0; }
    to{ transform:translateY(0); opacity:1; }
}

/* MAIN SITE */
#main{
    display:none;
}

/* NAVBAR */
.navbar{
    background:#111;
    padding:12px 30px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.brand{
    display:flex;
    align-items:center;
    gap:12px;
}

.brand img{
    height:60px;
}

.brand span{
    color:#fff;
    font-size:22px;
    font-weight:bold;
}

.navbar a{
    color:#fff;
    margin-left:20px;
    text-decoration:none;
    font-weight:500;
}

.navbar a:hover{
    color:#ff4d4d;
}

/* HERO */
.hero{
    background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
               url("assets/images/banner.jpg") center/cover;
    color:#fff;
    padding:100px 20px;
    text-align:center;
}

.hero h1{
    font-size:42px;
}

/* SECTIONS */
.section{
    padding:50px 20px;
    max-width:1100px;
    margin:auto;
}

.info-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.info-box{
    background:#fff;
    padding:25px;
    border-radius:8px;
    text-align:center;
    box-shadow:0 4px 12px rgba(0,0,0,.08);
}

/* CTA */
.cta{
    background:linear-gradient(135deg,#bfc6c7ff,#373939d0);
    color:#fff;
    text-align:center;
    padding:50px 20px;
}

.cta a{
    display:inline-block;
    margin-top:15px;
    padding:12px 25px;
    background:#fff;
    color:#0074ccff;
    text-decoration:none;
    border-radius:5px;
    font-weight:bold;
}

/* FOOTER */
footer{
    background:#111;
    color:#aaa;
    text-align:center;
    padding:15px;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- SPLASH 1 : LOGO -->
<div class="splash" id="splash-logo">
    <img src="assets/images/logo.png" alt="Quasar Drives Logo">
</div>

<!-- SPLASH 2 : WELCOME -->
<div class="splash" id="splash-welcome">
    <div>
        <h1>Welcome to our Car Showroom</h1>
        <p>Experience luxury, performance & trust with Quasar Drives</p>
    </div>
</div>

<!-- MAIN WEBSITE -->
<div id="main">

<div class="navbar">
    <div class="brand">
        <img src="assets/images/logo.png" alt="Logo">
        <span>Quasar Drives</span>
    </div>
    <div>
        <a href="index.php">Home</a>
        <a href="showroom.php">Showroom</a>
        <a href="admin_dashboard.php">Admin</a>
    </div>
</div>

<div class="hero">
    <h1>Elevate Every Journey with Quasar Drives</h1>
    <p>Premium cars • Trusted dealers • Best prices</p>
</div>

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

<div class="cta">
    <h2>Find Your Dream Car</h2>
    <p>Explore the latest collection at Quasar Drives</p>
    <a href="showroom.php">Browse Cars</a>
</div>

<footer>
    © <?php echo date("Y"); ?> Quasar Drives | All Rights Reserved
</footer>

</div>

<script>
window.onload = function(){

    // Show logo first
    setTimeout(function(){
        document.getElementById("splash-logo").style.display="none";
        document.getElementById("splash-welcome").style.display="flex";
    },2000);

    // Show main site
    setTimeout(function(){
        document.getElementById("splash-welcome").style.display="none";
        document.getElementById("main").style.display="block";
    },4500);

};
</script>

</body>
</html>