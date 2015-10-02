<?php

$obj = new class() {
    public function foo() { return 'bar'; }
};

echo $obj->foo();