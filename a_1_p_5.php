<!-- Given a sentence, keep the order of the words same, but reverse the characters
of each word.
For example, if the given sentence is: ‘I love programming’
The result should be: ‘I evol gnimmargorp’ -->

<?php
$sentence = "I Love Programming";
$separateWord = " ";
$wordArray = [];

for ($i=0; $i < strlen($sentence); $i++) {

    // split words space wise
    if($sentence[$i]==" "){
        array_push($wordArray,$separateWord);
        $separateWord= "";
    // echo "char", $sentence[$i]; 
    }

    $separateWord = $separateWord.$sentence[$i];

    // putting last word
    if($i == (strlen($sentence)-1)){
        array_push($wordArray,$separateWord);
    }
}

// my custom reverse string function
function stringReverse($string){
    $tempString = $string;
    $reverseString = "";
    for ($i=(strlen($tempString)-1); $i >= 0; $i--) { 
        $reverseString = $reverseString.$tempString[$i];
    }
    return $reverseString;
    
}
// reverse word
$reverseWords = "";
for ($i=0; $i < count($wordArray) ; $i++) { 
    $stringReverse = stringReverse($wordArray[$i]);
    $reverseWords = $reverseWords.$stringReverse." ";
}

echo 'sen = ', $reverseWords;
?>