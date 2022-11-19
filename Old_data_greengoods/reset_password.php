<?php
require_once('dbcontroller.php');
// require('config.php');
//require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $sql = "SELECT * FROM `users` WHERE email = '$email'";
  $res = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($res);
  if($count == 1){
    $r = mysqli_fetch_assoc($res);
    $password = $r['password'];
     $to = $r['email'];
    //$to = "vishwakarmaashish801@gmail.com";
    $subject = "Your Recovery  Password";
    $message = "Please use this password to login your account ".$password;
    $header = "From:Greengoods";
    
    if(mail($to, $subject,$message,$header)){
        echo '<script language="javascript">';
        echo 'alert("Your Password has been sent to your email id");';
        echo'window.location = "https://greengoods.000webhostapp.com/login.php";';
        echo'</script>';
      
    }else{
      echo "Failed to Recover your password, try again";
    }

  }else{
     //echo "Required or Email does not exist in database";
     echo '<script language="javascript">';
     echo 'alert("Required or Email does not exist in our database");';
     echo'</script>';
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password in PHP & MySQL</title>
  <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
   <style>
   .image{
       margin: 51px 43% 0px;
       }
    </style>
   
</head>
<body>
    
    <div class="container">
        <div class="image">  
        <img src="https://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/03/16/VpSrwGLX9OChNxj7qKY16tFP/reset_password/images/icon_lock.gif">
     </div>
    <h1 class="text-center">Reset Password </h1>
<div class="container">
   
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
   
        <form id="register-form" role="form" autocomplete="off" class="form" method="post">    
      <div class="row">
      <div class="form-group d-grid gap-2 col-6 mx-auto">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
        <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
        
      </div>
      </div>
      </div>
      
      <div class="d-grid gap-2 col-6 mx-auto">
      <div class="form-group col-md-auto">
          <br>
      <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
      </div>
      </div>
      
      <input type="hidden" class="hide" name="token" id="token" value=""> 
    </form>
</div>
</div>

</body>
</html>





