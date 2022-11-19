<?php


$birthDate = "17-10-1997";

$currentDate = date("d-m-Y");

$age = date_diff(date_create($birthDate), date_create($currentDate));

echo "Current age is ".$age->format("%y");
// Current age is 22

?>