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
	<style>
		table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
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
	<center>
	<div id="main-wrapper">
		<center><h2>Crop Information</h2></center>
				<table border='1'>
					<tr>
					<th>Crops available in this area</th>
					</tr>
		<?php
				global $con;
				$result = mysqli_query($con,"SELECT * FROM regioncropinfo WHERE region='KCValley'");
				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['cropname'] . "</td>";
				}
				echo "</tr>";
		?>
		</table>
		<center><h2>Labour Information</h2></center>
		<?php
				global $con;
				$query="SELECT * FROM laborinfo WHERE laborarea='KCValley'";
				$result = mysqli_query($con,$query);
		        if(mysqli_num_rows($result)>0)
				{
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>Name</th>";
					echo "<th>Experienced In</th>";
					echo "<th>Area</th>";
					echo "<th>Contact</th>";
					echo "<th>Status</th>";
				    echo "</tr>";
				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['laborname'] . "</td>";
				echo "<td>" . $row['laborskill'] . "</td>";
				echo "<td>" . $row['laborarea']."</td>";
				echo "<td>" . $row['laborcontact'] . "</td>";
				echo "<td>" . $row['laborstatus'] . "</td>";
				}
				echo "</tr>";
				}
			    else
				{
					echo "<br><p> No Labours available in this area</p>";
				}
		?>
		</table>
		</div>
		</center>
</body>
</html>