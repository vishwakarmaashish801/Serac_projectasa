<?php
// Initialize the session
session_start();
require_once("dbcontroller.php");

//$db_handle = new DBController();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   // header("location:index.php");
    exit;
}
echo 'welcome page';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multistores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }


       .profile ul{
        display:none;
       }

       .profile ul li {
        list-style: none;
       }
       .profile:hover ul {
        display: block;
       }
       /* .card{
        display:none;
       } */


    </style>
 <script>
var something = (function() {
    var executed = false;
    return function() {
        if (!executed) {
            window.open("https://crazygeeks.in/"); 
            executed = true;
            
        }
    };
})();
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
      <a class="navbar-brand" href="welcome.php">Multistores</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="products.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Products</a></li>
        <li class="profile"><a href="welcome.php"><span class="glyphicon glyphicon-user profile" aria-hidden="true"></span> Profile</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <li class="text-center"> <b> User Name : </b> <?php echo htmlspecialchars($_SESSION["username"]); ?>  </li>
      <li> <a href="reset-password.php" class="">Reset Password</a> </li>
      <li> <a href="logout.php" class="">Log Out </a> </li>
     </ul>
      </li>
        <li><a href="orders.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Orders</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li>
       
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--end of nav bar-->

<div id="main" style="margin:5%">
<!-- <div class="Card">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
</div> -->
<!-- Image comes from Database -->

<div id="product-grid" style="margin-top:10px;">
	<div class="txt-heading text-center"><h1>Multistores Brands</h1></div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item ">
      
    <div class="col-md-3  col-sm-4 ">
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>" style ="height:170px;"></div>
			<div class="product-tile-footer">
			<div class="product-title" ><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
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
<!-- end images come database -->
</div>
<?php include 'footer.php';?>
</body>
</html>
