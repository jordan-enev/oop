<?php

require 'FlyEngineInterface.php';
require 'Airplane.php';
require 'FighterAirplane.php';
require 'FlyEngine.php';
require 'Bird.php';

$fly_engine = new FlyEngine();
$airplane = new Airplane($fly_engine);
$fighter_airplane = new FighterAirplane($fly_engine);
$bird = new Bird($fly_engine);

var_dump($airplane->fly());
var_dump($fighter_airplane->fly());
var_dump($bird->fly());

