<?php
echo "<h1> Tugas 9 - OOP PHP </h1>";

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->getName() . "<br>";
echo "Legs: 4 <br>";
echo "Cold Blooded: no <br> <br>";

$monyet = new Ape("kera sakti");
echo "Name: " . $monyet->getName() . "<br>";
echo "Legs: " . $monyet->get_legs() . "<br>";
echo "Cold Blooded: " . $monyet->get_cold_blooded() . "<br>";
echo "Yell: " . $monyet->yell() . "<br> <br>";

$katak = new Frog("buduk");
echo "Name: " . $katak->getName() . "<br>";
echo "Legs: " . $katak->get_legs() . "<br>";
echo "Cold Blooded: " . $katak->get_cold_blooded() . "<br>";
echo "Jump: " . $katak->jump() . "<br> <br>";
?>