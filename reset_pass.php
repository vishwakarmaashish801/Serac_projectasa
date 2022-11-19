<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
// if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
//     header("location:index.php");
//     exit;
// }
 
// Include config file
require_once "action/config.php";
?>
 

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
 <script>
var something = (function() {
    var executed = false;
    return function() {
        if (!executed) {
            window.open("http://gestyy.com/eyk8aI"); 
            executed = true;
            
        }
    };
})();
</script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

             <div class="form-group">
                <label>Email</label>
                <input type="Email" name="email" class="form-control">
                <span class="help-block"><?php echo $email_err; ?></span>
                <span class="help-block"><?php echo $_SESSION['email'];?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"/>
                <a class="btn btn-link" href="index.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>
