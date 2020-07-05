<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.10 - Fundamentos da abstração");

require __DIR__ . "/source/autoload.php";

/*
 * [ superclass ] É uma classe criada como modelo e regra para ser herdada por outras classes,
 * mas nunca para ser instanciada por um objeto.
 */
fullStackPHPClassSession("superclass", __LINE__);

$client=new \Source\App\User("Ryan","Lopes");

//$account=new \Source\Bank\Account(
 //   "1666",
  //  "22345",
  //  $client,
  //  "5999"

//);

var_dump(
    //$account,
$client);




/*
 * [ especialização ] É uma classe filha que implementa a superclasse e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.a", __LINE__);


$saving= new \Source\Bank\AccountSaving(
    "1999",
    "22345",
    $client,
    "0"

);
var_dump($saving);
$saving->deposit(1111);
$saving->withdrawal(1444);
$saving->withdrawal(1111);
$saving->extract();



/*
 * [ especialização ] É uma classe filha que implementa a superclass e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.b", __LINE__);


$current=new \Source\Bank\AccountCurrent(
    "1655",
    "22346",
    $client,
    "1111",
    "1111"
);
var_dump($current);

$current->deposit(1111);
$current->withdrawal(1999);
$current->withdrawal(533);


$current->extract();
