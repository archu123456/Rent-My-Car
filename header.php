
<header>
<img src="image/picture2.png" style="margin-left:50px;margin-top:5px;"></img>
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
if(isset($_POST['submit']))
{
	 $user = $_POST['lemail'];
	 $pass = $_POST['lpsw'];
	 $sql=mysqli_query($conn,"Select Emailid,Password From user Where Emailid='$user' and Password='$pass'");
	 /*$r=mysqli_num_rows($sql);
	 $result = mysqli_fetch_assoc($sql);		
			if($_SESSION['lemail']=$user && $_SESSION['lpsw']=$pass){
			  //echo $_SESSION['lemail'];
			  header('location:home.php');
      }*/
    
    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    $count = mysqli_num_rows($sql);
    if($count == 1) {
      $_SESSION['login_user'] = $user;
      
      header("location: home.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>
<!-- Login Button -->
<?php   
if(isset($_SESSION['login_user'])==0)
	{	
?>
<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:200px;height:60px;margin-right:100px;margin-top:13px;font-weight:550;">Login</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="home.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/user.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="email"><b>EmailId:</b></label>
      <input type="text" placeholder="Enter EmailId" name="lemail" required>
	  <br>
      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="lpsw" required>
        
      <button type="submit" name="submit">Login</button><br>
	  <br>
	  <label align="center"><a href="signin.php" style="text-align:center;">Don't have account?</a></label>
    </div>
  </form>
</div>
<!--/Login -->
<?php }
else{ ?>
<button  class="button" style="width:200px;height:60px;margin-right:100px;margin-top:13px;font-weight:550;"><a href="logout.php" style="color:white;">Logout</a></button>
<?php 
 } ?>



<!--Navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="homepage.php?option=car">Car Listing</a></li>
      <li><a href="homepage.php?option=contact">About Us</a></li>
    </ul>
	<?php   
if(isset($_SESSION['login_user'])==0)
	{	
?>
<label></label>
<?php }
else{ ?>
<label style="float:right;color:white"><?php echo $_SESSION['login_user'];?></label>
<?php
 } ?>
  </div>
</nav>
<div>
</header>