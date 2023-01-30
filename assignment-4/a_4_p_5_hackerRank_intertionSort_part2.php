<!-- https://www.hackerrank.com/challenges/insertionsort2/problem?isFullScreen=true -->

<!-- 
    time complexity - O(N^2), Space complexity- O(1)
 -->
<?php
function insertionsort2($n, $arr)
{
    // initialize a variable for tracking array element's value
    $targetElement = 0;
    for ($i = 1; $i < $n; $i++) {
        // for every iteration target element is i-th value, which we use to compare in nested loop
        $targetElement = $arr[$i];

        // loop through from i-th to 0 for sorting
        for ($j = $i; $j >= 0; $j--) {

            // if loop goes to 0, assign value according value code and coninue( finish current iteration, goes to loop condition)
            if ($j == 0) {
                $arr[$j] = $targetElement;
                continue;
            }

            // check, if target element(arr[i]) is less than arr[j-1], copy arr[j-1] to arr[j]
            if ($targetElement < $arr[$j - 1]) {
                $arr[$j] = $arr[$j - 1];
            }

            // if target element(arr[i]) is eual or greater than arr[j-1], assign targetElemet to arr[j]. then assign j=0, because no need to through loop further more, our target element in right position, else gives wrong ans
            else {
                $arr[$j] = $targetElement;
                $j = 0;
            }
        }
        foreach ($arr as $item) {
            echo "$item ";
        }
        echo "<br>";
    }
}

insertionsort2(8, [8, 7, 6, 5, 4, 3, 2, 1]);
?>