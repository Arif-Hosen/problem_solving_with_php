<!-- https://www.hackerrank.com/challenges/array-left-rotation/problem -->

<?php
function leftRotation($d, $arr){ 
    // ## brute-force approach (O(n^2))
    // $temp = 0;
    // for ($i = 0; $i < $d; $i++ ){
    //     $temp = $arr[0];
    //     for($j = 0; $j < count($arr); $j++){
    //         if($j != (count($arr)-1)){
    //             $arr[$j] = $arr[$j+1];
    //         }
    //         else{
    //             $arr[$j] = $temp;
    //         }
    //     }
    // }
    // return $arr;

    // ## array divide approach (O(n))
    $arrLeft = [];
    $arrRight = [];
    $rotateArray =[];
    for ($i=0, $j = 0; $i < count($arr); $i++) { 
        if($i < $d ){
            $arrLeft[$i] = $arr[$i];
            
        }
        else{
            
            $arrRight[$j] = $arr[$i];
            $j++;
        }
    }
    for ($i=0, $j = 0; $i < count($arr); $i++) { 
        if($i < count($arrRight) ){
            $rotateArray[$i] = $arrRight[$i];
            
        }
        else{
            $rotateArray[$i] = $arrLeft[$j];
            $j++;
        }
    }
//    $rotateArray = array_merge($arrRight,$arrLeft);
    
    return $rotateArray;
}
$result = leftRotation(4,[1,2,3,4,5]);
for($i = 0; $i < count($result); $i++){
    echo "Result = ", $result[$i];
}
?>