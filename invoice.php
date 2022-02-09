<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($conn , 'carrental'))
{
	echo 'Database Not Selected';
}
$sql=mysqli_query($conn,"select * from booking order by id desc limit 1");
$row=mysqli_fetch_array($sql);
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "jquery.js"></script>		
</head>
<body>
<!--Header-->
<img src="image/picture2.png" style="margin-left:50px;margin-top:5px;"></img>
<!-- /Header --> 
<h1 align="center">Two Wheeler Rental System</h1>
<h2 align="center">Invoice</h2>
<div align="left">
<h4><p align="left">

Address:<br>
Rental System <br>
Vasai Road(E)<br>
</h4></p>
<p><h4>Name:<?php echo $row['Useremailid']?></h4></p>

<table border="1" align="left" width="50%">
<tr>
<td><h4>BookingId</h4></td>
<td><h4>Carid</h4></td>
<td><h4>From Date</h4></td>
<td><h4>To Date</h4></td>
</tr>
<tr>
<td><h4><?php echo $row['Id'];?></h4></td>
<td><h4><?php echo $row['carid'];?></h4></td>
<td><h4><?php echo $row['Fromdate'];?></h4></td>
<td><h4><?php echo $row['Todate'];?></h4></td>
</tr>
</table>
<br><br><br><br><br>
<h4><font style="color:red">Note:Please take the copy of this Invoice as Booking Recipt.</font></h4><br><br>
<h5 align="center"><a href="home.php">Back</a></h5>
</div>
</body>
</html>