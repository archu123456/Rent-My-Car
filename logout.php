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
// if(isset($_SESSION['lemail']))
// {
session_start();
unset($_SESSION['lemail']);
session_destroy(); // destroy session
$message = "Logout Successfully !";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:http://localhost:8080/project/home.php");
// }
 // else
 // {
	 // echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	// echo("Error description: " . mysqli_error($conn));
 // }
?>