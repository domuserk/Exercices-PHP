<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);


$myAge= function ($year){
    $age = date("Y")-$year;
    return"<h5>Você tem{$age}anos!</h5>";





};

echo $myAge(2001);

$priceBrl= function ($price){
    return number_format($price,2,",",".");



};
echo "<p> O projeto custa {$priceBrl(3999)} Vamos fechar negocio?</p>";

$myCart=[];
$myCart["totalPrice"]=0;
$cardAdd= function ($item, $qtd,$price) use (&$myCart){
    $myCart[$item]=$qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];

};
$cardAdd("HTML5", 1,545);
$cardAdd("JQuery",2,766);

var_dump($myCart,$cardAdd);





/*

 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);


$iterator=4444;

function showDates($days){
    $showDate=[];
    for($day =1; $day <  $days; $day++){

        $saveDate[]=date("d/m/Y",strtotime("+{$day}days"));

    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(0)as $date){
    echo "<small class= 'tag'>{$date}</small> . PHP_EOL";

}
echo "</div>";

function generatorDate($days){

    for ($day = 1; $day< $days; $day++){

        yield date("d/m/Y",strtotime("+{$day}days"));

    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator)as $date){
    echo "<small class= 'tag'>{$date}</small> . PHP_EOL";

}
echo "</div>";