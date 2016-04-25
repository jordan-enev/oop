<?php

require 'ManTrait.php';
require 'WomenTrait.php';
require 'Man.php';
require 'Women.php';
require 'Child.php';

// Test whether the man has the specific behaviour
$man = new Man();
echo $man->playFootball();
echo '<br>';

// Test whether the women has the specific behaviour
$women = new Women();
echo $women->singing();
echo '<br>';

// Test whether or not the child inherits his parents' specific behaviours
$child = new Child();
echo $child->playFootball();
echo $child->singing();
echo '<br>';