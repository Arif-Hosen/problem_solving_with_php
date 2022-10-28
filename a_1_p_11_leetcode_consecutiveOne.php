<!-- https://leetcode.com/problems/contains-duplicate/submissions/ -->

<?php
function findMaxConsecutiveOne($nums){
    $temp = 0;
    $maxConsecutiveOne = 0;
    for($i = 0; $i < count($nums); $i++){
        if($nums[$i] == 1){
            $temp += 1;

            if($temp > $maxConsecutiveOne){
                $maxConsecutiveOne = $temp;
            }
        }
        if($nums[$i] == 0){
            $temp = 0;
        }
       
    }
    return $maxConsecutiveOne;
}

$result = findMaxConsecutiveOne([1,0,0,1,1,1,1,0,0,0,1,1,1,1,1,1,0]);
echo "Result = ", $result;
?>