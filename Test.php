<?php

$numbers = [1, 2, 3, 4, 5];
$target = 2;

if(in_array($target,$numbers)){
    $index=array_search($target, $numbers);
    echo "Target has been reached in index number " . $index;
}else{
    echo "Target not found in array data";
}


?>

