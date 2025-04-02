<?php
//Script Error Reporting
error_reporting(E_ALL);
ini_set("display_errors", "1");
?>
<?php
include"../logs/conn.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //get from the database
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //insert into database
    $sql = "INSERT INTO `contact`( `name`, `email`, `message`)
     VALUES ('$name','$email','$message')";
     if (mysqli_query($conn, $sql)) {
                  echo "insert successfully";
               } else {
                  echo "Error inserting: " . mysqli_error($conn);
           }

     //redirect to user
     header(
        "Location:thank_you.php"
     );
     exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OLA Courier Service - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .contact-hero {
        background-image: url('truck.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }
    
    .contact-hero h1 {
        font-size: 48px;
        color: #000;

    }
    .contact-hero p {
        font-size: 25px;
        color: #000;

    }
    
    
    .contact-form form {
        max-width: 500px;
        margin: 0 auto;
    }
    
    .contact-form input, .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }
    
    .contact-info {
        padding: 20px;
    }
    
    .contact-info h2 {
        font-size: 24px;
        margin-top: 0;
    }
    
    .contact-info ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .contact-info li {
        margin-bottom: 10px;
        font-size: 20px;
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

    <section class="contact-hero">
        <h1>Get in Touch</h1>
        <p>We'd love to hear from you! Please use the form below to send us a message.</p>
    </section>

    <section class="contact-form">
      <form action="contact.php" method= "post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Send message">
      </form>
    </section>

    <section class="contact-info">
        <h2>Our Contact Information</h2>
        <ul>
            <li><i class="bi bi-telephone"></i> Phone: 09159149584</li>
            <li><i class="bi bi-envelope"></i> Email: <a href="email:olamilekan362@gmail.com"></a>olamilekan362@gmail.com</li>
            <li><i class="bi bi-geo-alt"></i> Address: 123 OJO St, Lagos, Nigeria</li>
        </ul>
    </section>

    <section class="social-media">
        <h2>Follow Us</h2>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-instagram"></i></a></li>
        </ul>
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
