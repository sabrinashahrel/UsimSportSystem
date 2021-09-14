<?php
// connection to database
require_once('connection.php');


// if button submit is clicked. it will send a post data to actions.php(this file)
if (isset($_POST['btnSubmit'])) {
    
    // create new variable with filteration
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $matricid = mysqli_real_escape_string($conn, $_POST['matricid']);
    $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
    $bookingtime = mysqli_real_escape_string($conn, $_POST['bookingtime']);
    $courts = mysqli_real_escape_string($conn, $_POST['courts']);
    $equipment = mysqli_real_escape_string($conn, $_POST['equipment']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    // prepare a SQL query to run
    $insert = "INSERT INTO students (name, matricid, contactno, bookingtime, courts, equipment, quantity) 
    VALUES ('{$name}', '{$matricid}', '{$contactno}', '{$bookingtime}', '{$courts}', '{$equipment}', '{$quantity}')";

    if ($conn->query($insert) === TRUE) {
        header("Location: main.php");
        exit();
    }else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}

?>