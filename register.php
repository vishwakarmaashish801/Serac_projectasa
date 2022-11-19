<?php
ob_start();
// Initialize the session
session_start();

// Include config file
require_once "action/config.php";
// variable initiates 

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
    <link rel="stylesheet" href="styles/register.css" />
    <title>Registration Page</title>
  </head>
  <body>
    <!-- header  -->
    <header>
        <div class="container-fluid header" style="background-color: #2170AC;">
        <div class="row p-5">
          <!--  -->
     <div class="col-md-6 d-flex index-log">
        <div class="img mob">
            <img src="images/Logo.jpeg" alt="logo" width="100" height="100" />
          </div>
          <div class="top-header p-4 logo-text">
              <h3 class="text-light">Serac Education Pvt ltd</h3>
              <!-- <h3 class="text-light" style="margin-right: 5px;">
                Online Examnation Test
              </h3> -->
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
   
    <!-- Registration form  -->
    <div class="container form-container" style="margin-top: 85px;margin-bottom: 85px;" >
     
      <div class="form-title">
        <h1 class="text-center" style="color:#2170AC;">Student Registration</h1>
      </div>                                                                   
      <!-- <div id="emailHelp" class="form-text text-center text-danger fw-bold fs-5">Ashish<?php echo $database; ?></div> -->
     
        <!-- form start -->
        <form  id="regForm" onsubmit="Registration();return false"> 


        <div class="container  mt-5">

          <div class="row form-container">
       <!--  -->
     
      <div class= col-md-4 p-2">
      <div class="">
          <label for="floatingInputValue" class="fw-bolder">First Name</label>
          <input type="text" class="form-control" id="firstname" placeholder="firstname" name="fname" >
          <span class="text-danger  error-f fw-bold" ></span>
         
      </div>
      </div>
      <!--  -->
      <div class= col-md-4 p-2">
          <div class="">
              <label for="floatingInputValue" class="fw-bolder">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="lastname" name="lname">
              <span class="text-danger error-l fw-bold"></span>
             
          </div>
          </div>
          
   <!-- first row end -->
      </div>

        <div class="row form-container mt-4 ">
            <!--  -->
            <div class= col-md-4 p-3">
                <div  class=" ">
                    <label for="floatingInputValue" class="fw-bolder">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" placeholder="dob" name="dob">
                    <span class="text-danger error-d fw-bold"></span>
                </div>
                </div>
           <!--  -->
           <div class="col-md-4">
               <div class="">
                  <label for="floatingInputValue" class="fw-bolder">Gender</label>
                   <select class="form-select" id="gender" aria-label="Default select example" name="gender">
                      <option selected>Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Transgender">Transgender</option>
                      <option value="Other">Other</option>
                    </select>
                    <span class="text-danger error-g fw-bold"></span>
                  </div>
               </div>
                <!--  -->
           
     <!-- second row end  -->
             </div>
             <!-- second row end  -->

             
             <div class="row form-container mt-4">
                <div class= col-md-4 p-2">
                    <div class="">
                        <label for="floatingInputValue" class="fw-bolder">Phone Number</label>
                        <input type="number" class="form-control" id="phone" placeholder="phone" name="phone" >
                        <span class="text-danger error-p fw-bold"></span>
                    </div>
                    </div>
               <!--  -->
               <div class= col-md-4 p-2">
                  <div class="">
                      <label for="floatingInputValue" class="fw-bolder">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="email@gmail.com" name="email">
                      <span class="text-danger error-e fw-bold"></span>
                     
                  </div>
                  </div>
           
                 <!-- third row  -->
                 <div class="row form-container mt-4">
                    <!--  -->
                   <div class="col-md-4 p-2">
                   <div class="">
                      <label for="floatingInputValue" class="fw-bolder">Father Name </label>
                       <input type="text" class="form-control" id="fathername" placeholder="father name" name="faname" >
                   </div>
                      <span class="text-danger error-fn fw-bold"></span>
                   </div>

                   <!--  -->
                   <div class="col-md-4 p-2">
                       <div class="">
                          <label for="floatingInputValue" class="fw-bolder">Mother Name</label>
                           <input type="text" class="form-control" id="mothername" placeholder="mother name" name="mname">
                           <span class="text-danger error-mn fw-bold"></span>
                       </div>
                       </div>
                      <!-- end row -->
                   </div>

                   <!-- forth  row  -->
                 <div class="row form-container mt-4">
                    <!--  -->
                   <div class="col-md-4 p-2">
                   <div class="">
                      <label for="floatingInputValue" class="fw-bolder">New Password</label>
                       <input type="password" class="form-control" id="newpass" placeholder="new passsword" name="npassword">
                       <span class="text-danger error-np fw-bold"></span>
                   </div>
                   </div>
                   <!--  -->
                   <div class="col-md-4 p-2">
                       <div class="">
                          <label for="floatingInputValue" class="fw-bolder">Confirm password</label>
                           <input type="password" class="form-control" id="confpass" placeholder="confirm password" name='password'>
                           <span class="text-danger error-cf fw-bold"></span>
                       </div>
                       </div>
                      <!-- end row -->
                      <!-- check box  -->
                      <div class="row form-container mt-4">
                      <div class=" col-md-8 form-check form-container">
                          <input class="form-check-input" type="checkbox" value="" id="checkbox">
                          <label class="form-check-label" for="flexCheckIndeterminate">
                              I agree with all Terms & Conditions
                          </label>
                          <span class="text-danger error-check"></span>
                        </div>
                        </div>
            
                      </div>

                     <!-- row button  -->
                          <div class="row form-container my-4">
                            <!-- justify-content-evenly -->
                               <div class="d-flex justify-content-center gap-2">
                                  <a href="https://www.ollato.com/ " style="text-decoration:none"><button type="button" class="btn btn-outline-primary ">Go To Home</button></a>
                                   <button type="Submit" class="btn btn-outline-primary" id="submit">Submit</button>
                                 </div>
                            
 
                    </div>

                    <div class="d-flex justify-content-center gap-2">
                    <div class="col-md-8">
 
                    <p id="result" class="text-center"></p>
                    </div>
                      </div>
                          <!-- redirect login -->
                          <div class="row form-container">
                              <div class=" col-md-12 text-center  form-check form-container">
                                  <p class="mt-0 ms-0" style="color:#2170AC;">Already have an account yet? <a href="index.php" >Login</a></p>
                                </div>
                               </div>
                               <!-- redirect home page  -->
                              
                 </div>
          <div></div>
                </form> 

               

        <!-- container end -->
        </div>

      </div>
    </div>

    
        <!--Footer start -->
    <footer>
    <div class="container-fluid header" style="background-color: #2170AC;">
    <div class="row p-5">
      <!--  -->
 <div class="col-md-6 p">
   <div class="company-detail text-light">
     <ul  style="list-style:none">
       <li> <b>Serac Education Pvt. Ltd. </b></li>
       <li>618, Nirmal Corporate Centre,.</li>
       <li>LBS Road, Moti Nagar, Mulund West, Mumbai 400080.</li>
   </div>
 </div>
 <!--  -->
 <div class="col-md-6">
    <div class="company-detail text-light text-end mob">
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
    </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    >
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- <script src="index.js"> -->
<script type="text/javascript">



  function Registration(){


    
        let fname  = document.getElementById("firstname").value;
        let lname  = document.getElementById("lastname").value;
        let dob = document.getElementById("dob").value;
        let phone  = document.getElementById("phone").value;
        let email  = document.getElementById("email").value;
        let fatherName  = document.getElementById("fathername").value;
        let motherName = document.getElementById("mothername").value;
        let npass  = document.getElementById("newpass").value;
        let cpass  = document.getElementById("confpass").value;
        let  js = document.querySelector('#checkbox');
     // firstname
      if(fname == "")
      {
      document.querySelector(".error-f").innerHTML="** Please filled FirstName **";
      return false;
        }else{
          document.querySelector(".error-f").innerHTML=" ";
        }

       // lastname
        if(lname == ""){
                     document.querySelector(".error-l").innerHTML="** Please filled Lastname **";
                 return false;
        }else{
          document.querySelector(".error-l").innerHTML=""; 
        }

        // date of Birth
        if(dob == ""){
         document.querySelector(".error-d").innerHTML="** Please filled Date of Birth **";
         return false;
        } else{
          document.querySelector(".error-d").style.display = "none";
        }

        //  gender 
       var gender = document.getElementById("gender");
       if(gender.selectedIndex == 0) {
          //  alert('select one answer');
           document.querySelector(".error-g").innerHTML="** Please select gender **";
            return false;
           }
        else {
             var selectedText = gender.options[gender.selectedIndex].value;
             
              document.querySelector(".error-g").style.display="none";
            }

          // phone 
             if(phone ==""){
                document.querySelector(".error-p").innerHTML="** Please filled Phone number **";
                 return false;
                 }else{
                  document.querySelector(".error-p").style.display="none";
              }

        // email address
             if(email == "") {
         document.querySelector(".error-e").innerHTML="** Please filled Email Address **";
           return false;
        }else{
          document.querySelector(".error-e").style.display="none";
        }

        // fathername
        if(fatherName == ""){ 
          document.querySelector(".error-fn").innerHTML="** Please filled Father Name **";
          return false;
        }else{
          document.querySelector(".error-fn").style.display="none";
        }

        // mothername
        if( motherName == "")  {
          document.querySelector(".error-mn").innerHTML="** Please filled MotherName **";
          return false;
        } else{
          document.querySelector(".error-mn").style.display="none"
        }

        // create password 
        if(npass == " ") {
        document.querySelector(".error-np").innerHTML="** Please filled New Password **";
        return false;
        }else{
          document.querySelector(".error-np").style.display="none";
        }

        // confirm password
          if(cpass == ""){
           document.querySelector(".error-cf").innerHTML="** Please filled Confirm Password **";
           return false;
        }else{
          document.querySelector(".error-cf").style.display="none";
        }

        if (npass === cpass) {
            // alert('Passwords match');
          }else {
            alert('Passwords do not match');
            return false;
          }

          if(js.checked){
              console.log(" First name" + fname);
              console.log("LastName" + lname);
              console.log("Date Of Birth " + dob);
              console.log("Gender" + selectedText);
              console.log("Phone" + phone);
              console.log("Email" + email);
              console.log("Fathe Name " + fatherName);
              console.log("Mother Name" + motherName);
              console.log("Password" + npass);
              console.log("Confirm Password" + cpass);
              
              console.log("checking  checkbox (true /false ) " + js.checked);
              console.log(js.checked);

             }else {
                alert("please checked the checkbox");
                // document.querySelector(".error-check").innerHTML="** Please checked thec  check-Box **";
                return false;
             }

                     // AJAX Code To Submit Form.
                      $.ajax({
                      type: "POST",
                      url: "action/register.php",
                      data:$("#regForm").serialize(),
                      // data:{
                      //                  firstname:fname,
                      //                   lastname:lname,
                      //                   dob:dob,
                      //                   gender:selectedText;
                      //                   phone:phone,
                      //                   email:email,
                      //                   fatherName:fatherName,
                      //                   mothername:motherName,
                      //                   password:cpass
                      //                   },
                      cache: false,
                      success: function(response){
                                             $("#result").html(response).css({"font-size": "20px","border":"1px solid black","color":"black","Padding":"0px 45px"});
                                             $("#regForm").trigger("reset");  
                                          }
                                              });
                        
                 }  //closed registration ()

             

  
 





</script>
<script src="js/jquery-3.2.1.min.js"></script>



      
   
  </body>
</html>
