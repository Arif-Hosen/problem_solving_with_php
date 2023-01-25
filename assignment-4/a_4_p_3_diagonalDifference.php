<!-- https://www.hackerrank.com/challenges/diagonal-difference/problem?isFullScreen=true -->

<?php
function diagonalDifference($arr){
    $leftToRightDiagonalSum = 0;
    $rightToLeftDiagonalSum = 0;

    for ($i=0, $j=count($arr)-1 ; $i < count($arr)  ; $i++, $j-- ) { 
        $leftToRightDiagonalSum += $arr[$i][$i];
        $rightToLeftDiagonalSum += $arr[$i][$j];
    }
    return abs($leftToRightDiagonalSum - $rightToLeftDiagonalSum);
}
$result = diagonalDifference([[11, 2, 4],[4, 5, 6],[10, 8, -12]]);
echo 'Result = ', $result;
?>