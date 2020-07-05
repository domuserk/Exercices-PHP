<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);


$company=new \Source\Related\Company();
$company->bootCompany(
    "Brazillian",
   " Nome da Rua"
);

var_dump($company);

$address=new \Source\Related\Address(" Dr.Ryan Lopes",3399,"Bloco a Sala 211");
$company->boot(
    "Brazillian",
    $address

);
var_dump($company);
echo"<p>{$company->getCompany()}  tem sede na rua {$company->getAddress()->getStreet()}</p>";


/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);


$fsphp=new\Source\Related\Products("Full Stack PHP",'1997');
$laradev=new\Source\Related\Products("Laravel Developer",997);

var_dump($fsphp,$laradev);

$company->addProduct($fsphp);
$company->addProduct($laradev);
$company->addProduct(
    new\Source\Related\Products("Work Control Dev",2997)
);

var_dump($company);
/**
 * @var \Source\Related\Products $product
 */
foreach ($company->getProducts() as $product){
    echo"<p>{$product->getName()} por R$ {$product->getPrice()}</p>";

}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO","Ryan","Lopes");
$company->addTeamMember("Manager","Wallace","Silva");
$company->addTeamMember("Suporte","Ruan","Lopes");
$company->addTeamMember("Producer","Gustavo","Silva");
$company->addTeamMember("Designer","João","Cardoso");

var_dump($company);

/**
 * @var \Source\Related\User $member
 */

foreach ($company->getTeam() as $member){

    echo"<p>{$member->getJob()}:{$member->getFirstname()}:{$member->getLastname()}</p>";

}








