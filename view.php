<?php
// calling connection.php file
// this file is needed to enable getting records from the database
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>USIM SPORT SYSTEM: Booking Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
function change()
{
    document.getElementById("myButton1").value="Returned"; 
}
</script>

<script>
function SomeDeleteRowFunction(btndel) {
    if (typeof(btndel) == "object") {
        $(btndel).closest("tr").remove();
    } else {
        return false;
    }
}
</script>

<style>
   body {
    margin: 0;  
    padding: 0; 
    color: black;
    font-family: Verdana;
    background-image:url(usimbg.jpg); 
    height: 100%;
    background-repeat: no-repeat; 
    background-position: center;
    }


    /* Add a black background color to the top navigation */
.navigation-bar {
    width: 50%;  /* i'm assuming full width */
    height: 50px; /* change it to desired width */
    background-color: ; /* change to desired color */
    
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 70px;
    height: 70px;
    margin-left: 20px;
    margin-top: 15px;    /* if you want it vertically middle of the navbar. */
}
.navigation-bar > a {
    display: inline-block;
    vertical-align: top;
    margin-left: 20px;
    height: 80px;        /* if you want it to take the full height of the bar */
    line-height: 80px;    /* if you want it vertically middle of the navbar */
    color: white;
}

table, th, td, tr{
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: center;
}

th {
    background-color: rgb(0, 0, 0, 0.4);
    color: white; 
}

#t01 {
  width: 100%;
  background-color: #d9d9d9;
}

.card {
    background: none;
    border: none;
}

.container-md {
    width: 95%;
}

header {
font-family: "Arial Black", Gadget, sans-serif;
font-size: 20px;
padding: 10px;
color: white;
text-align: center;
margin-top: 20px;
}
</style>

<body>
<nav class="navigation-bar">
    <a href="index.php"><img class="logo" src="usimsportlogo.png" alt="logout">
    <a href="homepage.php">Home</a>
    <a href="main.php">Booking Form</a>
    <a href="view.php">Booking Details</a>
</nav>
</body>


<body>
<header>
 <h1>
BOOKING DETAILS
</h1>
</header>
<div class="container-md">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover table-condensed">
                    <table id="t01">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th> Id</th>
                                <th>Contact No.</th>
                                <th>Booking Time</th>
                                <th>Courts</th>
                                <th>Equipment</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $getStudents = "SELECT * FROM students";
                            $result = $conn->query($getStudents);

                            if ($result->num_rows > 0) {
                                //print maklumat
                                while ($row = $result->fetch_assoc()) {
                    
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['matricid'] ?></td>
                                    <td><?= $row['contactno'] ?></td>
                                    <td><?= $row['bookingtime'] ?></td>
                                    <td><?= $row['courts'] ?></td>
                                    <td><?= $row['equipment'] ?></td>
                                    <td><?= $row['quantity'] ?></td>
                                    <td><input onclick="this.value='Returned'" type="button" value="Return" id="myButton1" /></td>
                                    <td><input type="button" value="Delete" onclick="SomeDeleteRowFunction(this);"></td>
                                </tr>
                            <?php
                                $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>