<?php
/*
Approach-
1. Loop through in n-1 times for row
2. Nested loop through in n-1 times for column
3. Check if ((n-1)-i) > j , print space
    else print #
*/ 

function staircase($n){
    for ($i=0; $i < $n; $i++) { 
        for ($j=0; $j < $n; $j++) { 
            if(($n-1)-$i > $j){
                echo " "; // browser ignore white space,
            }
            else{
                echo "#";
            }
        }
        echo "\n";
    }
}
staircase(15);
?>