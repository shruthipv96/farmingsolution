<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.show {
    display: block;
}
body {
	background : url(imgs/contact.jpg);
	background-size: 100% ;
}
</style>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<script src=js/topbar.js></script>
</head>
<body>
<div class="navbar">
  <a href="homepage.php">Home</a>
  <a href="aboutus.php">About Us</a>
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
  	<a class="active" href="contact.php">Contact</a>
	<a href="index.php">Log Out</a>	
</div>
		<center><h1><b>Connect To Us</b></h1><br>
		<br><h2>ABC Farming Solutions Pvt. Ltd.</h2>
		<br><h2>B2, 4th Floor, ABC Tower</h2>
		<br><h2>Whitefield, Bangalore-560103, Karnataka</h2>
		<br>
		<br><h3>Call now: 9999888866</h3>
		<br>
		<br><h3>Email us on: aabbcc@gmail.com</h3>
		</center>
</body>
</html>