<?php 
// Write a code find the ‘longest string’ from a list of strings.
// For example if the given strings are: ‘I’, ‘love’, ‘my country’, ‘very’, ‘much’
// The result should be: ‘my country’

$stringArray = [ "I", "love", "mycountry", "very", "much"];

// custom string length 
// function stringLength($string){
//     $stringLength = 0;
//     while($string[$stringLength] != null ){
//         $stringLength++;
//     }
//     return $stringLength;
// }

function findingLongestString($stringArray){
    $longString = $stringArray[0];
    $maxStringLength= strlen($longString);


    for ($i=0; $i<count($stringArray); $i++ ){
        if($maxStringLength < strlen($stringArray[$i])){
            $maxStringLength = strlen($stringArray[$i]);
            $longString = $stringArray[$i];
        }
    }
    return $longString;
}

$result = findingLongestString($stringArray);
echo 'Longest String = ',$result,'<br>'

?>