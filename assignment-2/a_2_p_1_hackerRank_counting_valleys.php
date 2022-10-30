<!-- https://www.hackerrank.com/challenges/counting-valleys/problem -->

<?php
    // function countingValleys($steps, $path){
    //     $up = 0;
    //     $down = 0;
    //     $numberOfTraversValley = 0;
    //     $mid = $steps/2;
    //     for($i=0; $i < strlen($path); $i++){
    //         if($path[$i] == "U"){
    //             $up += 1;
    //         }
    //         else{
    //             $down +=1;
    //         }
    //         if(($mid == $i) && ($down <= $up)){
    //             return 0;
    //         }
    //         if(($up == $down) && (($up+$down) ==$steps) ){
    //             $numberOfTraversValley += 1;
    //         }
    //         else if(($up == $down) && ($path[$i] == 'U')){
    //             $numberOfTraversValley += 1;
    //         }
    //     }
    //     // echo "result = ",$numberOfTraversValley;
    //     // echo "up = ",$up;
    //     // echo "dowun = ",$down;
    //     return $numberOfTraversValley;
       
    // }

    // $result = countingValleys(12,'DUUUDUDDUUUD');
    // echo "result = ",$result;
?>

<?php
    function countingValleys($steps, $path){
        $up = 0;
        $down = 0;
        $valleys = 0;
        $seaLevel = 0;
        for($i=0; $i < strlen($path); $i++){
            if($path[$i] == "D"){
                $seaLevel -= 1;
            }
            else{
                $seaLevel +=1;
            }
            if(($seaLevel == 0) && ($path[$i] == 'U')){
                $valleys +=1;
            }
        }
        
        return $valleys;
       
    }

    

    $result = countingValleys(8,'DDUUDDUDUUUD');;
    echo "result = ",$result;
?>