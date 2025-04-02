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
    $service_name = $_POST["service_name"];
    $service_description = $_POST["service_description"];
    $price = $_POST["price"];

    //Validate the input data 
    if (empty($service_name) || empty($service_description) || empty($price)){
        echo"please fill in all fields";
    }elseif
        (! is_numeric($price)){
            echo "Price must be a number.";
        }else{
            // insert the data into the database
            $sql = "INSERT INTO services (`service_name`, `service_description`, `price`)
            VALUES ('$service_name', '$service_description', '$price')";
            // if (mysqli_query($conn, $sql)) {
            //     echo "insert successfully";
            //  } else {
            //     echo "Error inserting: " . mysqli_error($conn);

                // Redirect the user to the services page
                header("Location: service.php");
                exit;
         }
        }
  //  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLA Courier Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
    .service-hero {
        background-image: url('truck.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
}

.service-hero h1 {
    font-size: 48px;
    color: #000;

}
.service-hero p {
    font-size: 25px;
    color: #000;
}

.service-section {
    background-color: whitesmoke;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.service-section h2 {
    font-size: 24px;
    margin-top: 0;
}

.service-section ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.service-section li {
    margin-bottom: 10px;
}

.service-section button {
    background-color: blue;
    color: aqua;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}
.service-form form {
        max-width: 500px;
        margin: 0 auto;
    }
    
    .service-form input, .service-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }
    
    .service-info {
        padding: 20px;
    }
    
    .service-info h2 {
        font-size: 24px;
        margin-top: 0;
    }
    
    .servive-info ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .service-info li {
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

    <section class="service-hero">
        <h1>Our Services</h1>
        <p>We offer a range of courier services to meet your needs.</p>
    </section>

    <section class="service-section">
        <h2>Express Delivery</h2>
        <p>Get your packages delivered quickly and efficiently with our express delivery service.</p>
        <ul>
            <li>Same-day delivery in select areas</li>
            <li>Next-day delivery nationwide</li>
            <li>Tracking and updates available online</li>
        </ul>
        <button>Learn More</button>
    </section>

    <section class="service-section">
        <h2>Secure Delivery</h2>
        <p>Ensure the safety and security of your packages with our secure delivery service.</p>
        <ul>
            <li>GPS tracking and monitoring</li>
            <li>Secure and tamper-evident packaging</li>
            <li>Background-checked and trained drivers</li>
        </ul>
        <button>Learn More</button>
    </section>

    <section class="service-section">
        <h2>International Delivery</h2>
        <p>Get your packages delivered to anywhere in the world with our international delivery service.</p>
        <ul>
            <li>Delivery to over 200 countries and territories</li>
            <li>Competitive rates and flexible shipping options</li>
            <li>Tracking and updates available online</li>
        </ul>
        <button>Learn More</button>
    </section>
    <section class="service-form">
      <form action="service.php" method= "post">
        <label for="service_name">Service Name:</label><br>
        <input type="text" id="service_name" name="service_name"><br><br>
        <label for="service_description">Service Description:</label><br>
        <textarea id="service_description" name="service_description"></textarea><br><br>
        <label for="price"> Price:</label><br>
        <input type="number" id="price" name="price" step="0.01"><br><br>
        <input type="submit" value="Add Service">
      </form>
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
