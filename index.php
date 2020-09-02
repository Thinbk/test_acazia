<?php
function mutateTheArray($n, $a) {
    $b = [];
    for($i = 0; $i < $n; $i++) {
        if (!isset($a[$i])) {
            break;
        }
        $first = isset($a[$i-1]) ? $a[$i-1] : 0;
        $current = $a[$i];
        $next = isset($a[$i + 1]) ? $a[$i + 1] : 0;
        $b[$i] = $first + $current + $next;
    }
    return $b;
}

print_r(mutateTheArray(5, [4, 0, 1, -2, 3]));