<!-- https://www.hackerrank.com/challenges/find-the-median/problem?isFullScreen=false -->

<!-- 
    Approach:
    1. Use Counting sort to sort the input array
    2. Calculate median of soted array - median = floor(($sortedArr.size)/2) .
    since, array index start with 0. so floor (round fraction down)
 -->
<?php 
function findMedian($arr){
    $maxValue = $arr[0];
    $sortedArr = [];
    $hashMap = [];

    // find max value 
    for ($i=1; $i < count($arr); $i++) { 
       if($maxValue < $arr[$i]){
        $maxValue = $arr[$i];
       }
    }
    // assign 0 in every element
    for($i = 0; $i <= $maxValue; $i++){
        $hashMap[$i] = 0;
    }
    // assign counter+1 according to input array value
    for($i = 0; $i < count($arr); $i++){
        $hashMap[$arr[$i]] += 1;
    }
    // cumulative sum of hashmap
    for ($i=1; $i <= $maxValue; $i++) { 
        $hashMap[$i] += $hashMap[$i-1]; 
    }
    // sorted
    for ($i=0; $i < count($arr) ; $i++) { 
        $hashMap[$arr[$i]] = $hashMap[$arr[$i]] - 1; 
        $sortedArr[$hashMap[$arr[$i]]] = $arr[$i]; 
    }
    //since, array index start with 0. so floor (round fraction down)
    $median = floor(count($sortedArr)/2);
    return $sortedArr[$median];

}

$result = findMedian([1, 2, 4, 5, 3]);
echo "Median is ",$result;
?>