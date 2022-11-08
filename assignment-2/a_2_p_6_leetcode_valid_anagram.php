<!-- https://leetcode.com/problems/valid-anagram/ -->

<?php
function checkValidAnagram($s, $t){
    $hashMapStirngS = [];
    $hashMapStringT = [];
    
    if(strlen($s) != strlen($t)){
        return 'false';
    }

    for($i =0; $i < strlen($s); $i++ ){
        if(isset($hashMapStirngS[$s[$i]])){
            $hashMapStirngS[$s[$i]] += 1;   
        }
        else{
            $hashMapStirngS[$s[$i]]=1;
        }
    }
    for($i =0; $i < strlen($t); $i++ ){
        if(isset($hashMapStringT[$t[$i]])){
            $hashMapStringT[$t[$i]] += 1;   
        }
        else{
            $hashMapStringT[$t[$i]]=1;
        }
    }

    foreach($hashMapStirngS as $index =>$val){
        if($hashMapStirngS[$index]!=$hashMapStringT[$index]){
            return "false";
        }
    }

    return "true";

    
}



$result = checkValidAnagram('ratrrc','trrarc');
echo "Result = ", $result;
?>