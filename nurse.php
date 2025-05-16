<?php
  session_start();
  include('inc\conf.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <a href="index.php">Home</a>
        <a href="about.php" class="nav-item">About Us</a>
        <a href="appo.php">Book Appointment</a>
        <a href="contact.php">Contact</a>
        <a href="signup.php">Sign Up</a>
        
    </div>
</nav>
    <center><h1>NURSE</h1></center>
    
    <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-table">
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th>WARD</th>
                        <th>GENDER</th>
                        <th>AGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
          
                        $ret="SELECT * FROM nurse ";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                        {
                    ?>
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $row->n_id;?></td>
                            <td><?php echo $row->name;?></td>
                            <td><?php echo $row->phone;?></td>
                            <td><?php echo $row->con_ward;?></td>
                            <td><?php echo $row->gender;?></td>
                            <td><?php echo $row->age;?></td>
                        </tr>
                    <?php $cnt = $cnt+1; }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>