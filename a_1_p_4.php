<!-- Given two numbers x and n, find the value of x^n (x to the power n) -->
<?php 

function exponentFormulaCalculation($x,$n){
    $base = $x;
    $power = $n;
    $result = 1;

    for ($i=0; $i < $power; $i++) { 
        $result *= $base;
    }
    return $result;
}
$result = exponentFormulaCalculation(5,5);
echo "Result = ", $result;
?>