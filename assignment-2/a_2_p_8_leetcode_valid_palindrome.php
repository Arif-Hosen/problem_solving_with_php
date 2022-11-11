<!-- https://leetcode.com/problems/valid-palindrome/ -->

<?php
function validPalindrome($s){
    $spaceFreeString = '';

    // empty string is valid palindrome
    if($s == ' '){
        return true;
    }
    // remove space from string
    // for( $i = 0; $i< strlen($s); $i++){
    //     if($s[$i] != " " && $s[$i] != "_"){
    //         $spaceFreeString = $spaceFreeString.$s[$i];
    //     }
    // //   
    // }

    // remove non-alphanumeric charecters
    $nonAlphanumericFreeString = strtolower(preg_replace('/[^a-z0-9]/i', '',$s));

    // checking is  the string valid palindrome or not, 
    for($i = 0, $j = (strlen($nonAlphanumericFreeString)-1); $i < $j; $i++, $j-- ){
        if($nonAlphanumericFreeString[$i] != $nonAlphanumericFreeString[$j]){
            return false;
        }
    }

    return true;
}

$result = validPalindrome('    ');
echo "Result = ", $result;
?>