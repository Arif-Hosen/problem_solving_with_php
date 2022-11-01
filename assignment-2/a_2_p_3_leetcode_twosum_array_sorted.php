<!-- https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/ -->

<!-- approach -->
<!-- 
    1. Declare a empty array
    2. Loop through on input array
    3. check in empty, if  array index remain (target-value), return hashMap[target -value]+1 and index + 1
    4. else, assign the hash map index/key as input array value and value as input array's index

 -->

<?php 
function twoSum ($numbers, $target){
    $hashMap = [];

    foreach($numbers as $index => $value){
        if(isset($hashMap[$target - $value])){
            return [$hashMap[($target - $value)]+1, $index +1];
        }

        $hashMap[$value] = $index;
    }
}

$result = twoSum([-1,0],-1);

for ($i=0; $i < count($result); $i++) { 
 # code...
 echo "Index = ",$result[$i];
}
?>