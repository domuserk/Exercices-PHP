<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user=new\Source\interpretation\User();
$user=new\Source\interpretation\User(
    "Ryan",
    "Lopes",
    "impcomercial.87@gmail.com"
);

var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);


$ryan=$user;
$lopes=$ryan;
$lopes->setFirstName("Wallace");
$lopes->setLastName("Lopes");
$lopes->setEmail("rgdesenhos321@gmail.com");

$lopes=clone $ryan;
$lopes->setFirstName("Guilherme");
$lopes->setLastName("Kemper");

$Wallace=clone $ryan;

//$lopes=null;
var_dump(
    $ryan,
    $lopes
);



/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);

