<?php

session_start();
require_once "config.php";


 $email =$_POST['email'];
 $pass = $_POST['password'];

// $email ="seeta@gmail.com";
// $pass = "seeta";
// Ashish@121      $sql = "SELECT * FROM user_lists ;

$sql = "SELECT * FROM user_lists where email='$email'AND password='$pass'";

        $result = mysqli_query($link,$sql); 
      

        if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $pass) {
                       $_SESSION['gender'] = $row['gender'];
                       $_SESSION['firstname'] = $row['firstname'];
                       $_SESSION['id'] = $row['id'];
                       echo"success";


            }else{
                echo"failled";
            }


       
        }


           
      ?>