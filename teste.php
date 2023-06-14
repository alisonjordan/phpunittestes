<?php


//include 'src/Dado.php';
include 'src/Craps.php';

//$dado1 = new Dado();
//$dado2 = new Dado();
$craps = new Craps();

/*
$craps->setDados($dado1, $dado2);
$craps->lancarDados();
$craps->getDadosFacesSorteadas();
*/


echo PHP_EOL;

$craps->play();
