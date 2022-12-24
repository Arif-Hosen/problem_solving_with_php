<!-- https://leetcode.com/problems/merge-similar-items/ -->

<?php
// approach
// 1) Initalize a hashmap, an array and 3 variable
// 2) loop through on two 2D array and check the array value of array is exists in hashmap's key, if not insert the array value in hashkey and weight in hashmap's value, if exists add the array's weight with hashmap value
// 3)traverse the hashmap and assign the key and value in initialized array
// 4)sort the array and return the array
function mergeSimilarItems($items1, $items2)
{
    $hashMap = [];
    $mergeArr = [];
    $j = 0;
    $tempValue = 0;
    $tempWeight = 0;

    // items 1 set in hashmap
    for ($i = 0; $i < count($items1); $i++) {
        $hashMap[$items1[$i][0]] = $items1[$i][1];
    }
    // items 2 set in hashmap
    for ($i = 0; $i < count($items2); $i++) {
        if (isset($hashMap[$items2[$i][0]])) {
            $hashMap[$items2[$i][0]] = $hashMap[$items2[$i][0]] + $items2[$i][1];
        } else {
            $hashMap[$items2[$i][0]] = $items2[$i][1];
        }
    }

    // hashkey key value assign in a array for sorting
    foreach ($hashMap as $key => $val) {
        $mergeArr[$j++] = [$key, $val];
    }

    // sort the array and return sorted array
    for ($i = 0; $i < (count($mergeArr)-1); $i++) {
        for ($j = $i+1; $j < (count($mergeArr)); $j++){
            if($mergeArr[$i][0] > $mergeArr[$j][0]){
                $tempValue = $mergeArr[$i][0];
                $tempWeight = $mergeArr[$i][1];
                $mergeArr[$i][0] = $mergeArr[$j][0];
                $mergeArr[$i][1] = $mergeArr[$j][1];
                $mergeArr[$j][0] = $tempValue;
                $mergeArr[$j][1] = $tempWeight;
            }
        }
    }
    return $mergeArr;
}
$result = mergeSimilarItems([[1,1],[3,2],[2,3]], [[2,1],[3,2],[1,3]]);
for ($i = 0; $i < count($result); $i++) {
           echo "array0 = ",$result[$i][0],  " array1 = ", $result[$i][1],'<br>';
    }
// $result 
?>