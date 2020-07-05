<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.11 - Refatorando modelo de usuário");

require __DIR__ . "/../source/autoload.php";

/*
 * [ find ]
 */
fullStackPHPClassSession("find", __LINE__);

$model=new \Source\Models\User();
$user=$model->find("id =:id","id=1");
var_dump($user);




/*
 * [ find by id ]
 */
fullStackPHPClassSession("find by id", __LINE__);




/*
 * [ find by email ]
 */
fullStackPHPClassSession("find by email", __LINE__);




/*
 * [ all ]
 */
fullStackPHPClassSession("all", __LINE__);




/*
 * [ save ]
 */
fullStackPHPClassSession("save create", __LINE__);



/*
 * [ save update ]
 */
fullStackPHPClassSession("save update", __LINE__);
