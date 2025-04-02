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
    <title>Olamilekan Courier Service - Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>

.tracking-hero {
    background-image: url('truck.jpeg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.tracking-hero h1{
    font-size: 48px;
    color: #000;

}
.tracking-hero p{
    font-size: 25px;
    color: #000;

}

.tracking-form {
    padding: 20px;
}

.tracking-form form {
    max-width: 500px;
    margin: 0 auto;
}

.tracking-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

.tracking-form button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.tracking-status {
    padding: 20px;
}

.tracking-status-container {
    max-width: 800px;
    margin: 0 auto;
}

.tracking-status-item {
    background-color: #f7f7f7;
    padding: 20px;
    border-bottom: 1px solid #ccc;
}

.tracking-status-item h3 {
    font-size: 18px;
    margin-top: 0;
}

.tracking-status-item p {
    font-size: 14px;
    color: #666;
}

.tracking-map {
    padding: 20px;
}

.tracking-map-container {
    max-width: 800px;
    margin: 0 auto;
}

.tracking-map iframe {
    width: 100%;
    height: 450px;
    border: none;
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

    <section class="tracking-hero">
        <h1>Track Your Package</h1>
        <p>Enter your tracking number to track the status of your package.</p>
    </section>

    <section class="tracking-form">
        <form>
            <div class="form-group">
                <label for="tracking-number">Tracking Number:</label>
                <input type="text" class="form-control" id="tracking-number" placeholder="Enter tracking number">
            </div>
            <button type="submit" class="btn btn-primary">Track Package</button>
        </form>
    </section>

    <section class="tracking-status">
        <h2>Tracking Status:</h2>
        <div class="tracking-status-container">
            <div class="tracking-status-item">
                <h3>Picked Up</h3>
                <p>2023-02-20 10:00 AM</p>
            </div>
            <div class="tracking-status-item">
                <h3>In Transit</h3>
                <p>2023-02-20 11:00 AM</p>
            </div>
            <div class="tracking-status-item">
                <h3>Delivered</h3>
                <p>2023-02-20 12:00 PM</p>
            </div>
        </div>
    </section>

    <section class="tracking-map">
        <h2>Package Location:</h2>
        <div class="tracking-map-container">
            <!-- <iframe src="(link unavailable)" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
        </div>
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