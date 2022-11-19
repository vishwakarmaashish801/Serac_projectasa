<?php
// the message
$to = "vishwakarmaashish801@gmail.com";
$subject = "This is testing email "; 
$message =  "hellow I am Donewidth with our code !!";
$from = "rashids5776@gmail.com";

if(mail($to,$subject,$message)){
    echo"send mail"; 
}else{
    echo"not send mail";

}

?>