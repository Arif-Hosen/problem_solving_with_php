<!-- Convert a positive decimal number to it’s binary representation.
For example, if the given decimal number is: 8
The result should be: 1000 -->

<!-- d,2313 = b,1001 0000 1001 -->
<?php 
$decimalNumber = 2313;

function decemalToBinaryConvertion($decimalNumber){
    $binaryNumberArray = [];
    $binaryNumber ='' ;

// decimal to binary conversation system
    while($decimalNumber != 0){
    $reminder = $decimalNumber%2;
    array_push($binaryNumberArray,$reminder);
    $decimalNumber = $decimalNumber/2;
    $decimalNumber = floor($decimalNumber);
    }

    for ($i=0; $i < count($binaryNumberArray); $i++) { 
    $binaryNumber = ($binaryNumber.strval($binaryNumberArray[$i]));
    }

    $binaryNumber = strrev($binaryNumber);

    return $binaryNumber = intval($binaryNumber);
}

$result = decemalToBinaryConvertion($decimalNumber);
echo 'Binary number = ', $result;
?>

