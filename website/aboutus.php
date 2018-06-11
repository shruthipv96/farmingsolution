<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
/* Add an active class to the active dropdown button */
.active {
    background-color: green;
    color: white;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: green;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
body {
	background : url(imgs/ran1.jpg);
	background-size: 100% ;
}

.show {
    display: block;
}
</style>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<script src=js/topbar.js></script>
</head>
<body>
<div class="navbar">
  <a href="homepage.php">Home</a>
  <a class="active" href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
    <a href="http://localhost/farmingsolutions/farmingsolutions.php">Farming</a>
    <a href="http://localhost/farmingsolutions/technology.php">Technology</a>
    <a href="http://localhost/farmingsolutions/valueadded.php">Value Added</a>
    </div>
  </div>
  	<a href="contact.php">Contact</a>
		<a href="index.php">Log Out</a>	
   </div>
	<div id="main-wrapper">
	<center><h2>About Us</h2>
		<p> The website provides real time sales in four different markets </p>
		<p> and the temperature, humidity values of the farmer's land.</p>
		<h2><p> Created By</p></h2>
		<p> Shruthip . V </p>
		<p> Akanksha Bansal </p>
		<p> Supriya KS</p>
	</center>
	</div>
</body>
</html>
