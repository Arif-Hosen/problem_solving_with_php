<!-- https://leetcode.com/problems/happy-number/ -->

<?php
// note:  loops endlessly in a cycle - the sum will be return when the sum of the squres of its digit

// Approach:
// initialize a hashmap and a variable for sum
// until the sum is 1 the loop is going on
// convert the number to string and loop through on string, then add the digit n^2 + n^2 and assign in sum variable
// check if the sum is not exist on hashmap key , assign the sum in key
// if exits return false
// after completion while loop return true

function happyNumber($num){
    $hashMap = [];
    $sum = 0;
    if($num > 0){
        return "false";
    }

    while($sum != 1){
        $num = strval($num);
        $sum = 0;
        
        for($i = 0; $i < (strlen($num)); $i++){
                $sum =  $sum + intval($num[$i]) * intval($num[$i]);
        }
           
        if(!isset($hashMap[$sum])){
            $hashMap[$sum] = true;
        }
        else{
            return "false";
        }

        $num = $sum;
        
    }
    return "true";
    
}

$result = happyNumber(3);
echo "Result = ", $result;
?>