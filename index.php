<?php
require ('Factory.php');
require ('Robot.php');
require ('Transformer.php');
require ('Hexagon.php');
require ('UnionRobot.php');


$factory = new \factory\Factory();

// myHydra1, myHydra2 типи роботів які може створювати фабрика

$tr = new \factory\Transformer();

$tr->height = 12;
$tr->weight = 4;
$tr->speed = 60;

$hx = new \factory\Hexagon();

$hx->height = 14;
$hx->weight = 8;
$hx->speed = 90;





$factory->addType($tr);

$factory->addType($hx);

/**

 *

 * Результатом роботи метода createMyHydra1 буде масив з 5 об’єктів класу MyHydra1

 * Результатом роботи метода createMyHydra2 буде масив з 2 об’єктів класу MyHydra2

 */

var_dump($factory->createTransformer(5));

var_dump($factory->createHexagon(2));


$unionRobot = new \factory\UnionRobot();

$unionRobot->addRobot($hx);

$unionRobot->addRobot($factory->createHexagon(2));

$factory->addType($unionRobot);

$res = reset($factory->createUnionRobot(1));

// Результатом роботи методу буде мінімальна швидкість з усіх об’єднаних роботів

echo $res->getSpeed().PHP_EOL;

// Результатом роботи методу буде сума всіх ваг об’єднаних роботів

echo $res->getWeight().PHP_EOL;