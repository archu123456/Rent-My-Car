<header>
<img src="logo.jpg" width="300px" height="150px">

<!-- Login Button -->
<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login/Registration</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="user.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
	  <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  <br>
	  <label><a href="#">Don't have account?SignIn..</a></label>
	  <br>
	  <label><a href="#" style="text-align:center;">Forgot Password?</a></label>
    </div>
  </form>
</div>
<!--/Login -->

<!--Navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="homepage.php">Home</a></li>
      <li><a href="homepage.php?option=bike">Car Listing</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</nav>
<div>
</header>