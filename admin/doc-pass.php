<?php
	session_start();
	include('C:\xampp\htdocs\doctor\inc\conf.php');
    include('C:\xampp\htdocs\doctor\inc\docchechlogin.php');
    check_login();
		if(isset($_POST['doc_register']))
		{
            $doc_id=$_POST['doc_id'];
			$email=$_POST['email'];
			$password=sha1(md5($_POST['password']));

      //sql to insert captured values
			$query="insert into doc_logs ( doc_id,email, password) values(?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('iss',$doc_id, $email, $password);
			$stmt->execute();

            
			
      
			if($stmt)
			{
        echo "<p style='color: red;background-color: white; text-align: center; font-size: 20px;'>Created.</p>";
			}
			else {
        echo "<p style='color: red;background-color: white; text-align: center; font-size: 20px;'>Cannot be craeted.</p>";
			}
			
			
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Create Doctor password</title>
    <link rel="stylesheet" type="text/css" href="lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
        background-image: url("img/hospital.jpg");
        }
        main{
            padding-left: 350px;
            padding-top: 50px;
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
                    <div class="card-login" style="padding-left: 300px; font-size: 20px;">Create Doctor Password</div>
                    <div class="card-body">
                        <hr>
                        <form method="POST">
                        <div class="form-group row mt-2">
                            <label class="col-md-4 text-md-right">Doctor id</label>
                            <select  class="col-md-8" name="doc_id">
                                <?php
                                    $did=mysqli_query($mysqli,"select id,name from doctors");
                                    while($c=mysqli_fetch_array($did)){
                                ?>
                                <option value="<?php echo $c['id'] ?>"><?php echo $c['id'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                            <div class="form-group row mt-2">
                                <label for="email" class="col-md-4 text-md-right">Email Address</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" autocomplete="none" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="pass_word" class="col-md-4 text-md-right">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" autocomplete="none" placeholder="Enter password">
                                </div>
                            </div>
                            
                            <div class="form-group row mt-2">
                                <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                    <div class="col-6"><input type="submit" name ="doc_register" class="btn btn-danger" value ="Register"></div>
                                        <div>
                                        <a href="ad-index.php"><button type="button" class="btn btn-primary">
                                            Home
                                        </button> </a></div>
                                        <a href="doc-view.php"><button type="button" class="btn btn-primary">
                                            Back
                                        </button> </a>
                                    </div>
                                </div>
                        </form>
                    </div>
            </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/swal.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
</body>
</html>