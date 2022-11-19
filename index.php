<?php
// Initialize the session
session_start();
// Include config file
require_once "action/config.php";
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- external main  -->
    <link rel="stylesheet" href="styles/login.css" />
    <title>Login Page</title>
  </head>
  <body>
    <!-- header  -->
    <header>
        <div class="container-fluid header" style="background-color: #2170AC;">
        <div class="row p-5">
          <!--  -->
     <div class="col-md-6 d-flex index-log">
        <div class="img">
            <img src="images/Logo.jpeg" alt="logo" width="100" height="100" />
          </div>
          <div class="top-header p-4">
              <h3 class="text-light logo-text">Serac Education Pvt ltd</h3>
             
            </div>
     </div>
     <!--  -->
     <div class="col-md-6 text-end">
        <div class="company-detail">
           
          <img
            src="images/icon-blue.jpeg"
            alt="logo"
            width="85"
            height="85"
            style="border-radius: 60px;"
          />
        </div>
          <div class="top-header">
            <h3 class="text-light text-end">Ollato Online Test</h3>
          </div> 
        <!-- </div> -->
      </div>
    
        </div>
      
        </div>
        </div>
      </header>
   
    <!-- form  -->
    <div class="container form-container" style="margin-top: 85px;margin-bottom: 85px;" >
                <div class=" col-md-6 mb-1 mx-auto">
                        <div id="result" class="form-text text-danger fw-bold text-center"></div>
                      </div>
  
      <div class="form-title">
        <h1 class="text-center" style="color:#2170AC;">Student login</h1>

        <!-- form start -->
      
        <form  id="loginForm"  method="POST" onsubmit="Validate();return false"> 
          <div class=" col-md-4 mb-3 mx-auto">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="InputEmail1" aria-describedby="em  ailHelp" name="email">
            <div id="emailHelp" class="form-text text-danger fw-bold"><?php echo "$email_err" ; ?></div>
          </div>
          <div class="col-md-4 mb-3 mx-auto">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" autocomplete="off" name="password">
            <div id="emailpass" class="text-danger fw-bold"><?php echo "$password_err" ; ?> </div>
          </div>
          <div class="col-md-4 mb-3 mx-auto">
          <button type="submit" class="btn" style="background-color:#2170AC;color:#fff">Login</button>
           <p class="mt-2" style="color:#2170AC;"> <a href = "reset_pass.php" style="text-decoration: none;"> Forgot password  </a> </p> 
          <p class="mt-0" style="color:#2170AC;">Don't have an account yet? <a href="register.php" style="text-decoration: none;">Create an account </a></p>
          </div>
         
        </form>
      
        
      </div>
    </div>


    <!--  -->
   
    <!--  -->
    <!--Footer start -->
    <footer>
    <div class="container-fluid header" style="background-color: #2170AC;">
    <div class="row p-5">
      <!--  -->
 <div class="col-md-6">
   <div class="company-detail text-light footer-text">
     <ul  style="list-style:none">
       <li> <b>Serac Education Pvt. Ltd. </b></li>
       <li>618, Nirmal Corporate Centre,.</li>
       <li>LBS Road, Moti Nagar, Mulund West, Mumbai 400080.</li>
   </div>
 </div>
 <!--  -->
 <div class="col-md-6">
    <div class="company-detail text-light text-end mob footer-text">
      <ul style="list-style:none">
        <li>Phone No : 9967153285</li>
        <li>Email : info@seracedu.com</li>
        <li>Website : <a href="https://www.ollato.com/" target="_blank"> <span class="text-light"> Ollato.com </span></a></li>
    </div>
  </div>

    </div>
    
    <div class="row">

        <div class="col-12">
            <div class="company-detail text-light text-center mob">
              <ul style="list-style:none">
                <li>Copy right 	&#169; 2022: All Rights Reserved.</li>
              </ul>
                
            </div>
          </div> 
    </div>
  </div>

   
  </footer>
<script type="text/javascript">
 function Validate()
  {
      var email = document.getElementById("InputEmail1").value;
      var pass = document.getElementById("Password").value;
     if (email == "") 
      {
      // alert("Please fill email ");
      document.getElementById("emailHelp").innerHTML="** Please fill  email **";
      return false;
      }
      else if ( pass == ""){
        // alert("Please fill  password");
        document.getElementById("emailpass").innerHTML="** Please fill  password **";
        return false;
      }else{
            // AJAX Code To Submit Form.
              $.ajax({
                                    type: "POST",
                                    url: "action/login.php",
                                    // data:$("#loginForm").serialize(),
                                      data:{
                                              email:email,
                                              password:pass
                                              },
                                  
                                    success: function(response){
                                  
                                      if(response=="success")
                                        {
                                          $("#result").html("Please wait fetching your data.........").css({"font-size": "20px","color":"yellow",});
                                          setTimeout(() => {
                                            window.location.href="instruction.php";
                                          }, 5000);
                                          // window.location.href="instruction.php";
                                        } else{
                                         
                                            $("#result").html("Email And Password Incorrect !!").css({"font-size": "20px","color":"yellow",});
                                            $("#loginForm").trigger("reset");
                                            }
                                   
                                    }

                                    });

                           
}     // fun();
      function fun(){  
            document.getElementById('InputEmail1').value='';
            document.getElementById('Password').value='';
            document.getElementById("emailHelp").innerHTML="";
            document.getElementById("emailpass").innerHTML="";
          }   
   return true; 
}
</script>
 <!-- <script src="index.js"> -->
 </body>
</html>
