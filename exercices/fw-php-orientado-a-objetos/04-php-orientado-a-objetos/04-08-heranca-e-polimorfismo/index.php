<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);


$event=new \Source\Inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2020-03-13 16:00"),
    2500,
    "4"

);

var_dump($event);

$event->register("Ryan","impcomercial.87@gmail.com");
$event->register("Wallace","impcomercial.87@gmail.com");
$event->register("João","impcomercial.87@gmail.com");
$event->register("Gustavo","impcomercial.87@gmail.com");
$event->register("Robson","impcomercial.87@gmail.com");
/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);


$address=new \Source\Inheritance\Address("Rua Dos Eventos",1997);
$event=new \Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2020-03-13 16:00"),
    2500,
    "4",
    $address

);

var_dump($event);

$event->register("Ryan","impcomercial.87@gmail.com");
$event->register("Wallace","impcomercial.87@gmail.com");
$event->register("João","impcomercial.87@gmail.com");
$event->register("Gustavo","impcomercial.87@gmail.com");
$event->register("Robson","impcomercial.87@gmail.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);


$event=new \Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2020-03-13 16:00"),
    2500,
    "http://github.com/domuserk",
    197


);

var_dump($event);

$event->register("Ryan","impcomercial.87@gmail.com");
$event->register("Wallace","impcomercial.87@gmail.com");
$event->register("João","impcomercial.87@gmail.com");
$event->register("Gustavo","impcomercial.87@gmail.com");
$event->register("Robson","impcomercial.87@gmail.com");
