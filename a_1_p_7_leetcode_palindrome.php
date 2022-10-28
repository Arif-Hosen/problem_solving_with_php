<!-- https://leetcode.com/problems/palindrome-number/ -->

<?php
function ispalindrome($x){
    $number = $x;
    $reminder = 0;
    $reverseNumber = 0;

    if($x < 0){
        return 'false';
    }

    while($number > 0){
        $reminder = $number%10;
        $number = ($number-$reminder)/10;
        $reverseNumber = $reverseNumber*10 + $reminder;
    }

    if($x == $reverseNumber){
        return 'true';
    }
    else{
        return 'false';
    }
}

$result = ispalindrome(1203021);
echo "The number is Palindrome = ", $result;
?>