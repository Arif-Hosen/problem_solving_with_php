<!-- https://www.hackerrank.com/challenges/arrays-ds/problem -->

<?php
function reverseArray($a){
    $temp = 0;

    // loop through on array with 2 pointers and swaping the elemnet position
    for ($i =0, $j = (count($a)-1); $i < $j; $i++, $j--){
        $temp = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $temp;
    }

    return $a;
}

$result = reverseArray([2,4,6,9,1]);
foreach($result as $val){
    echo "Result = ", $val, "<br>";
}
?>