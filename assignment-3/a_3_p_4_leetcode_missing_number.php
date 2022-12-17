<!-- https://leetcode.com/problems/missing-number/ -->
<!-- follow up: TC:O(N), SC(1) -->

<?php
function missingNumber($nums){
    // approach-1: with hashmap
    // time complexity- O(n), space complexity - O(n)
    // $hashMap = [];
    // foreach($nums as $key){
    //     if(!isset($hashMap[$key])){
    //         $hashMap[$key] = true;
    //     }
    // }

    // for($i = 0; $i <= count($nums); $i++){
    //     if(!isset($hashMap[$i])){
    //         return $i;
    //     }
    // }

    // approach-2: with math equation
    // time complexity- O(n), space complexity - O(1)
    // calculate the sum of n th number is (n * (n+1)/2) which means sum = (array.size * (array.size+1)/2)
    // loop through on array and substract every element from sum, finally return remaining sum which missing numbers

    $sum = (count($nums) * (count($nums) +1)/2);
    for($i= 0; $i < count($nums); $i++){
        $sum -= $nums[$i];
    }
    return $sum;
}

$result = missingNumber([9,6,4,2,3,5,7,0,1]);
echo "Result = ", $result;
?>