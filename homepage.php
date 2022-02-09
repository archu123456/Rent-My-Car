<!DOCTYPE html>
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
<?php include('header.php');?>
<!-- /Header --> 

<!--banner-->


<script>
$(document).ready(function(){
	$('.nav navbar-nav a').filter(function(){
		return this.href == location.href.replace(/#.*/,"");
	}).addClass('active');
	
	//$('.nav navbar-nav a').siblings.removeClass('active');
	
})
</script>

 


  <?php
@$opt = $_GET['option'];

	
	
	if($opt == "car")
	{
	include('carlist.php');
	}
	if($opt == "contact")
	{
	include('contact.php');
	}
?>

</body>
</html>
