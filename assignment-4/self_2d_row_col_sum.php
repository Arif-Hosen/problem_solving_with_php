<?php
// 2d array, row wise sum and put in row wise another 2d array
function rowAndColSum($arr){
    $sum = 0;
    $k = 0;
    $sumArr = [[]];
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr); $j++) { 
            $sum += $arr[$i][$j];
        }
        $sumArr[0][$k++] = $sum;
        // echo "sum = ", $sumArr[0][1] ,'<br>';
        $sum = 0;
    }
    return $sumArr;
}
$result = rowAndColSum([[1,2,3],[4,5,6],[7,8,9]]);
var_dump($result);
?>