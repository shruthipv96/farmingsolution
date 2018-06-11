<?php
	session_start();
	require_once('dbconfig/configshops.php');
	//phpinfo();
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec ="3";
$query = "SELECT * FROM shop1";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Item:'".$row["Item"]."',  Quantity:".$row["Quantity"].",Price:".$row["Price"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta  http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>Market Information</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 </head>
 <body bgcolor=Gainsboro>
  <br /><br />
   <div class="container" style="width:1200px;">
   <h2 align="center">Reliance Fresh sales</h2>  
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Item',
 ykeys:['Quantity','Price'],
 labels:['Quantity(in Kg)','Price(in Rs.)'],
 hideHover:'auto',
 stacked:false
});
</script>