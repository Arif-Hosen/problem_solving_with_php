<!-- https://leetcode.com/problems/two-sum/ -->

<?php 
// function twoSum($numsArray, $target){
//     $hashMap = [];
//     $i = 0;
//     $targetValue = $target;
//     while( $i < count($numsArray)){
//         $hashMap[$numsArray[$i]] = $numsArray[$i];
//         $i++;
//     } 

//     foreach($hashMap as $key => $val){
//         $targetkey = $target - $val;
//         if((array_key_exists($targetkey, $hashMap)) && (array_key_exists($key, $hashMap)) && !($targetkey == $key)){
//             $numOneIndex = array_search($key,$numsArray);
//             $numTwoIndex = array_search($targetkey,$numsArray);

//             return [$numOneIndex, $numTwoIndex];
//         }
//     } 
    
// }

function twoSum($numsArray, $target){
    $hashMap = [];

    foreach($numsArray as $index => $num){
        if(isset($hashMap[$target - $num])){
            return [$hashMap[$target - $num],$index];
        }
        $hashMap[$num] = $index;
     
    } 
    echo "hh = ", count($hashMap);
    
}

$result = twoSum([3,3,8],11);
echo "Result = ", $result[0],"  " ,$result[1];
?>