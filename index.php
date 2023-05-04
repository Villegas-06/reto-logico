<?php

//Main Array; 

$mainArr = array(4,6,9,-3,5,8);

//Varibles to exctract.

$maxNumber = $mainArr[0];
$minNumber = $mainArr[0];

$addition = 0;

//Make the loop for search the max and min number.

foreach($mainArr as $numbers){
    
    if($numbers > $maxNumber){
        $maxNumber = $numbers;
    }   
    
    if($numbers < $minNumber){
        $minNumber = $numbers;
    }
}

$addition = ($maxNumber + $minNumber);

//Print the results.

echo 'Array: ' . $mainArr;

echo 'Max number: ' . $maxNumber;
echo 'Min number: ' . $minNumber;

echo 'The result addition with 2 numbers:' . $addition

?>