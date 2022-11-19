<?php
// Initialize the session
session_start();
   header("Access-Control-Allow-Origin: *");
    require_once "config.php";
    // error_reporting(E_ERROR | E_PARSE);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
      $database_err = "";
    

      $fname  = $_POST['firstname'];
      $lname  = $_POST['lastname'];
      $dob    = $_POST['Date_of_Birth'];
      $gender = $_POST['Gender'];
      $phone = $_POST['phone'];
      $email  = $_POST['Email'];
      $fN     = $_POST['father_Name'];
      $mN     = $_POST['Mother_name'];
      $pass   = $_POST['Cpassword'];
      
    //   echo $fname;
    //   echo $lname ;
    //   echo $dob;
        
                    $query = mysqli_query($link,"SELECT * fROM user_lists  WHERE email = '$email' ");

                    if (mysqli_num_rows($query) >0 ) {
                      echo "Email ID already exits";  
                    } else {
                      
                     $sql = "insert into user_lists (id,firstname,lastname,date_of_Birth,gender,phone,email,fatherName,motherName,password) values('','$fname','$lname','$dob','$gender','$phone','$email','$fN','$mN','$pass')";
                        if(mysqli_query($link,$sql)) {
                        echo "Data is sucessfully Saved ";
                        

                         } else{
                        echo "Data Not  Inserted";
                        }
            
                }

   
              }
?>




                 