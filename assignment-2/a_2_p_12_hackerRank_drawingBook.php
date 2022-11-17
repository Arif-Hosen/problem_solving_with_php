<!-- https://www.hackerrank.com/challenges/drawing-book/problem -->

<?php
function pageCount($n, $p){
    $start = 0;
    $end = -1;

    if($p == 1 ){
        return 0;
    }
    if(($n%2 == 0) && ($n-1 == $p) ){
        return 1;
    }

    for($i = 1, $j = $n; $i <= $n; $i++, $j--){
        if($i <= $p){
           ++$start;
        }
        if($j >= $p){
            ++$end;
        }
    }

    // if($start == 1 && $start < $end ){
    //     return 1;
    // }
    // if($end == 1 && $end < $start ){
    //     return 1;
    // }

    $start = floor($start/2);
    $end = floor($end/2);

    if($start < $end){
        return $start;
    }
    return $end;
}

$result = pageCount(2, 1);
echo "Result = ", $result;
?>