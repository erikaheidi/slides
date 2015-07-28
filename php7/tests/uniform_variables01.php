<?php

class Person
{
    public $name = 'Erika';
    public $job = 'Developer Advocate';
}

$person = new Person();
$property = [ 'first' => 'name', 'second' => 'info' ];
echo "\nMy name is " . $person->$property['first'] . "\n\n";