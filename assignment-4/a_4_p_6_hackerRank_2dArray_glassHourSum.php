<!-- https://www.hackerrank.com/challenges/2d-array/problem?isFullScreen=true -->

<!-- 
    approach:
    1. Initialize a hashmap , sum variable, max variable
    2. Nested Loop through (m-2)* (n-2) times to traverse glass Hour
    and sum in pattern of glass hour ($arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2])
    4. store the sum in hashmap
    5. compare hashmap value and return max value
-->
<?php
function hourGlassSum($arr){
    $hashMap = [];
    $key = 0;
    for($i = 0; $i < count($arr)-2; $i++){
        for ($j=0; $j < count($arr[0])-2; $j++) { 
         $sum = 0;
         $sum = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
         $hashMap[$key++] = $sum;
        }
    }
    
    $max = $hashMap[0];
    foreach($hashMap as $key => $value){
        if($max < $value){
            $max = $value;
        }
    }
    return $max;
}
$result = hourGlassSum([[2, 1, 1, 0, 0, 0],[1, 1, 1, 0, 0, 0],[1, 1, 1, 0, 0, 0],[1, 1, 1, 0, 0, 0]]);
echo "Result = ", $result;
?>