<!-- https://leetcode.com/problems/palindrome-number/ -->

<?php
function isPalindrome($n){
    $midPoint = round(strlen($n)/2);
    $counter = 0; 
    $start = 0;
    $end = (strlen($n)-1);

    if(strlen($n) %2 == 1){
        for ($i=0; $i < $midPoint; $i++) { 
            if($n[$start]==$n[$end]){
                $counter++;
            }
            $start++;
            $end--;
        
        }
        if($counter == ($midPoint)){
        
            // echo "Output = ", $counter, ' palindrome';
            return "true";
        }
        else{
            // echo "Output = ", $counter, 'not palindrome';
            return "false";
        }
    }
   
//   echo "Outputt = ", $counter, 'not palindrome';
    return "false";
}

$result = isPalindrome('-12345654321');
echo "Output: ",$result;
?>