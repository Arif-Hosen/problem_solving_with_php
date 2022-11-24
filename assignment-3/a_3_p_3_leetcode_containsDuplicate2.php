<!-- https://leetcode.com/problems/contains-duplicate-ii/ -->

<?php
function containsNearByDuplicate($nums,$k){
    $hashMap = [];
    $sum = 0;

    for($i = 0, $j = (count($nums)-1); $i <= $j; $i++, $j--){
        if($i == $j){
            if(isset($hashMap[$nums[$i]]) && (count($hashMap[$nums[$i]])) < 2){
                $hashMap[$nums[$i]][count($hashMap[$nums[$i]])] = $i;
            }
            else{
                $hashMap[$nums[$i]] = [$i];
            }
        }
        else{
            if( (isset($hashMap[$nums[$i]])) && (count($hashMap[$nums[$i]])) < 2){
                $hashMap[$nums[$i]][count($hashMap[$nums[$i]])] = $i;
            }
            else{
                $hashMap[$nums[$i]] = [$i];
            }
            if(isset($hashMap[$nums[$j]]) && (count($hashMap[$nums[$j]]) < 2)){
                $hashMap[$nums[$j]][count($hashMap[$nums[$j]])] = $j;
                // echo "key = ", $hashMap[$nums[$j][count($nums[$j])]],"<br>";
            }
            else{
                $hashMap[$nums[$j]] =[ $j];
            }
        }
    }

    foreach($hashMap as $item => $v){
        // echo "r = ", $item, '<br>';
        if(count($v) == 2){
            foreach($v as $key => $value){
                // echo "key = ", $key, " value = ", $value ,"<br>";
                $sum -= $value;
                $sum = abs($sum);
                
            }
            if($sum <= $k){
                return "true";
            }
            
        }
    }

    return "false";
}

$result = containsNearByDuplicate([1,1,2,3,3],2);

        echo "key = ", $result;
 


// $h = [];

// $h[1] = [5];
// $h[1][1] = 6;

//  foreach($h as $item){
//         foreach($item as $key => $value){
//             echo "key = ", $key, " value = ", $value ,"<br>";
//         }
//     }

?>