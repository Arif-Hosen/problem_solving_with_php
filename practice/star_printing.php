<?php
/*
printing pattern
*
**
***
****
*****
*/  
$n = 5;
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo '*';
    }
    echo "<br>";
}
/*
printing pattern
*****
****
***
**
*
----
*/ 
for ($i=$n; $i > 0; $i--) { 
    for ($j=0; $j < $i ; $j++) { 
        echo '*';
    }
    echo "<br>";
}

/*
  -------
    *
   **
  ***
 ****
*****
--------
*/ 
for ($i=0; $i < $n; $i++) { 
    for ($j=$i; $j < $n-1 ; $j++) {
        echo '- ';
    }
    for ($k=0; $k <= $i; $k++) { 
        echo '*';
    }
    echo "<br>";
}
for ($i=0; $i < $n-1; $i++) { 
    for ($j=0; $j <= $i ; $j++) {
        echo '-';
    }
    for ($k=$i ; $k < $n-1; $k++) { 
        echo '*';
    }
    echo "<br>";
}

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $n ; $j++) {
        if($i == 0 || $i == 4){
            echo "*";
        }
        elseif($j == 0 || $j==4){
            echo "*";
        }
        else{
            echo "-";
        }
        
    }
    echo "<br>";
    
    
}
?>