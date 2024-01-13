<?php

class foo {
    public static $var = 'Hello!';
}

$prop = 'var';

echo foo::${$prop};