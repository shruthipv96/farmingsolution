<?php
	session_start();
/*For My LocalPC*/
			$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
			mysqli_select_db ($con,'farmingsolution');
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
<title>Farming services</title>
<link rel="stylesheet" href="css/style.css">
<script src=js/topbar.js></script>
</head>
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
		<center><h2>Labour Information</h2></center>
				<table border='1'>
					<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Skill</th>
					<th>Area</th>
					<th>Contact</th>
					<th>Status</th>
					<th>HiringFarmer</th>
					</tr>
					<form method="post" action="farmingsolutions.php">
		<?php
				function check_hire()
				{
					global $con;
					$result = mysqli_query($con,"SELECT * FROM laborinfo");
				
				while($row = mysqli_fetch_array($result))
				{
				$id=$row['id'];
				$laborstatus=$row['laborstatus'];
				$hiringfarmer=$row['hiringfarmer'];
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['laborname'] . "</td>";
				echo "<td>" . $row['laborskill'] . "</td>";
				echo "<td>" . $row['laborarea']."</td>";
				echo "<td>" . $row['laborcontact'] . "</td>";
				echo "<td>" . $row['laborstatus'] . "</td>";
				echo "<td>" . $row['hiringfarmer'] . "</td>";
				if(strcmp($row['laborstatus'],"Hired")==0)
				{
					echo "<td><button type='submit' class='back_btn' name='dismiss' value='$id'>Dismiss</button></td>";
				}
				else  
				{
					echo "<td><button type='submit' class='back_btn' name='hire' value='$id'>Hire</button></td>";

				}
				echo "</tr>";
				}				
				if(isset($_POST['hire']) && intval($_POST['hire']))
				{
					$laborid=(int)$_POST['hire'];
					$farmer=$_SESSION['username'];
					$query="UPDATE laborinfo SET laborstatus='Hired',hiringfarmer='$farmer' where id='$laborid'";
					if(mysqli_query($con,$query))
					{
						header( "Location: farmingsolutions.php");
					}
				}
				if(isset($_POST['dismiss']) && intval($_POST['dismiss']))
				{
					$far=$_SESSION['username'];
					global $con;
					$laborid=(int)$_POST['dismiss'];
					$query="SELECT hiringfarmer from laborinfo where id='$laborid'";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result))
					{ $farmer=$row['hiringfarmer'];
						if(strcmp($farmer,$far)==0)
						{
							$query="UPDATE laborinfo SET laborstatus='NotHired',hiringfarmer='' where id='$laborid'";
							
					if(mysqli_query($con,$query))
					{
						header( "Location: farmingsolutions.php");
					}
						}
					}
				}
				}
			check_hire();
?>
</form>
</table>
	</div>
</body>
</html>