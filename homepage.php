<!DOCTYPE html>
<html>
<head>
<title>USIM Sport System: Home</title>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
    margin: 0px;  
    padding: 0; 
    font-family: verdana;
    background-image:url(usim.jpg);
    background-repeat: no-repeat;  
    background-position: center;
}

h1{
 text-align: center;
 margin-left: 15px;
 font-family: "Arial Black", Gadget, sans-serif;
}

header {
font-family: Impact, Charcoal, sans-serif;
font-size: 20px;
padding: 10px;
color: white;
}

    /* Add a black background color to the top navigation */
.navigation-bar {
    width: 100%;  /* i'm assuming full width */
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
    font-family: verdana;
    font-size: 15px;
}

.slidershow{
  width: 600px;
  height: 400px;
  overflow: hidden;
}
.middle{
  position: absolute;
  top: 58%;
  left: 48%;
  transform: translate(-50%,-50%);
}
.navigation{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 50px;
  height: 10px;
  border: 2px solid #fff;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: #fff;
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 80%;
  height: 100%;
  margin-left: 70px;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
}
#r6:checked ~ .s1{
  margin-left: -80%;
}

img#img1 {
    height: 90%;
    border-radius: 5px 5px 0px 0px;
}

div#card1.card {
  background: rgba(0, 0, 0, 0.8);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-right: 50px;
  margin-top: -25px;
}

.title {
  color: grey;
  font-size: 18px;
}

button#btn1 {
  border: none;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #6666ff;
  text-align: center;
  width: 100%;
  font-size: 18px;
  border-radius: 0px 0px 5px 5px;
  margin-left: -5px;
}

i {
  text-decoration: none;
  width: 10px;
  color: grey;
  display: inline-block;
  height: 10px;
}

button:hover, a:hover {
  opacity: 0.7;
}

li {
    font-size:12px;
    text-align: left;
    color: grey;
}

h3 {
  color: white;
}

h4 {
  text-align: left;
}

marquee {
  width: 32%;
  margin-left: -3%;
}

marquee.marquee_code {
  height:350px;
  width:250px;
  font-family: Verdana;
  color: black;
  margin-left: 18px;
}

p {
  margin-left: 5px;
  text-align: left;
  font-size: 12px;
  width: 300px;
}

div#card2.card {
    margin-left: 50px;
    margin-top: -450px;
    max-width: 280px;
    background: url(bgvector.jpg);
    border-radius: 5px;
}

button#btn2 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: black;
  text-align: center;
  width: 100%;
  font-size: 18px;
  border-radius: 5px 5px 0px 0px;
}

span.a {
  display: inline-block; /* the default for span */
  width: 50px;
  height: 50px;
  padding: 5px;
}

img.thumbnail { 
	width: 50px;
	height: 50px;
  background-color:;
	}

</style>
</head>

<body>

<!-- command for navigation bar -->
<nav class="navigation-bar">
    <a href="index.php"><img class="logo" src="usimsportlogo.png">
    <a href="homepage.php">Home</a>
    <a href="main.php">Booking Form</a>
    <a href="view.php">Booking Details</a>
</nav>

<header>
 <h1>
 <marquee behavior="scroll" direction="left" scrollamount="10">WELCOME TO USIM SPORT SYSTEM</marquee>
</h1>
</header>

<body>
    <div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked="">
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="tennis.jpg" alt="">
        </div>
        <div class="slide">
          <img src="badminton.jpg" alt="">
        </div>
        <div class="slide">
          <img src="netballcourt.jpg" alt="">
        </div>
        <div class="slide">
          <img src="chessboard.jpg" alt="">
        </div>
        <div class="slide">
          <img src="netball.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>

    <div class="card" id="card1">
      <!-- Contact info section -->
        <img src="pavi.jpg" alt="John" style="width:100%" id="img1">
        <h3>Technical Support</h3>
        <ul>
        <li>Cleaning Services: 012-3456789</li>
        <li>Supplier: 019-87654321</li>
        </ul>
        <h3>Emergency</h3>
        <ul>
        <li>Klinik Pakar Kesihatan USIM: 06-8504921</li>
        <li>Balai Bomba&Penyelamat Nilai: 06-7940052</li>
        <li>Balai Polis Nilai: 06-7991222</li>
        </ul>
    <p><button id="btn1">Contact</button></p>
    </div>

    <div class="card" id="card2">
    <button id="btn2">Upcoming Events</button>
      <marquee class="marquee_code" direction="up" behavior="scroll" scrollamount="3" >
      <h4>February 20, 2020</h4>
      <p>SUFA Tournament 2020</p>
      <h4>March 7, 2020</h4>
      <p>Football and Netball Tournament 2020</p>
      <h4>April 22, 2020</h4>
      <p>Inter-Faculty Championship 2020</p>
      <h4>May 14, 2020</h4>
      <p>USIM Staff Sports Tournament 2020</p>
      <h4>June 5, 2020</h4> 
      <p>Fit USIM 2020</p>
      <h4>July 22, 2020</h4>
      <p>USIM Sports Award 2020</p>
      </marquee>
      <span class="a"><img src="bad.png" class="thumbnail"></span>
      <span class="a"><img src="run.png" class="thumbnail"></span>
      <span class="a"><img src="basketball.png" class="thumbnail"></span>
      <span class="a"><img src="football.png" class="thumbnail"></span>
    </div>
</body>
</body>
</html>