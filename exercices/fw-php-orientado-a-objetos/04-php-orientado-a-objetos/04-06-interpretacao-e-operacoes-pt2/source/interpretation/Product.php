<?php


namespace Source\interpretation;


class Product
{
public $name;
private $price;
private $data;

public function __set($name, $value)
{
    $this->notFound(__FUNCTION__,$name);
    $this->data[$name]=$value;
}

    public function handler($name,$price){
    $this->name=$name;
    $this->price=number_format($price,"2",".",",");

}
private function notFound($method,$name){
    echo "<p class='trigger error'>{$method}: A Propriedade {$name} não existe em ".__CLASS__." </p>";
}
public function __get($name)
{
    if(!empty($this->data[$name])){
return $this->data[$name];
    }else{
        $this->notFound(__FUNCTION__,$name);
    }
    $this->notFound(__FUNCTION__,$name);
}
public function __isset($name)
{
   $this->notFound(__FUNCTION__,$name
   );

}
public function __call($name, $arguments)
{
   $this->notFound(__FUNCTION__,$name);
   var_dump($arguments);
}
public function __toString()
{

    return"<p class='trigger'>Este é um objeto da classe</p>";
}
public function __unset($name)
{
    trigger_error(__FUNCTION__.":Acesso Negado a Propriedade {$name}",E_USER_ERROR);
}
}