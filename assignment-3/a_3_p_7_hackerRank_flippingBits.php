<!-- https://www.hackerrank.com/challenges/flipping-bits/problem -->

<!-- Approach -->
<!-- 
    1) Initialize hashmap , an array and 2 variable
    
    2) Convert the decemal to binary and insert the every bit to above initialized array

    3) Loop through for 32 times to store 32 bit in hashmap,
    and check, if the loop counter is smaller than bit assigned array, set the hashmap key as bitarray index and value is array's value
    else, key is loop counter and value is 0

    4) Loop through on hashmap, check if the value is 0 flip the the bit and convert decimal with binary to decemal formula
 -->
<?php
function flippingBits($n){
    $hashMap = [];
    $bitArray = [];
    $unsignedDecemalIntegerResult = 0;
    $i = 0;
    
    // convert unsigned decimal integer to binary
    while($n > 0){
        $reminder = $n % 2;
        $n = floor($n/2);
        $bitArray[$i++] = $reminder;
    }

    // assgin the 32 bit position and value
    for($i = 31; $i >= 0; $i--){
        if($i < count($bitArray)){
            $hashMap[$i] = $bitArray[$i];
        }
        else{
            $hashMap[$i] = 0;
        }
    }

    // traverse the hashmap, flipping the bit and convert the decemal
    foreach($hashMap as $key => $val){
        if($val == 0){
            $unsignedDecemalIntegerResult = $unsignedDecemalIntegerResult + (1 * pow(2,$key));
        }
    }

    return $unsignedDecemalIntegerResult;
}

$result =  flippingBits(2147483647);
echo "Result = ", $result;
?>