<!-- https://leetcode.com/problems/missing-number/ -->
<!-- follow up: TC:O(N), SC(1) -->

<?php
function missingNumber($nums){
    // approach-1: with hashmap
    // time complexity- O(n), space complexity - O(n)
    $hashMap = [];
    foreach($nums as $key){
        if(!isset($hashMap[$key])){
            $hashMap[$key] = true;
        }
    }

    for($i = 0; $i <= count($nums); $i++){
        if(!isset($hashMap[$i])){
            return $i;
        }
    }
}

$result = missingNumber([9,6,4,2,3,5,7,0,1]);
echo "Result = ", $result;
?>