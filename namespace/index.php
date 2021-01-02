<?php
require_once 'First.php';
require_once 'test.php';
require_once 'class/class.php';

// $first = new test\First();
// echo "<br>";
// $first->name();

use myClass\myClss\First as a;
use first\First as b;

a::name();
a::age();
echo "<br>";
b::name();

use a\Test;
echo "<br>";
Test::name();

