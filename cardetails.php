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
session_start();
if(isset($_GET['vid']))
{
$vhid=$_GET['vid'];
}
if(isset($_POST['submit']))
{
// $id=$_POST['vid'];
$id=$_SESSION['vid'];
$date1=$_POST['fromdate'];
$date2=$_POST['todate'];
$useremail=$_SESSION['lemail'];

$sql2="INSERT INTO booking( carid,Useremailid ,Fromdate, Todate) VALUES ('$id','$useremail','$date1','$date2')";
if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	echo("Error description: " . mysqli_error($conn));
}
else
{
$message = "Booking Done Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:http://localhost:8080/project/invoice.php");
}
}
?>
<html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "jquery.js"></script>		

<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<!--Header-->
<img src="image/picture2.png" style="margin-left:50px;margin-top:5px;"></img>
<!-- /Header --> 

<h3 align="center" style="font-size:30px;">Booking Car</h3>
<div align="center">
<?php
if(isset($_GET['vid']))
{
$vid=$_GET['vid'];
// echo $vid;
$_SESSION['vid'] = $vid;
$id = $_SESSION['vid'];
// echo $id;
$sql=mysqli_query($conn,"select * from postcar where Id='$id' limit 1 ");
$result=mysqli_fetch_array($sql);
}
?>

<div><img src="admin/images/<?php echo $result['Image1'];?>" class="img-responsive"></div>
<table height="40%" width="35%">
<tr>
<th align="left">Title:</th>
<th align="left"><?php echo $result['Name'];?></th>
</tr>
<tr>
<th align="left">Brand:</th>
<th align="left"><?php echo $result['Brand'];?></th>
</tr>
<tr>
<th align="left">Overview:</th>
<th align="left"><?php echo $result['Overview'];?></th>
</tr>
<tr>
<th align="left">Rupess:</th>
<th align="left"><?php echo $result['Rupees'];?></th>
</tr>
<tr>
<th align="left">Modelyear:</th>
<th align="left"><?php echo $result['Modelyear'];?></th>
</tr>
</table>
<form method="post" action="cardetails.php">
<div align="center" >
<table height="40%" width="35%">
<tr>
<th>Enter From Date:</th>
<th><input type="text" name="fromdate" placeholder="(dd/mm/yyyy)" required></th>
</tr>
<tr>
<th>Enter To Date:</th>
<th><input type="text" name="todate" placeholder="(dd/mm/yyyy)" required></th>
</tr>
<tr>
<?php 
if(isset($_SESSION['login_user'])==0)
{
?>
<th><p style="color:red">First Login Your Account</p>&nbsp;&nbsp;&nbsp;<a href="home.php">Login</a></th>
<?php
}
else
{
?>
<th colspan="2" align="center"><button type="submit" name="submit" style="margin-left:20px">Book Now</button></th>
<?php
} ?>
</tr>
</table>
</div>
</form>
</div>
</body>
</html>