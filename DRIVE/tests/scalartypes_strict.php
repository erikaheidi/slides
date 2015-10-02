<?php
declare(strict_types = 1);

function double(int $value)
{
    return 2 * $value;
}

$a = double("5");
var_dump($a);