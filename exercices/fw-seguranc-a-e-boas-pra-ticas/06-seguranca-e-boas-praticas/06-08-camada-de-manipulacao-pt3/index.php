<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.08 - Camada de manipulação pt3");

require __DIR__ . "/../source/autoload.php";

/*
 * [ validate helpers ] Funções para sintetizar rotinas de validação
 */
fullStackPHPClassSession("validate", __LINE__);

$message=new \Source\Core\Message();
$email="impcomercial.87@gmail.com";
if(!is_email($email)){
    echo $message->error("Email");
}else{
    echo $message->success("Email");
}

$passwd=1234567;
mb_strlen($passwd);
echo mb_strlen($passwd);
if(!is_passwd($passwd)){
    echo $message->error("Senha");
}else{
    echo $message->success("Senha");
}



/*
 * [ navigation helpers ] Funções para sintetizar rotinas de navegação
 */
fullStackPHPClassSession("navigation", __LINE__);

var_dump([
    url("/blog/titulo-do-artigo"),
    url("blog/titulo-do-artigo")
]);

if(empty($_GET)){
    redirect("?ftrue");
}

/*
 * [ class triggers ] São gatilhos globais para criação de objetos
 */
fullStackPHPClassSession("triggers", __LINE__);

var_dump(user()->load(1));

echo message()->error("Esse é um erro");
echo message()->warning("Esse é um aviso");





