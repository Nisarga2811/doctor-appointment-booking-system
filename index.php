<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=devic-width, initial-scale=1">
        <title>Doctor appointment</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .copyright{
            text-align: center;
            background-color: lightseagreen;
            height: 30px;
        }
        </style>
    
    </head>
    <body>
    <nav class="nav nav_top">
    <div class="logo">
        <a href="index.php" style="font-size: 30px; color: yellow; font-family: cursive; font-weight: bold;"><img src="img\logo.jpg" width="150">URN Hospital</a>
    </div>
    <div class="nav_side nav nav-tabs">
        <a href="about.php" class="nav-item">About Us</a>
        <a href="doctor.php">Book Appointment</a>
        <a href="contact.php">Contact</a>
        <a href="signup.php">Sign Up</a>
        <a href="logout.php">Logout</a>
        
    </div>
</nav>
<div class="main">
        <div class="main_content">
            <p><h1 style="font-size: 30px; padding: 30px;">HOSPITAL THAT CARES FOR YOU</h1>
            <h4><span style="font-size: 20px; color: rgb(8, 75, 156);">Welcome to URN Hospital</span></h4>
        <h6>Get the best doctor consultent and treatments who cares about you and your family.</h6>
    <img src="img\267649-middle.png"></p>
            <p><img src="img\doctors.jpg">
            <br>
            <br>
            <br>
            <br>
            <div class="btn" type="button">
            <img src="img\2face.jpg" width="100px">
            <a href="doctor.php">See the doctors detail</a>
        </div>
        <div class="btn" type="button">
            <img src="img\nurse.png" width="40px">
            <a href="nurse.php">See the nurse detail</a>
        </div>
        </p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="btny" type="button" style="text-align: center;">
            <img src="img\face.png" width="80px">
            <a href="doctor.php">Book appointment with the doctors</a>
        </div>
        <br>
        <br>
        <br>
</div>
<div class="about">
        <p><h1 class="text">About Us</h1></p>
        <div class="ab" style="padding: 20px; border-style: double;">
            <p>
        <center><img src="img\hospital.jpg" width="250px"></center></p>
        <p  style="padding-top: 30px;"><h6>UNR Hospital is definately the hospital you are looking for. We care about you and your family. We are proud to appride you our hospital comes under top 20 hospitals in the world.<a href="about.php">Read more</a></h6></p>
</div>
</div>
<div class="product">
    <h2>OUR HAPPY CUSTOMERS</h2>
    <div class="product_container">
        <div class="item">
            <div class="item_content">
                <h3>Rahul</h3>
                <p>All the staffs are very friendly with us</p>
            </div>
        </div>
        <br>
        <div class="item">
            <div class="item_content">
                <h3>Reeka</h3>
                <p>Cleanliness is maintained very well, all the wards are clean</p>
            </div>
        </div>
        <br>
        <div class="item">
            <div class="item_content">
                <h3>Adithi</h3>
                <p>Food is not so good but except this every this is well maintained.</p>
            </div>
        </div>
    </div>
    <div class="product_btn">
        <a href="review.html">Read more reviews</a>
    </div>
    <br>
    <hr>
    <br>
</div>
<div class="feed">
    <h1 style="text-align: center; color: white;">Write Your Review Here</h1>
    <div class="feed_form">
        <form name="submit-googlesheet" method="post">
        <input type="text" name="Name" placeholder="Name"><br>
        <input type="email" name="Email" placeholder="Email ID"><br>
        <input type="number" name="Contact" placeholder="Contact number"><br>
        <textarea rows="5" cols="7" name="Review" placeholder="Write tour reivew"></textarea><br>
        <button type="submit">Submit</button>
    </form>
    </div>
</div>

</div>
<div class="copyright">
        Copyright © 2023 1stop.All rights reserved
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>