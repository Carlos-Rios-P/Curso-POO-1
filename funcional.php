<?php

$input = array(30, 15, 20, 17);

$filtro = function(int $age) {
    return ($age > 18);
};

$output = array_filter($input, function(int $age) {
    return ($age > 18);
});

print_r($output);