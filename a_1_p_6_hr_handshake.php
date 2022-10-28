<!-- Link- hackerrank.com/challenges/handshake/problem?isFullScreen=true -->

<?php
function handShakeCalculation($n){
    $numberOfHandshake = ($n*($n-1))/2;
    return $numberOfHandshake;
}

$result = handShakeCalculation(10);
echo "Number of Handshake = ", $result;
?>