<!-- https://www.hackerrank.com/challenges/diagonal-difference/problem?isFullScreen=true -->
<!-- 
    approach:
    1. declare 2 variable for left to right diagonal sum and right to left diagonal sum
    2. loop through arr.len time, 2 counter initialize , i is for icrement and j is for decrement
    3. for left to right - row and col index increase same value, so we define arr[i][i] and calculate sum
    4. for right to left - row increase and col index decrease , so we define arr[i][j] and calculate sum
    5.finally return absolute difference

    
 -->

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