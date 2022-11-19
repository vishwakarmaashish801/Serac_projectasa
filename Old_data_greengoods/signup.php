<?php
// Include config (Connection to database) file
require_once "dbcontroller.php";


// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      
    // $username = $_POST['username'];
    //  $pass = $_POST['password'];
    //  $confpass = $_POST['confirm_password'];
    
    // echo $username;
    //  echo $pass;
    //  echo $confpass;
 
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement (change)
        $sql = "SELECT * FROM user_signup WHERE username = ?";
       ///up to rigt getting data from input 
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // check working or not 
          // print_r($stmt); no of row presnt or not
        
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
              // $result =  mysqli_stmt_store_result($stmt);
               //echo  $result; its produce result 1
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
      
        // Prepare an insert statement
        $sql = "INSERT INTO user_signup(name,password) VALUES(?,?)";
 
         // doubthere 
        if($stmt = mysqli_prepare($connection, $sql)){
          
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            // $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
             $param_password = $password;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
            
                echo'<script language = "javascript">';
                     echo' alert("stmt executed");';
                echo'</script>';
                
                //header("location:login.php");
                
            } else{
                echo "Something went wrong. Please try again later.  redirect to login";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        
    }
    
    // Close connection
    mysqli_close($connection);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
 
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div id="main" style="margin:10%;"  class="row">

   <div class="col-md-6">
        <img src="https://i.pinimg.com/originals/1e/9f/fe/1e9ffeaea445d5d64a2c655c7ec28e29.jpg" width="500px" >
  </div>
    <div class="wrapper col-md-6 col-sm-12">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
            
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control"  value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control"    value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                
                <input type="reset" class="btn btn-default" value="Reset"> 
                <!--<a href="https://greengoods.000webhostapp.com/reset_password.php"> Forgot Password </a>-->
            </div>
            
               <p>Reset your password here?  <a href="https://greengoods.000webhostapp.com/reset_password.php">Reset Password </a></p> 
               <p>Already have an account?<a href="login.php">Login here</a></p> 
           
        </form>
    </div>
</div>    
</body>
</html>
