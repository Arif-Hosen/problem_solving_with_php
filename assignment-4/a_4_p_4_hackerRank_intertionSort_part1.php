<!-- https://www.hackerrank.com/challenges/insertionsort1/problem?isFullScreen=true -->
<!-- 
    Approach:
    1. Initialize last index to a variable
    2. Loop through last index to 0 of given array
    3. Check, if last index is smaller than current-1 index (lastElement < arr[i-1]), copy current-1 index to current index (arr[i] = arr[i-1])
    else, assign the lastelemnet to current element (arr[i] = lastElement)
    4. if iteration loop i going to 0, assign (arr[0] = lastElement)
    
    * Time Complexity - O(N), Space Complexity - O(1)
 -->

<?php
function insertionSort($arr, $n)
{
    $lastElement = $arr[$n - 1];
    // loop through from last index to first
    for ($i = $n - 1; $i >= 0; $i--) {
        // for index 0
        if ($i == 0) {
            $arr[$i] = $lastElement;
        }
        // if last index is smaller than current-1 index, copy current-1 index to current index
        if ($lastElement < $arr[$i - 1]) {
            $arr[$i] = $arr[$i - 1];
            foreach ($arr as $item) {
                echo "$item ";
            }
        }
        // if last index is equal or large than current-1, assign the lastelemnet to current element
        else {
            $arr[$i] = $lastElement;
            foreach ($arr as $item) {
                echo "$item ";
            }
            return 0;
        }

        echo "<br>";
    }
}
insertionSort([2, 4, 6, 8, 3], 5);
?>