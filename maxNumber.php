<?php

$number1 = 1;
$number2 = 22;
$number3 = 20;
$number4 = 25;
$number5 = 24;

if(($number1>$number2)&&($number1>$number3)&&($number4>$number2)&&($number1>$number5)){
    echo 'Maximum number is ', $number1;
  
}
 elseif(($number2>$number3)&&($number2>$number4)&&($number2>$number4)){
     echo 'Maximum number is ', $number2;
}
elseif(($number3>$number4)&&($number3>$number5)){
    echo 'Maximum number is ', $number3;
}
elseif(($number4>$number5)){
    echo 'Maximum number is ', $number4;
}
else{
    echo 'Maximum number is ', $number5;
}