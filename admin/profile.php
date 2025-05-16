<?php
    session_start();
	include('C:\xampp\htdocs\doctor\inc\conf.php');
    include('C:\xampp\htdocs\doctor\inc\docchechlogin.php');
    check_login();
    $aid=$_SESSION['res_id'];
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
    
        <title>Profile</title>
        <style>
            main{
            padding-left: 350px;
            padding-top: 100px;
        }
        </style>
    </head>
  <body style="background-color: rgb(43, 168, 226);">


    <div class="be-wrapper be-fixed-sidebar">
        <?php
            $ret="SELECT * FROM ad_logs ";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object()) //Display all passenger details
        {
        ?>
        <!--End Server Side Script-->
        <main>
        <div class="container">
            <div class="row justify-coctent-enter">
                <div class="card" style="width: 700px;">
                    <div class="card-login" style="padding-left: 300px; font-size: 20px;">Profile</div>
                    <div class="card-body">
                        <hr>
                        <form method="POST">
                            <div class="form-group row mt-2">
                                <label for="name" class="col-md-4 text-md-right">Name</label>
                                <?php echo $row->name;?>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="email" class="col-md-4 text-md-right">Email id</label>
                                <?php echo $row->email;?>
                            </div>
                            <button class="btn btn-danger"><a href="ad-index.php"  style="color: white;">Home</a></button>
                        </form>
                    </div>
            </div>
            </div>
        </div>
    </main>
    <?php }?>
     
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.init();
      	App.pageProfile();
      });
    </script>
  </body>

</html>