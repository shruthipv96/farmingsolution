<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec ="3";
$query = "SELECT * FROM sensordata";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ tracker:'".$row["tracker"]."', humidity:".$row["humidity"].",temperature:".$row["temperature"].",random:".$row["random"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta  http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>Sensor Data</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 </head>
 <body>
  <br /><br />
   <div class="container" style="width:1200px;">
   <h2 align="center">Farmer 1 soil moisture analysis</h2>  
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'tracker',
 ykeys:['humidity','temperature','random'],
 labels:['humidity','temperature','random'],	
 hideHover:'auto',
});
</script>