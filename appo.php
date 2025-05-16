<?php
	session_start();
	include('inc\conf.php');
    include('inc\checklogin.php');
    check_login();
    $aid=$_SESSION['log_id'];
    
    
		if(isset($_POST['submit']))
		{
			$c_name=$_POST['c_name'];
			$c_email=$_POST['c_email'];
			$c_phone=$_POST['c_phone'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $doc_name=$_POST['doc_name'];
            $date=$_POST['date'];
            $time=$_POST['time'];

      //sql to insert captured values
			$query="insert into client (c_name, c_email, c_phone,age,gender,doc_name,date,time) values(?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssssssss', $c_name, $c_email, $c_phone,$age,$gender,$doc_name,$date,$time);
			$stmt->execute();
			
      
			if($stmt)
			{
        echo "<p style='color: red;background-color: white; text-align: center; font-size: 20px;'>BOOKED</p>";
			}
			else {
        echo "<p style='color: red;background-color: white; text-align: center; font-size: 20px;'>Cannot be book.</p>";
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
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: rgb(48, 168, 198);">
<div class="container">
<div class="row justify-content-center">
<div class="card" style="width: 1000px;" style="background-color: rgb(210, 215, 216);">
<div class="card-login" style="padding-left: 300px; font-size: 20px; font-size:40px;">BOOK APPOINTMENT</div><hr>
<div class="card-body">
<div class="card card-border-color card-border-color-success" style="background-color:LightGray">
<div class="card-header card-header-divider" style="background-color:LightGray"><span class="card-subtitle">Fill All Details</span></div>
<form method="POST">
    <center>
    <?php
                        $id=$_GET['id'];
                        $ret="select * from doctors where id=?";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->bind_param('i',$id);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                    {
                    ?>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="name">Name</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" type="text" name="c_name"></div>
    </div>
    <br>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="email">Email</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" type="email" name="c_email"></div>
    </div>
    <br>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="phone">Phone</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" type="number" name="c_phone"></div>
    </div>
    <br>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="age">Age</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" type="number" name="age"></div>
    </div>
    <br>
        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="gender">Gender</label>
                <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" name="gender" type="text">
                </div>
        </div>
        <br>
        <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="doc_name">Doctor</label>
        <div class="col-12 col-sm-8 col-lg-6">
        <input class="form-control" readonly name="doc_name" value="<?php echo $row->name;?>" type="text">
        </div>
        </div>
        <br>
    <div>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="date">Date of appointment</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" type="date" name="date"></div>
    </div>
    </div>
    <div>
    <div class="form-group row">
        <label  class="col-12 col-sm-3 col-form-label text-sm-right" for="time">Time</label>
        <div class="col-12 col-sm-8 col-lg-6"><input class="form-control" name="time"value="9:00 AM- 7:00 PM">
        </div>
    </div>
    </div>
    <div>
    <div>
        <div><button class="btn btn-primary" name="submit">Submit</button></div><br>
        <div><a href="index.php"><button class="btn btn-danger" >Home</button></a></div>
    </div>
    </div>
    <?php }?>
    </center>
</form>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/swal.js"></script>
    <script type="text/javascript"></script>    
</body>
</html>