<?php

// another solution
function sub($value, $type = 'odd')
{
    $sub = 1;
    $type = ($type == 'even') ? 0 : 1;
    for ($i = 1; $i <= $value; $i++) {
        if ($i % 2 == $type) {
            $sub = $i * $sub;
        }
    }
    return $sub;
}

echo sub(7, 'even');