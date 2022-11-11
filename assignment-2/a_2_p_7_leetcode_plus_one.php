<!-- https://leetcode.com/problems/plus-one/ -->
<?php 
function plusOne($digits){
    $plusOneArray = [];
    $reminder = 0;

    for($i = count($digits)-1; $i >= 0; $i--  ){

        // for integer length is 1
        if(count($digits) == 1){
            if($digits[$i] == 9){
                array_push($plusOneArray,1);
                array_push($plusOneArray,0);
                return ($plusOneArray);
            }
            else{
                array_push($plusOneArray,$digits[$i]+1);
                return ($plusOneArray);
            }
        }

        if(($digits[$i]==9) && ($i == count($digits)-1)){
            array_push($plusOneArray, 0);
            $reminder = 1;
        }
        elseif(($digits[$i] == 9) &&($i == 0) && ($reminder == 1)){
            array_push($plusOneArray, 0);
            array_push($plusOneArray, 1);
        }

        elseif(($digits[$i] == 9) && ($reminder == 1)){
            array_push($plusOneArray, 0);
            $reminder = 1;
        }
       
        elseif(($reminder == 1)){
            array_push($plusOneArray, ($digits[$i]+1));
            $reminder = 0;
        }
        elseif($i == count($digits)-1){
            array_push($plusOneArray, ($digits[$i]+1));
            $reminder = 0;
        }
        else{
            array_push($plusOneArray, $digits[$i]);
            $reminder = 0;
        }
    }
    return array_reverse($plusOneArray);
}

$result = plusOne([0]);
for ($i=0; $i < count($result); $i++) { 
    echo "Result = ",$result[$i] ,"<br>";


}

?>