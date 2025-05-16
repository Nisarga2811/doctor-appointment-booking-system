<?php
	session_start();
	include('C:\xampp\htdocs\doctor\inc\conf.php');
    include('C:\xampp\htdocs\doctor\inc\docchechlogin.php');
    check_login();
    ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=devic-width, initial-scale=1">
        <title>Main page</title>
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
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
        <a href="profile.php">Profile</a>
        
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
        <div class="btn" type="button">
        <img src="img\2face.jpg" width="100px">
            <a href="doc-view.php">Set doctor password</a>
        </div>
        <div class="btn" type="button">
            <img src="img\nurse.png" width="40px">
            <a href="res-view.php">Set reseptor password</a>
        </div>
        <br>
        <div class="btn" type="button">
            <img src="img\online.jpg" width="70px">
            <a href="app-view.php">View Appointment</a>
        </div>
        </p>
    </div>
    <br>
    <br>
    <br>
    <br>
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

</div>
<div class="copyright">
        Copyright © 2023 1stop.All rights reserved
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>