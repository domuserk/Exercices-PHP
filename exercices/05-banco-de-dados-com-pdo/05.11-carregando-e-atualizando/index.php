<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.11 - Carregando e atualizando");

require __DIR__ . "/../source/autoload.php";

/*
 * [ save update ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save update", __LINE__);

$model=new \Source\Models\User();
$user=$model->load(2);
$user->last_name="Lopes";
if($user != $model->load(2)){
    $user->save();
    echo"<p class='trigger warning'>Atualizado</p>";
}else{
    echo"<p class='trigger accept'> Já Atualizado</p>";

}
var_dump($user);

