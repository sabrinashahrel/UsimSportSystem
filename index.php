
<title>USIM SPORT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('ussadmin' => '123456','username1' => 'password1','username2' => 'password2');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:homepage.php");
exit;
} 
else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;  
  background-image:url(usimbg.jpg);  
  background-position: center;

}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  display: inline-block;
  border: 0px solid;
  background-color: white;
  border-radius: 50px;
  margin-top: 50px;
}

input[type=password] {
  width: 100%;
  padding: 10px 20px;
  display: inline-block;
  border: 0px solid;
  background-color: white;
  border-radius: 50px;
  margin-top: 20px;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  border-radius: 50px;
  margin-top: 30px;
}

.container {
  font-family: Helvetica;
  width: 30%;  
  min-height: 80vh;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 1;
}

.container img {
  position: center;
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 30%;
  margin-top: 70px;
}

input.input {
    image:url(usimbg.jpg);
}

</style>

</head>
<body>
<form action="" method="post">
  <title>Admin</title>
    <div class="container">
        <img src="usimsportlogo.png" alt="USS Logo" class="avatar">
            <input type="text" placeholder="Enter Username" name="Username" class="Input" required>
            <input type="password" placeholder="Enter Password" name="Password" class="Input" required>
            <input type="submit" value="Login" name="Submit" class="Button3" />

      <?php if(isset($msg)){?>
        <tr>
          <td colspan="10" align="center"><?php echo $msg;?></td>
        </tr>
      <?php }?>

    </div>
</form>
</body>