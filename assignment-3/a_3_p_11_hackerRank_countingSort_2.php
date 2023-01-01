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
        $sortedArr[$j] =0;
    }

    // increase the hashmap value where hashmap index is unsroted array's i-th value
    for ($i=0; $i < count($arr) ; $i++) { 
        $hashMap[$arr[$i]] = $hashMap[$arr[$i]] + 1;
    }

    // cumulative sum element in count array
    for ($i=1; $i <= 100 ; $i++) { 
        $hashMap[$i] += $hashMap[$i-1]; 
    }

    for ($i=0; $i < count($arr); $i++) { 
        $hashMap[$arr[$i]] = $hashMap[$arr[$i]] - 1;
        $sortedArr[$hashMap[$arr[$i]]] = $arr[$i];
    }
    for ($i=0; $i <count($sortedArr) ; $i++) { 
        echo "sorted arr = ", $sortedArr[$i]; 
    }

    var_dump($sortedArr);
    // return $hashMap;
}
(countingSort([19, 10, 12, 10, 24, 25, 22]));
?>