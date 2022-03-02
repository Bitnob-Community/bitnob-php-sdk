<?php
declare(strict_types=1);

function validateInput(array $requiredParam, array $passedParam){
    $diff = array_diff($requiredParam, $passedParam);
    if (count($diff) == 0) return [true];
    return [false, $diff[0]];
}