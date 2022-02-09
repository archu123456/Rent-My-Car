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

if(isset($_POST['submit']))
{
$name = $_POST['uname'];
$email_id = $_POST['email'];
$mobile = $_POST['ucontact'];
$addharcard = $_POST['addhar'];
$age=$_POST['uage'];
$city=$_POST['ucity'];
$password = $_POST['password'];			
$sql2="INSERT INTO user (Name,Emailid ,Contact,Addhar,Age,City,Password ) VALUES ('$name','$email_id','$mobile','$addharcard','$age','$city','$password')";			

if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	
	echo("Error description: " . mysqli_error($conn));
	//echo "<script type='text/javascript'>alert(Error description: " . mysqli_error($conn))"</script>";
}
else
{
	//echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	//echo("Error description: " . mysqli_error($conn));
	$message = "Data Submitted Successfully !";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:http://localhost:8080/project/home.php');
}	
}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "jquery.js"></script>		

<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
body{
	background-repeat: no-repeat;
	background-size: cover;	
}
.button{
	background-color:#0040ff;
	color:white;
	border: none;
	cursor: pointer;
	padding: 10px 25px;
}
div{
	background-color:C8CBCE;
	width:650px;
	height:800px;
	margin:0 auto;
}
label{
	align:left;
}
</style>
</head>
<body>
<img src="image/picture2.png" style="margin-left:50px;margin-top:5px;"></img>
<!--Registration-->
  <form action="signin.php" method="post">
  <div align="center">
    <img src="image/admin.jpg" alt="admin" style="position:relative;top:-40px;border-radius: 50%;height:100px">
      <h2>SignIn</h2>
	  <table width="100%" align="center"  style="margin-left:100px">
	  <tr>
      <th><b>Name:</b></th>
      <th><input type="text" placeholder="Enter Name" name="uname" required></th>
	  </tr>
	  <tr>
      <th><b>EmailId:</b></th>
      <th><input type="email" placeholder="Enter EmailId" name="email" required></th>
      </tr>
	  <tr>
      <th><b>Contact No:</b></th>
      <th><input type="number" placeholder="Enter Contact No" name="ucontact" required></th>
	  </tr>
	  <tr>
      <th><b>Addhar Card No:</b></th>
      <th><input type="number" placeholder="Enter Addhar CardNo" name="addhar" required></th>
	  </tr>
	  <tr>
	  <th><b>Age:</b></th>
      <th><input type="number" placeholder="Enter Age" name="uage" required></th>
	  </tr>
	  <tr>
	  <th><b>City:</b></th>
      <th><input type="text" placeholder="Enter City" name="ucity" required></th>
	  </tr>
	  <tr>
	  <th><b>Password:</b></th>
      <th><input type="password" placeholder="Enter Password" id = "txtPassword" required></th>
	  </tr>
	  <tr>
	  <th><b>Confirm Password:</b></th>
      <th><input type="password" placeholder="Enter Confirm Password" name="password" id = "txtConfirmPassword" required></th>
	  </tr>
	  <tr>
      <th colspan="2"><button type="submit" onclick = "return Validate();" name="submit"  style="margin-left:35px">Submit</button></th><br>
	  </tr>
	  </table>
    </div>
  </form>
  <script>
  function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
  </script>
<!--/Registration-->
</body>
</html>
