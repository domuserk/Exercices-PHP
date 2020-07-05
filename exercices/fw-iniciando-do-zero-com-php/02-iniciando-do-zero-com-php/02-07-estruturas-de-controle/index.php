<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test=false;

if($test){
    var_dump(true);


}else{

    var_dump(false);
}



$age=18;

if($age<16){
var_dump("Bandas Coloridas");
}
elseif($age >15 && $age <41){
var_dump("ótimas bandas");
}else{
    var_dump("Rock and Roll Raiz");


}

$hour=23;

if($hour>=5 || $hour <23){
    if($hour<7){

        var_dump("Bob Marley");
    }
else {
    var_dump("After Bridge");
}
} else{
    var_dump("ZZZZZZZ");
}




/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);


$rock="";

if(isset($rock)){

    var_dump("Rock and Roll");
}else{
    var_dump("Die");
}
$rockAndRoll= "AC/DC";
if(!empty($rockAndRoll)){var_dump("Rock existe etoca($rockAndRoll");

}else{
    var_dump("Não Existe ou não esta tocando!");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);


$payment= "credit_card";

switch ($payment){

    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case'canceled':
        var_dump("Pagamento Cancelado");
        break;
    case 'past_due':
    case 'pending':
        var_dump("Aguardando Pagamento");
        break;
    case'approved':
    case 'completed':
var_dump("Pagamento Aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento");
        break;

};

