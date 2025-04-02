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
    <title>OLA Courier Service - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>    
   
.about-hero {
        background-image: url('truck.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
}

.about-hero h1 {
    font-size: 48px;
    color: #000;

}
.about-hero p {
font-size: 25px;
color: #000;
}
.our-mission {
    padding: 20px;
}

.our-mission h2 {
    font-size: 24px;
    margin-top: 0;
}

.our-values { 
    padding: 20px;
}

.our-values h2 {
    font-size: 24px;
    margin-top: 0;
}

.our-values ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.our-values li {
    margin-bottom: 10px;
}

.our-team {
    padding: 20px;
}

.our-team h2 {
    font-size: 24px;
    margin-top: 0;
}

.team-member {
    background-color: whitesmoke;
    padding: 20px;
    border-bottom: 1px solid blue;
    display:flex;
}
.container{
    display: flex; 
   flex-wrap: wrap;
   justify-content: space-between;
}
.team-member img {
    margin: 10px;  
    width: 20%;
    object-fit: cover;
    border-radius: 30%;
}

.team-member h3 {
    font-size: 25px;
    margin-top: 0;
 }

.testimonials {
    padding: 20px;
}

.testimonials h2 {
    font-size: 24px;
    margin-top: 0;
}

.testimonial {
    background-color: #f7f7f7;
    padding: 20px;
    border-bottom: 1px solid #ccc;
}

.testimonial p {
    font-size: 20px;
    color: #666;
}

.testimonial h3 {
    font-size: 18px;
    margin-top: 0;
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

    <section class="about-hero">
        <h1>About Us</h1>
        <p>We are a leading courier service provider, dedicated to providing fast, reliable, and secure delivery services.</p>
    </section>

    <section class="our-mission">
        <h2>Our Mission</h2>
        <p>To provide exceptional courier services that exceed our customers' expectations, while maintaining the highest level of integrity, reliability, and customer satisfaction.</p>
    </section>

    <section class="our-values">
        <h2>Our Values</h2>
        <ul>
            <li>Customer satisfaction</li>
            <li>Integrity and reliability</li>
            <li>Teamwork and collaboration</li>
            <li>Innovation and continuous improvement</li>
        </ul>
    </section>

    <section class="our-team">
        <h2>Meet Our Team</h2>
        <div class="col">
                <div class="team-member">
                    <img src="ceo.jpg" alt="Team Member 1">
                    <h3>Olamilekan</h3>
                    <p>CEO and Founder</p>
           
                    <img src="saka.jpg" alt="Team Member 2">
                    <h3>Shako</h3>
                    <p>Operations Manager</p>
              
                    <img src="sam.jpg" alt="Team Member 3">
                    <h3>Sam</h3>
                    <p>Customer Service Representative</p>
                </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"I've been using OLA Courier Service for years and they never disappoint. Fast, reliable, and secure delivery every time."</p>
                    <h3>John Doe</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"I was blown away by the level of service I received from OLA Courier Service. They went above and beyond to ensure my package was delivered on time."</p>
                    <h3>Jane Smith</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"I've tried several courier services in the past, but none of them compare to OLA Courier Service. They are fast, reliable, and affordable."</p>
                    <h3>Bob Johnson</h3>
                </div>
            </div>
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

