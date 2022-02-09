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
	
?>
<html>
<head>
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
	background-color:f2edec;
	width:350px;
	height:400px;
	margin:0 auto;	
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src = "jquery.js"></script>
</head>
<body background="wallpaper.jpg">
<br><br>
<br><br>
<form action="admin.php" method="post">
<div align="center" >
<img src="admin.jpg" alt="admin" style="position:relative;top:-40px;border-radius: 50%;height:100px">
<h3>Login here</h3>
<table align="center" cellspacing="20px" cellpadding="10px">
<tr>
<td><input type="text" placeholder="Email Id" border="none" name="aemail" required /></td><br>
</tr>
<tr>
<td><input type="password" placeholder="Password" name="password" required /></td>
</tr>
<tr>
<td align="center">
<input type="submit" onclick="" name="login" value="Login"class="button"></button>
</td>
</tr>
</table>
<?php
if(isset($_POST['login']))
{
	$checkifemailnotnull = $_POST['aemail'];
	$checkifpasswrdnotnull = $_POST['password'];
	$sql=mysqli_query($conn,"Select * From admin Where Emailid='$checkifemailnotnull' and Password='$checkifpasswrdnotnull'");
	$r=mysqli_num_rows($sql);
	$result = mysqli_fetch_assoc($sql);
	if($r>0){
	header('location:http://localhost:8080/project/admin/dashboard.php');
	}
    else{
	echo "<br>"."wrong email id or password";
}
}
?>
</div>
</form>
</body>
</html>