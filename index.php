<?php
include_once("Lucha.php");
include_once("Luchador.php");

$luchador1 = new Luchador("Luchador 1", 5, 3);
$luchador2 = new Luchador("Luchador 2", 4, 4);

$batalla = new Lucha($luchador1, $luchador2);
$batalla->pelear();