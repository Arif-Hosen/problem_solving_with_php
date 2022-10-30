<!-- https://www.hackerrank.com/challenges/strange-advertising/problem -->

<?php
function viralAdvertising($n){
    $shared = 5;
    $liked = 0;
    $cumulative = 0;

    while($n > 0){
        $liked = floor($shared/2);
        $shared = $liked*3;
        $cumulative += $liked;
        $n--; 
    }
    return $cumulative;
}

$result = viralAdvertising(5);
echo "Result = ", $result;
?>