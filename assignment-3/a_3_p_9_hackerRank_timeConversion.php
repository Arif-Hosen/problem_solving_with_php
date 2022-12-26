<!-- https://www.hackerrank.com/challenges/time-conversion/problem -->
<!-- 
    Approach:
    1. Initialize a hash map
    2. Loop through 12 times to store 24 hour format
    3. Get the 24 hour format value from hashmap to using given string's index
    4. Concat hashmap given hour with minute, second of given string 12 hr format
    5. return concated 24 hour (military) format time
    * Time Complexity: O(1) , Space Complexity: O(n)
 -->
<?php
function timeConversion($s){
    $hashMap = [];

    for ($i=1; $i <=12 ; $i++) { 
        if($i <= 9){
            $hashMap['0'.$i.'A'] = '0'.$i;
            $hashMap['0'.$i.'P'] = 12 + $i;
        }
        elseif($i <= 11){
            $hashMap[$i.'A'] = $i;
            $hashMap[$i.'P'] = 12 + $i;
        }
        else{
            $hashMap[$i.'A'] = '00';
            $hashMap[$i.'P'] = $i;
        }
    }

    $getHour = $hashMap[$s[0].$s[1].$s[8]];
    $hour24 = $getHour.':'.$s[3].$s[4].':'.$s[6].$s[7];
    return $hour24;
}
$result = timeConversion('12:05:45AM');
echo "Time in 24 Hour - ",$result;
?>