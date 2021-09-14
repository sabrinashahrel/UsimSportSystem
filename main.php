<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username']))
{
header("location:index.php");
exit;
}
?>

<?php
// calling connection.php file
// this file is needed to enable getting records from the database
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>USIM Sport System: Booking Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
</head>

<style>
    body {
    margin: 0;  
    padding: 0; 
    color: white;
    font-family: Verdana;
    background-image:url(usimbg.jpg);  
    background-repeat: no-repeat; 
    background-position: center;
    }

    /* Add a black background color to the top navigation */
.navigation-bar {
    width: 100%;  /* i'm assuming full width */
    height: 80px; /* change it to desired width */
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
.container-md {
    width: 50%;
    height: 100%;
}

.card {
    background: rgba(0,0,0,0.6);
    border-radius: 5px;
    width: 100%;
    height: 103%;
}

.input-group-btn:last-child > .form-control { 
  margin-left: -1px;
  width: 100px;
  margin-top: 25px;
  border-radius: 0px 5px 5px 0px;
  height: 35px;
}

select#equipment.form-control {
    border-radius: 5px 0px 0px 5px; 
    height: 35px;
}

div.card-header {
    font-size: 20px;
    font-family: "Arial Black", Gadget, sans-serif;
}

div.form-group {
    margin-bottom: 25px;
}
</style>

<body>
<nav class="navigation-bar">
    <a href="index.php"><img class="logo" src="usimsportlogo.png">
    <a href="homepage.php">Home</a>
    <a href="main.php">Booking Form</a>
    <a href="view.php">Booking Details</a>
</nav>
<div class="container-md">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center bg-warning text-dark">BOOKING FORM</div>
                <div class="card-body">
                    <form action="actions.php" method="POST">

                        <div class="form-group">
                            <input class="form-control" type="text" name="name" style="background-color: white;" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="matricid" style="background-color: white;" placeholder="Matric/Staff ID">
                        </div>

                        <div class="form-group">
                        <input class= "form-control" type="text" name="contactno" style="background-color: white;" placeholder="Contact Number">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="datetime-local" name="bookingtime" style="background-color: white;" placeholder="Booking Date and Time">
                        </div>

                    <div class="form-group">
                            <label for="courts" style="color: grey;">Courts : </label>
                            <select class="form-control" name="courts" style="background-color: white;">
                                <option value="" selected disabled></option>
                                <option value="Badminton Court">Badminton Court</option>
                                <option value="Tennis Court">Tennis Court</option>
                                <option value="Basketball Court">Basketball Court</option>
                                <option value="Handball Court">Handball Court</option>
                                <option value="Netball Court">Netball Court</option>
                                <option value="Futsal Court">Futsal Court</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <label for="equipment" style="color: grey;">Equipment:</label>
                            <select class="form-control" id="equipment" name="equipment" style=" background-color: white;">
                                <option value="" selected disabled></option>
                                <option value="Basketball">Basketball</option>
                                <option value="Handball">Handball</option>
                                <option value="Netball">Netball</option>
                                <option value="Chessboard">Chessboard</option>
                                <option value="Racket">Racket</option>
                                <option value="None">None</option>
                            </select>
                            <div class="input-group-btn">
                                <input class="form-control" type="number" min="0" max="5" name="quantity" placeholder="Quantity" style="background-color: white;" >
                            </div>
                        </div>
                    </div>
                        <button class="btn btn-success btn-block text-white" type="submit" name="btnSubmit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>