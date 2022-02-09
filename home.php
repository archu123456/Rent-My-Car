<html>
<html>
<head>
<style>
.banner-section {
  background-image: url("image/R.jpg");
  color:white;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 160px 0;
  position: relative;
}
.banner-section::after {
  background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 7px;
  left: 0;
  position: absolute;
  right: 0;
  width: 100%;
}
.name{
	position: left;
  top: 15%;
  margin-left:600px;
  font-size:70px;
}
</style>
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


<script type="text/javascript">
$(document).ready(function(){
	$('.nav navbar-nav a').filter(function(){
		return this.href == location.href.replace(/#.*/,"");
	}).addClass('active');
	
	//$('.nav navbar-nav a').siblings.removeClass('active');
	
})

    
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
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



<!--banner-->
<section id="banner" class="banner-section">
<div class="name">Find The Right Car For You..</div>
</section>
<div class="pics" style="margin-bottom:50px;">
<h1 align="center">Our Brands</h1>
<table cellspacing="10" cellpadding="10" align="center">
<tr>
<td  ><img src="image/brand1.jpg"></td>
<td><img src="image/BMW(1).jpg"></td>
<td ><img src="image/Toyota (1).jpg"></td>
</tr>
<tr>
<td ><img src="image/brand4.jpg"></td>
<td ><img src="image/Ford(1).jpg"></td>
<td ></td>
</tr>
</table>
</div>
<footer style="height:80px;background-color:rgb(60, 65, 68);">
  <p style="padding-top:20px;text-align:center;color:white;">@copyright, Archana</p>
  <p style="text-align:center;"><a href="mailto:archana@example.com">archana@example.com</a></p>
</footer>

</body>
</html>