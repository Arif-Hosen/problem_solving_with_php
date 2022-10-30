<!-- https://www.interviewbit.com/problems/reverse-the-string/ -->

<?php 
function reverseWord($a){
    $unncecerySpaceFreeString = "";
    $wordArray = [];
    $reverseWords = "";

    for ($i=0; $i < strlen($a); $i++) { 
        if(!($a[$i]==' ')){
            if(($a[$i-1] == " ") && (!empty($unncecerySpaceFreeString))){
                    $unncecerySpaceFreeString = $unncecerySpaceFreeString." ".$a[$i];
            }
            else{
                    $unncecerySpaceFreeString = $unncecerySpaceFreeString.$a[$i];
            }
        }
    }
    $wordArray=   explode(' ', $unncecerySpaceFreeString);

    for ($i=(count($wordArray)-1); $i >= 0; $i--) { 
        $str = $wordArray[$i];
        if(!($i == 0)){
         $str = $str." ";}
         $reverseWords = $reverseWords. $str;
    }
    return $reverseWords;
    // echo strlen($reverseWords);
    
}

$result = reverseWord(" hello world ");
echo "reverse words =",$result;
?>