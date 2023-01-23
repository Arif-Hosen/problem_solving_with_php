<!-- https://leetcode.com/problems/spiral-matrix/ -->
<!-- 
Appoarch:
1. Initialize 4 variable for tracking top, bottom, left and right side,
     another is  for direction. and an array
2. Loop through until ($top <= $bottom && $left <=$right)
    and check direction, if direction is top(d = 1) (left to right),
    insert current rows value by throuhing loop, 
    after finished loop, increase top++(we dont need traverse current rows) and direction++,
3.  check direction, if direction is right(d = 2) (top to bottom),
    insert current cols value by throuhing loop, 
    after finished loop, decrease right-- (we dont need traverse current cols) and direction++,
4.  check direction, if direction is bottom(d = 3) (right to left),
    insert current rows value by throuhing loop, 
    after finished loop, decrease bottom-- (we dont need traverse current rows) and direction++,
4.  check direction, if direction is bottom(d = 4) (bottom to top),
    insert current cols value by throuhing loop, 
    after finished loop, increase bottom-- (we dont need traverse current cols) and direction = 1,
5. return arr[];

-> Time complexity: O(m*n)
-> Space complexity: O(n)

 -->
<?php 
function spiralOrder($matrix){
    $arr = [];
    $top = 0;
    $bottom = count($matrix)-1;
    $left = 0;
    $right = count($matrix[0])-1;
    $dir = 1;

    while($top <= $bottom && $left <=$right){
        if($dir == 1){ // 1 means left to right direction
            // traverse left to right and store value in array
            for ($i=$left; $i <= $right ; $i++) { 
                $arr[count($arr)] = $matrix[$top][$i];
            }
            // we don't need traverse 1st row left to right of top
            $top++;
            // increase direction for top to bottom traverse of right side
            $dir += 1;
            // echo '<br>', "left to rght ",$top, $dir,'<br>';
            // var_dump($arr);
        }
        else if($dir == 2){ // 2 means top to bottom direction
            // traverse top to bottom and store value in array
            for ($i=$top; $i <= $bottom ; $i++) { 
                $arr[count($arr)] = $matrix[$i][$right];
            }
            // we don't need traverse top to bottom of right side
            $right--;
            // increase direction for right to left traverse in bottom side
            $dir += 1;
            // echo '<br>',"top to b ",$right, $dir,'<br>';
            // var_dump($arr);
        }
        else if($dir == 3){ // 3 means  right  to left direction
            // traverse right to left  and store value in array
            for ($i=$right; $i >= $left ; $i--) { 
                $arr[count($arr)] = $matrix[$bottom][$i];
            }
            // we don't need traverse bottom
            $bottom--;
            // increase direction for left to right traverse in bottom side
            $dir += 1;
            // echo '<br>',"r to b ",$bottom, $dir,'<br>';
            // var_dump($arr);
        }
        else{ // bottom  to top direction
            // traverse bottom to top  and store value in array
            for ($i = $bottom; $i >= $top ; $i--) { 
                $arr[count($arr)] = $matrix[$i][$left];
            }
            // we don't need traverse left side
            $left++;
            //  direction is 1, for left to right traverse in top side again
            $dir = 1;
            // echo '<br>',"b to t ",$left, $dir,'<br>';
            // var_dump($arr);
        }
    }
    return $arr;
    
}
$result = spiralOrder([[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]]);
var_dump($result);
?>