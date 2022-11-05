<!-- https://leetcode.com/problems/find-all-duplicates-in-an-array/ -->

<?php
function findDuplicates($nums){
    $hashMap = [];
    $duplicates = [];
    foreach ($nums as $index => $val){
        if(isset($hashMap[$val])){
            // array_push($duplicates, $val);
            $duplicates[count($duplicates)] = $val;
        }
        $hashMap[$val]= $index;
    }

    return $duplicates;

    // for ($i=0; $i < count($duplicates); $i++) { 
    //     echo "Num = ", $duplicates[$i], "<br>";
    // }
}

$result = findDuplicates([4,3,2,7,8,2,3,1]);
echo "Result = ", count($result);
?>