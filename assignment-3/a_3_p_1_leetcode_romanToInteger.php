<!-- https://leetcode.com/problems/roman-to-integer/ -->

<?php
function romanToInt($s){
    $hashMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    $int = 0;

    for($i =0; $i < strlen($s); $i++){
        if( $i < (strlen($s)-1)){
            if($s[$i] == 'I' && $s[$i+1] == 'V'){
                $int += $hashMap['V'] - $hashMap[$s[$i]];
                $i++;
            }
            else if($s[$i] == 'I' && $s[$i+1] == 'X' ){
                $int += $hashMap['X'] - $hashMap[$s[$i]];
                $i++;
            }
            else if($s[$i] == 'X' && $s[$i+1] == 'L'){
                $int += $hashMap['L'] - $hashMap[$s[$i]];
                $i++;
            }
            else if($s[$i] == 'X' && $s[$i+1] == 'C' ){
                $int += $hashMap['C'] - $hashMap[$s[$i]];
                $i++;
            }
            else if($s[$i] == 'C' && $s[$i+1] == 'D'){
                $int += $hashMap['D'] - $hashMap[$s[$i]];
                $i++;
            }
            else if($s[$i] == 'C' && $s[$i+1] == 'M' ){
                $int += $hashMap['M'] - $hashMap[$s[$i]];
                $i++;
            }
            else{
                $int += $hashMap[$s[$i]];
                
            }
        }
        else{
            $int += $hashMap[$s[$i]];
            
        }
    }
    return $int;
}

$result = romanToInt('MCMXCIV');
echo "Result = ", $result;
?>