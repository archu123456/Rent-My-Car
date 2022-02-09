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
$queryy=mysqli_query($conn,"select Id,Name,Brand,Rupees,Modelyear,Image1 from postcar ");
$queryy1=mysqli_query($conn,"SELECT Brand from brand");
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
</head>
<body>
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
<h1 align="center">Car List</h1>
<?php
$i=1;
while($row=mysqli_fetch_array($queryy))
{
?>
<div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="admin/images/<?php echo $row['Image1'];?>" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><?php echo $row['Name'];?>(<?php echo $row['Brand'];?>)</h5>
            <p class="list-price">Price: <?php echo $row['Rupees']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Model:<?php echo $row['Modelyear']; ?>
			</p>
            <a href="cardetails.php?vid=<?php echo $row['Id'];?>" class="btn">Book Car <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
		<?php
echo "<br>";
echo"<hr>";
$i++;
}
?>
		</div>
	</div>
	<!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget" style="border:2px">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="searchcar.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brandname">
				<option>Select Brand</option>
				<?php
$i=1;
while($row=mysqli_fetch_array($queryy1))
{
?>
                  
				  <?php
echo "<option value='". $row['Brand'] ."'>" .$row['Brand'] ."</option>" ;
$i++;
}
?>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-block">Search Car</button>
              </div>
            </form>
          </div>
        </div>
      </aside>
      <!--/Side-Bar-->
</div>
</div>
</body>
</html>