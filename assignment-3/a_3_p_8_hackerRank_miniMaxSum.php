<!-- https://www.hackerrank.com/challenges/mini-max-sum/problem -->
<!-- 
    Approach:
    1. Intialize a hashmap and 3 integer variable for miminmum, maxium sum and counter.
    2. Loop through on given array of 5 integers and sum 4 integers in everytime. Then insert the every looping step sum in hashmap.
    3. Loop through on hashmap and find minimum and maximum value
    4. Print minimumSum and maximumSum
    
    -> Time Complexity: O(n^2) -> Space Complexity: O(n)
 -->

<?php
function miniMaxSum($arr){
    $hashMap = [];
    $counter = 0;

    // sum 4 interger everytime except one and insert in hashmap
    for($i = 0; $i < count($arr); $i++){
        $sum = 0;
        for($j = 0; $j < count($arr); $j++){
            if($i != $j){
                $sum += $arr[$j];
            }
        }
        $hashMap[$counter++] = $sum;
    }

    $minimumSum = $hashMap[0];
    $maximumSum = $hashMap[0];    
    // get minimum and maximum sum from hashmap and assigned in variables 
    foreach ($hashMap as $key => $value) {
        if($value < $minimumSum){
            $minimumSum = $value;
        }
        if($value > $maximumSum){
            $maximumSum = $value;
        }
    }
    echo $minimumSum, " ", $maximumSum;
}
miniMaxSum([7, 69, 2, 221, 8974]);
?>