<?php
$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

// row wise print
echo '<h2>Row wise print</h2>';
for ($i=0; $i < count($arr) ; $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
        echo 'index = ',$i, $j,' item = ',($arr[$i][$j]), '<br>';
    }
}
// column wise print
echo '<h2>Columne wise print</h2>';
for ($i=0; $i < count($arr) ; $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
        echo 'index = ',$i, $j,' item = ',($arr[$j][$i]), '<br>';
    }
}
// diagonal sum print
echo '<h2>Diagonal sum print</h2>';
$sum1 = 0;
$sum2 = 0;
// first diagonal
for ($i=0; $i < count($arr); $i++) { 
    $sum1  += $arr[$i][$i]; 
    echo "sum = ", $sum1 ,'<br>';
}
// first  and second diagonal
echo '<p>First and second Diagonal sum print</p>';
for ($i=0, $j = count($arr)-1; $i < count($arr); $i++,$j--) { 
        $sum2  += $arr[$i][$i]; 
        echo "sum = ", $sum ,'<br>';
        $sum2  += $arr[$i][$j]; 
        echo "sum = ", $sum ,'<br>';
}
echo " total sum = ", $sum2 ,'<br>';
?>