<!-- https://leetcode.com/problems/roman-to-integer/ -->

<?php
// initialize a variable for sum integer value, a hashmap with roman numerial as key and value integer
function romanToInt($s){
    $hashMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    $int = 0;

    // loop through on given roman number. check if current(hashMap[string[i]]) is smaller than hashMap[string[i+1]] then subtract the current value from current+1 those are set in hashmap and add with integer. else add with integer
    for($i = 0; $i < strlen($s); $i++){
        if($i < (strlen($s)-1)){
            if($hashMap[$s[$i]] < $hashMap[$s[$i+1]]) {
                $int += $hashMap[$s[$i+1]] - $hashMap[$s[$i]];
                $i++;
            }
            else{
                $int += $hashMap[$s[$i]];
             }
        }
        else{
           $int += $hashMap[$s[$i]];
        }
    }

    return $int;
}

$result = romanToInt('MCMXCIV');
echo "Result = ", $result;
?>