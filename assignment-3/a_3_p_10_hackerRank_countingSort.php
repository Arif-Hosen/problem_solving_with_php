<!-- https://www.hackerrank.com/challenges/countingsort1/problem?isFullScreen=true -->
<!-- Approach
1. initialize a hashmap, an array and a variable for max valuef
2. Assign the hashmap key whice key range is 100 and all key value is 0
3. Loop through on unsorted array, increase the hashmap value where hashmap index is as unsroted array's i-th value (hash[arr[i]] = hash[arr[i]] +1 )

* Time complexity - O(n+k), where n is number of array element and k is range of element (k= largest num - smallest num);
* Space complexity - O(k)
-->

<?php
function countingSort($arr){
    $hashMap = [];
    $sortedArr = [];
    $maxValue = $arr[0];

    // finding max number from unsorted array - it's add for counting array
    // for($i = 0; $i < count($arr); $i++){
    //     if($maxValue < $arr[$i]){
    //         $maxValue = $arr[$i];
    //     }
    // }

    // assign hashmap's value 0 , the hasmap size is the 100, according to question
    for($j = 0; $j <= 100; $j++){
        $hashMap[$j] = 0;
    }

    // increase the hashmap value where hashmap index is unsroted array's i-th value
    for ($i=0; $i < count($arr) ; $i++) { 
        $hashMap[$arr[$i]] = $hashMap[$arr[$i]] + 1;
    }
    return $hashMap;
}
var_dump(countingSort([9,4,5,3,4]));
?>