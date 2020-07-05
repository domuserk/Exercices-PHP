<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping=1;
$while=[];

while($looping<=111){

    $while[]=$looping;
    $looping++;

}

var_dump($while);

$looping=1;
$while=[];
do{
    $while[]=$looping;
    $looping--;
}while ($looping>=1);
var_dump($while);




/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);


for($i = 1; $i<=11; $i++){

    echo "<p>{$i}</p>";
}



/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);



for($a = 1; $a<=11; $a++){

   if($a % 2 == 0){

       continue;
    }
   if($a>7){
       break;
   }
   echo"<p>Pulou + 2 :: {$a}</p>";
}






/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);


$array=[];
for($ar= 0; $ar <11; $ar++){
   $array[]=$ar ;

}
var_dump($array);

foreach ($array as $item){
    var_dump($item);
}

foreach ($array as $key => $value){

    var_dump("{$key}= {$value}");
}