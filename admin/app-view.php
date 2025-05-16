<?php
session_start();
include('C:\xampp\htdocs\doctor\inc\conf.php');
include('C:\xampp\htdocs\doctor\inc\reschecklogin.php');
check_login();

// Handle search query
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    // Modify SQL query to include search filter
    $ret = "SELECT * FROM client WHERE c_name LIKE '%$search%' OR doc_name LIKE '%$search%' OR c_email LIKE '%$search%'";
} else {
    // Default query to fetch all clients
    $ret = "SELECT * FROM client";
}

if (isset($_POST['cancel'])) {
    $cl_id = $_POST['cl_id'];

    // SQL query to delete the client
    $sql = "DELETE FROM client WHERE cl_id = ?";

    // Prepare and bind
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $cl_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Client deleted successfully.";
        // Redirect to avoid resubmission on page refresh
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting client: " . $mysqli->error;
    }

    // Close the statement
    $stmt->close();
}

// Execute the query
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
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
        td a {
            padding: 6px 20px;
            border-radius: 20px;
            background-color: green;
            color: white;
        }
        .copyright {
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
    </div>
</nav>
<center><h1>APPOINTMENT</h1></center>

<!-- Search Form -->
<div class="container mt-4">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by Name, Doctor, or Email" name="search">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Table to display appointments -->
    <div class="card card-table">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th>DOCTOR</th>
                        <th>GENDER</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $cnt = 1;
                while ($row = $res->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row->cl_id; ?></td>
                        <td><?php echo $row->c_name; ?></td>
                        <td><?php echo $row->age; ?></td>
                        <td><?php echo $row->date; ?></td>
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->doc_name; ?></td>
                        <td><?php echo $row->gender; ?></td>
                        <td><?php echo $row->c_phone; ?></td>
                        <td><?php echo $row->c_email; ?></td>
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="cl_id" value="<?php echo $row->cl_id; ?>">
                                <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>
                            </form>
                        </td>
                    </tr>
                <?php $cnt = $cnt + 1; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
