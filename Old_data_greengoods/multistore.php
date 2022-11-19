<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

//connect to database
require_once("dbcontroller.php");
//$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

</script>
</head>
<body>


<!--nav bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Multistores</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Products</a></li>
        <li><a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Orders</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li> -->
        <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>.Login</a></li>
      </ul>
      <!-- <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--end of nav bar-->

<div id="main" style="margin:5%">
    <div class="page-header1">
        
        <!-- <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
    </div>
    <p>
        <!-- <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
        <!-- <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a> -->
    </p>
</div>
<!-- Image comes from Database -->

<div id="product-grid" style="margin-top:0px;">
	<div class="txt-heading text-center"><h1> Multistores Brands</h1></div>
	
	<?php
	
	$sql ="SELECT * FROM tblproduct ORDER BY id ASC";
	$result = $connection->query($sql);
	
	
     if ($result->num_rows > 0) {
         
          // output data of each row
       while($product_array = $result->fetch_assoc()) {
    //   echo "id:" . $row['id']. "code". $row["code"]. " " . $row["image"];
 
      
	?>
		<div class="product-item ">
      
    <div class="col-md-3  col-sm-4 ">
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array["code"]; ?>">
			<div class="product-image" ><img src="<?php echo $product_array["image"]; ?>" style ="height:170px; padding:15px"></div>
			<div class="product-tile-footer">
			<div class="product-title" ><?php echo $product_array["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
      <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
      </div>
			</form>
		</div>
    
	<?php
		}
	}
	?>
</div>
//footerpage
<?php include'footer.php'; ?>
</body>
</html>