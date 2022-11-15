<!-- https://www.hackerrank.com/challenges/sock-merchant/problem -->

<?php
function shockMercent($n, $ar){
    // declare empty hashmap and a variable
  $hashMap = [];
  $shockPair = 0;
  
//   loop through on array, putting array's value in the hashmap as a key and
//      check if the key is exist in the hashmap, key's value++, else key's 
//      value is 1
  for($i = 0; $i < count($ar); $i++){
    if(isset($hashMap[$ar[$i]])){
        $hashMap[$ar[$i]] += 1;
    }
    else{
        $hashMap[$ar[$i]] = 1;
    }

  }

//   loop through on hashmap, divided by 2 to key's value and floor the value, then sum with shockpair variable then return shockpair
  foreach($hashMap as $key => $value){
    $shockPair += floor($value/2);
  }
  return $shockPair;
}

$result = shockMercent(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]);
    echo "Result = ",$result;
?>