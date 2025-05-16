<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    
    <style>
        .test1{
        padding: 30px;

    }
    .test1 h2{
        color: black;
        font-size: 35px;
        text-align: center;
        padding: 10px;
        text-transform: uppercase;
    }
    .text1_container{
        margin-right: 10%;
        margin-left: 10%;
        text-align: center;
    }
    .carousel-inner{
        background-color: white;
        box-shadow: none;

    }
    .text1 .text1_container .item{
        width: 100%;
        padding: 10px;
        background-color: darkcyan;
        box-shadow: none;
    }
    .text1 .text1_container .item .item_image{
        width: 100%;
        height: 300px;
        text-align: center;
        overflow: hidden;
    }
    .text1 .text1_container .item .item_image img{
        width: 800px;
    }
    .text1 .text1_container .item .item_content2{
        text-align: center;
    }

    .text1 .text1_container .item .item_content2 .h3{
        padding: 10px;
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }
    .text1 .text1_container .item .item_content2 .p{
        padding: 10px;
        font-size: 15px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    table,th,td{
                border: 1px solid blue;
                border-collapse: collapse;
                text-align: center;
                padding: 5px;
                margin: 100px;
            }
            tr:nth-child(even){
                background-color: cadetblue;
            }
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
        <a href="index.html" style="font-size: 30px; color: yellow; font-family: cursive; font-weight: bold;"><img src="img\logo.jpg" width="150">URN Hospital</a>
    </div>
    <div class="nav_side nav nav-tabs">
    <a href="ad-index.php">Home</a>
        <a href="about.php" class="nav-item">About Us</a>
        <a href="contact.php">Contact</a>
        
    </div>
</nav>
<div class="ab" style="padding: 20px;">
            <p><img src="img\hospital.jpg" width="400px"></p>
        <p  style="padding-top: 30px;"><h5>UNR Hospital is definately the hospital you are looking for. We care about you and your family. We are proud to appride you our hospital comes under top 20 hospitals in the world.We make sure that all the pateint get well soon and live with their family happaily again.
        </h5>
    <center><img src="img\im.jpg" width="200px"></center></p>
</div>




<div class="text1">
    <div class="text1_container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="item_image">
                    <img src="img\ward.jpg" alt=" ">
                </div>
                <div class="item_content2">
                    <h3>This is our hospital Ward</h3>
                    <p>We make sure that Hygine maintained everyday without fail</p>
                </div>
              </div>
              <div class="item">
                <div class="item_image">
                    <img src="img\doctors.jpg" alt=" ">
                </div>
                <div class="item_content2">
                    <h3>They are our staff</h3>
                    <p>They are the pillors of this hospital.</p>
                </div>
              </div>
              <div class="item">
                <div class="item_image">
                    <img src="img\canteen.jpg" alt=" ">
                </div>
                <div class="item_content2">
                    <h3>This is a mess</h3>
                    <p>We make sure that food is been cooked by hyginically and tasty. Everyday enspection is taken by the authority members to check the quality of the food</p>
                </div>
              </div>
              
              
            </div>
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
<br>
<br>
<center><h2>Staff Count</h2>
    <table style="font-size: 20px;width: 60%">
        <thead>
            <th></th>
            <th>Staff</th>
            <th>Count</th>
            <th>Male</th>
            <th>Female</th>
        </thead>
        <tbody>
                <tr>
                    <th>1</th>
                    <td>Doctors</td>
                    <td>40</td>
                    <td>21</td>
                    <td>19</td>
                </tr>
                <tr>
                <th>2</th>
                    <td>Surgens</td>
                    <td>30</td>
                    <td>14</td>
                    <td>16</td>
                </tr>
                <tr>
                <th>3</th>
                    <td>Nurse</td>
                    <td>40</td>
                    <td>15</td>
                    <td>25</td>
                </tr>
                <tr>
                <th>4</th>
                    <td>Cleaning staff</td>
                    <td>50</td>
                    <td>20</td>
                    <td>25</td>
                </tr>
                <tr>
                <th>5</th>
                    <td>Cook</td>
                    <td>20</td>
                    <td>7</td>
                    <td>13</td>
                </tr>
            </tbody>
    </table>
    </center>
    <div class="copyright">
        Copyright © 2023 1stop.All rights reserved
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>