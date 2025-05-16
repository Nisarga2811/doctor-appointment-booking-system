<?php
    session_start();
    include('inc/conf.php');//get configuration file
    if(isset($_POST['cl_login']))
    {
      $email=$_POST['email'];
      $pass_word=sha1(md5($_POST['pass_word']));//double encrypt to increase security
      $stmt=$mysqli->prepare("SELECT email ,pass_word , log_id FROM logs WHERE email=? and pass_word=? ");//sql to log in user
      $stmt->bind_param('ss',$email,$pass_word);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($email,$pass_word,$log_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['log_id']=$log_id;//assaign session to passenger id
			
      if($rs)
      {//if its sucessfull
        header("location:index.php");
      }

      else
      {
        echo "<p style='color: red;background-color: white; text-align: center; font-size: 20px;'>Incorrect email or password. Please try again.</p>";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
        background-image: url("img/hospital.jpg");
        }
        main{
            padding-left: 350px;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <center><img src="img\logo.jpg" width="50px" height="50px"><h1 style="color: white;">UNR Hospital</h1></center>
    <main>
        <div class="container">
            <div class="row justify-coctent-enter">
                <div class="card" style="width: 700px;">
                    <div class="card-login" style="padding-left: 300px; font-size: 20px;">Login</div>
                    <div class="card-body">
                        <hr>
                        <form method="POST">
                            <div class="form-group row mt-2">
                                <label for="email" class="col-md-4 text-md-right">Email Address</label>
                                <div class="col-md-8">
                                    <input type="text" id="email" class="form-control" name="email" autocomplete="off" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="password" class="col-md-4 text-md-right">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="pass_word" autocomplete="off" placeholder="Enter password">
                                </div>
                            </div>
                            
                            <div class="form-group row mt-2">
                                <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                    <div class="col-6"><input type="submit" name ="cl_login" class="btn btn-success btn-xl" value ="Log In"></div>
   
                                        <p class="text-black mt-2 mb-2">I donot have an account <a href="signup.php">Signup</a></p>                        
                                    </div>
                                </div>
                        </form>
                    </div>
            </div>
            </div>
        </div>
    </main>
    <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/swal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
</body>
</html>