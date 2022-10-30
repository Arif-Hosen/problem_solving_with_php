<!-- Write a code to find ‘minimum’ value from a list of n numbers, where 1 <= n <= 1000 and the numbers can be any integers.
For example, if n=5 and the list is: 1, 6, 8, 0, 999
The result should be: 0 -->

<?php
$numbers = [20,10,2,30,60,1,20];

function findMinimumValue ($numbersArray){
    $minimumValue = $numbersArray[0];

    for($i=1; $i<count($numbersArray); $i++){
        if($numbersArray[$i] < $minimumValue){
        $minimumValue = $numbersArray[$i];
    }
}

    return $minimumValue;
}

$result =  findMinimumValue($numbers);
echo "Minimum value is, ", $result;
?>