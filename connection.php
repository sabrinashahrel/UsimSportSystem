<?php
//connection information
$host = "localhost";
$user = "root";
$pwd = "";
$db = "web"; //nak connect dengan db nama dia web

// create a new database connection
$conn = new mysqli($host, $user, $pwd, $db); 
//ni yang boleh menyebabkan kita connect dengan db

// Check connection
//kalau ada connection error, kita akan echo kan
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>