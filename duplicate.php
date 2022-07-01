<?php
// 7 = 1*2*3*4*5*6*7

// return first duplicate value from array

//function getFirstDuplicateValue(array $array){
//    $values = [];
//    foreach ($array as $val){
//        if(in_array($val, $values))
//            return $val;
//        $values[] = $val;
//    }
//    return null;
//}
//
//$array = [10, 20, 30, 50 , 20, 70];
//
//echo getFirstDuplicateValue($array);


// Solution 2
// Interesting Points:
// https://stackoverflow.com/questions/2473989/list-of-big-o-for-php-functions
// isset/array_key_exists is much faster than in_array and array_search
function getFirstDuplicateValue(array $array){
    $count = count($array);
    $values = [];
    foreach ($array as $val){
        if(isset($values[$val]))
            return $val;
        $values[$val] = true; // boolean for less memory
    }

    return null;
}

$array = [10, 20, 30, 50 , 20, 70];

echo getFirstDuplicateValue($array);