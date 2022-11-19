<?php
$connection = mysqli_connect('localhost', 'id18412141_ashish','_BDhEmT$y1IzK24(');
if (!$connection){
    echo "Connection Failled";
    die("Database Connection Failed" . mysqli_error($connection));
  
}

$select_db = mysqli_select_db($connection,'id18412141_greengoods');
if(!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));

}