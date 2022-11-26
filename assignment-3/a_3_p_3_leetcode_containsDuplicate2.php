<!-- https://leetcode.com/problems/contains-duplicate-ii/ -->

<!-- mentorship slot booking -->
<!-- https://adplist.org/mentors/ahmed-shamim -->
<?php
function containsNearByDuplicate($nums,$k){
    $hashMap = [];

    // ** approach-2: 
    // Loop through on given array,
    // check if the array's element is exist or not in hashmap, 
    //  if exists, check array's current index( i - hashmap[arrary[i]] <= k) if satify, return true
    // else, assgin the array's element in hashMap key and value is array's index,
    // after completing array traverse, return false, because above condition doesnot satisfy, didn't return true.


    foreach($nums as $key => $val){
        if(isset($hashMap[$val])){
            if(abs($key - $hashMap[$val]) <= $k){
                return "true";
            }
        }
        $hashMap[$val] = $key;
    }
    return "false";

    // ** approach-1: trying but not solved for all cases.
    // for($i = 0, $j = (count($nums)-1); $i <= $j; $i++, $j--){
    //     if($i == $j){
    //         if(isset($hashMap[$nums[$i]]) && (count($hashMap[$nums[$i]])) < 2){
    //             $hashMap[$nums[$i]][count($hashMap[$nums[$i]])] = $i;
    //         }
    //         else{
    //             $hashMap[$nums[$i]] = [$i];
    //         }
    //     }
    //     else{
    //         if( (isset($hashMap[$nums[$i]])) && (count($hashMap[$nums[$i]])) < 2){
    //             $hashMap[$nums[$i]][count($hashMap[$nums[$i]])] = $i;
    //         }
    //         else{
    //             $hashMap[$nums[$i]] = [$i];
    //         }
    //         if(isset($hashMap[$nums[$j]]) && (count($hashMap[$nums[$j]]) < 2)){
    //             $hashMap[$nums[$j]][count($hashMap[$nums[$j]])] = $j;
    //             // echo "key = ", $hashMap[$nums[$j][count($nums[$j])]],"<br>";
    //         }
    //         else{
    //             $hashMap[$nums[$j]] =[ $j];
    //         }
    //     }
    // }

    // foreach($hashMap as $item => $v){
    //     echo "r = ", $item, '<br>';
    //     // if(count($v) >= 2){
    //         foreach($v as $key => $value){
    //             echo "key = ", $key, " value = ", $value ,"<br>";
    //             $sum -= $value;
    //             $sum = abs($sum);
                
    //         }
    //         if($sum <= $k){
    //             return "true";
    //         }
            
    //     // }
    // }

    //  
}

$result = containsNearByDuplicate([1,2,3,1,2,3],2);
echo "key = ", $result;
 




?>