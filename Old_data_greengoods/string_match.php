<?php

$string1 = 'The dog and cat love each other';
$string2 = 'the dog pooped in the yard';
$arr1 = explode(" ",$string1 );
$arr2 = explode(" ",$string2 );
$result = array_intersect($arr1 , $arr2 ); //matched elements
$num = count($result); //number of matches


?>