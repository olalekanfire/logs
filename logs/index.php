<?php
//Script Error Reporting
error_reporting(E_ALL);
ini_set("display_errors", "1");
?>
<?php
include"../logs/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.hero {
background-image: url('home.jpg');
background-size: cover;
background-position: center;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
color: #fff;
}

.hero h1 {
font-size: 48px;
color: #000;

}
.hero p {
    font-size: 25px;
    color: #000;
}

.services {
padding: 20px;
background-color:whitesmoke;
}

.services h2 {
font-size: 24px;
margin-top: 0;
}


.services ul {
list-style: none;
margin: 0;
padding: 0;
}

.services li {
margin-bottom: 20px;
}

.services h3 {
font-size: 18px;
margin-top: 0;
}

.benefits {
padding: 20px;
background-color:whitesmoke;

}

.benefits h2 {
font-size: 24px;
margin-top: 0;
}

.benefits ul {
list-style: none;
margin: 0;
padding: 0;
}

.benefits li {
margin-bottom: 20px;
}

.benefits h3 {
font-size: 18px;
margin-top: 0;
}

.call-to-action {
padding: 20px;
background-color: black;
color: #fff;
text-align: center;
}

.call-to-action button {
background-color: aqua;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 18px;
cursor: pointer;
}
</style>
</head>
<body>
<header>
    <div>
    <a href="" class="logo">Quick Delivery</a>
    </div>
<nav class="newnav">
<ul>
<li></li>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="service.php">Services</a></li>
<li><a href="tracking.php">Tracking</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</header>

<section class="hero">
    <h1>Fast and Reliable Courier Service</h1>
    <p>Get your packages delivered quickly and efficiently</p>
    <button>Get a Quote</button>
</section>

<section class="services">
    <h2>Our Services</h2>
    <ul>
        <li>
            <h3>Same-day Delivery</h3>
            <p>Get your packages delivered on the same day</p>
        </li>
        <li>
            <h3>Next-day Delivery</h3>
            <p>Get your packages delivered on the next day</p>
        </li>
        <li>
            <h3>International Delivery</h3>
            <p>Get your packages delivered internationally</p>
        </li>
        <li>
            <h3>Package Tracking</h3>
            <p>Track your packages in real-time</p>
        </li>
    </ul>
</section><br><br>

<section class="benefits">
    <h2>Why Choose Us?</h2>
    <ul>
        <li>
            <h3>Fast and Reliable Delivery</h3>
            <p>We guarantee fast and reliable delivery of your packages</p>
        </li>
        <li>
            <h3>Competitive Pricing</h3>
            <p>We offer competitive pricing for our courier services</p>
        </li>
        <li>
            <h3>Real-time Package Tracking</h3>
            <p>We provide real-time package tracking so you can stay updated on your package's status</p>
        </li>
        <li>
            <h3>Friendly and Helpful Customer Service</h3>
            <p>We have a team of friendly and helpful customer service representatives who are always ready to assist you</p>
        </li>
    </ul>
</section>

<section class="call-to-action">
    <h2>Get Started with Quick Delivery</h2>
    <button>Get a Quote</button>
</section>

<footer class="bg-dark text-white">
    </div>
    <div class="col-md-6">
                    <h3>Quick Links</h3>
                    <nav class="newnav">
                    <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="tracking.php">Tracking</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                </ul>
                </nav>
                </div>
            </div>
        </div>
        <p>&copy; 2024 Quick Delivery. All rights reserved.</p>
</footer>
</body>
</html>