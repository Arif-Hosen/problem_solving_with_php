<!-- https://leetcode.com/problems/first-unique-character-in-a-string/ -->

<?php
function firstUniqCharecter($s){
    $tempHashMap = [];
    $hashMap = [];

    for($i = 0; $i < strlen($s) ; $i++){
        if(isset($hashMap[$s[$i]])){
            unset($tempHashMap[$s[$i]]);
        }
        else{
            $hashMap[$s[$i]] = $i;
            $tempHashMap[$s[$i]] = $i;
        }
    }

    if($tempHashMap){
        foreach($tempHashMap as $i => $v){
            return $v;
        }
    }
    return -1;
}

$result = firstUniqCharecter('loveleetcode');
echo 'output = ' , $result;

?>