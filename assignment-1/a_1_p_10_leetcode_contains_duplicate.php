<!-- https://leetcode.com/problems/contains-duplicate/ -->

<?php

function containsDuplicate($nums){
    $hashmap = [];
    foreach($nums as $index => $val){
        if(isset($hashmap[$val])){
            return $hashmap[$val] = true;
        }
        $hashmap[$val] = false;
    }
    return false;
}

$result = containsDuplicate([1,3,4,1]);
echo "Result = ", $result;

?>