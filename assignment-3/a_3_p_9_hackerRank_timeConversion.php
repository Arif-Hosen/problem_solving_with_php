<!-- https://www.hackerrank.com/challenges/time-conversion/problem -->

<?php
function timeConversion($s){
    $hashMap = [];

    for ($i=1; $i <=12 ; $i++) { 
        if($i <= 9){
            $hashMap['0'.$i.'A'] = '0'.$i;
            $hashMap['0'.$i.'P'] = 12 + $i;
        }
        elseif($i <= 11){
            $hashMap[$i.'A'] = $i;
            $hashMap[$i.'P'] = 12 + $i;
        }
        else{
            $hashMap[$i.'A'] = '00';
            $hashMap[$i.'P'] = $i;
        }
    }

    $getHour = $hashMap[$s[0].$s[1].$s[8]];
    $hour24 = $getHour.':'.$s[3].$s[4].':'.$s[6].$s[7];
    return $hour24;
}
$result = timeConversion('12:05:45AM');
echo "Time in 24 Hour - ",$result;
?>