<!-- https://leetcode.com/problems/majority-element/ -->

<?php 
function majorityElement($nums){
    $hashMap = [];
    $max = 0;
    $majorityElement = 0;

    // approach-1
    // Loop through on array , set hashmap's key as array's value and value is 1
    // if hashmap key is exist, then keys's value++
    // loop through on hashmap and max value with hashmap key's value, if max is smaller than value assign value in max variable and key in majorityelelment variable
    // finally return majority element variable
    foreach($nums as $key => $val){
        if(isset($hashMap[$val])){
            $hashMap[$val] ++;
                
        }
        else{
            $hashMap[$val] = 1;
        }
    }
    foreach($hashMap as $key => $val){
        if($max < $val){
            $max = $val;
            $majorityElement = $key;
        }
    }
    return $majorityElement;

    // approach 2- less memory
    // if array's length is 1 then return element 
    // Loop through on array , set hashmap's key as array's value and value is 1
    // if hashmap key is exist, then keys's value++. and hashmap' key's value > array/2
    // return key
    // else set 1 value in hashmap and key is element

    // if(count($nums) == 1){
    //     return $nums[0];
    
    // }
    // foreach($nums as $key => $val){
    //     if(isset($hashMap[$val])){
    //         $hashMap[$val] ++;
    //         if($hashMap[$val]> count($nums)/2){
    //             return $val;
    //         }
    //     }
    //     else{
    //         $hashMap[$val] = 1;
    //     }
    // }

}

$result = majorityElement([2,3,1,2,3,2,2]);
echo "Result = ", $result;
?>