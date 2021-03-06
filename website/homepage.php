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
	background : url(imgs/ran3.jpg);
	background-size: 100% ;
}
</style>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<script src=js/topbar.js></script>
</head>
<body>
<div class="navbar">
  <a class="active" href="homepage.php">Home</a>
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
  	<a href="contact.php">Contact</a>
	<a href="index.php">Log Out</a>	
</div>
	<div id="main-wrapper">
		<center><h2>Home Page</h2>
		<h4>Welcome <?php echo $_SESSION['username']; ?></h4>
		<br><br>
		<p>Welcome to FARMING SOLUTIONS!</p></center>
		<center>
<a href="https://www.accuweather.com/en/in/bengaluru/204108/weather-forecast/204108" class="aw-widget-legal">
</a><div id="awcc1528723789426" class="aw-widget-current"  data-locationkey="204108" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1528723789426"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<h3>Click on the area to navigate to your region to know about the crops suitable and labours in that region</h3>

<img src="imgs/Bangalore.png" width="820" height="650" alt="Bangalore" usemap="#bangaloremap"></center>

<map name="bangaloremap">
  <area shape="rect" coords="0,0,400,200" alt="Hebbal" href="hebbal.php">
  <area shape="rect" coords="100,100,300,550" alt="Vrisha" href="vrisha.php">
  <area shape="rect" coords="350,310,600,600" alt="KCValley" href="kc.php">
</map>
	</div>
</body>
</html>