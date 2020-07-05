<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);


//include "file.php";
//echo"<p>Continue</p>";

//include"header.php";
include __DIR__ . "/header.php";
include  __DIR__  ."/config.php";

$profile=new StdClass();
$profile->name="Ryan";
$profile->company="Brazillian";
$profile->email="Rgdesenhos321@gmail.com";

include __DIR__ . "/profile.php";

$profile=new StdClass();
$profile->name="Kaue";
$profile->company="Brazillian";
$profile->email="Rgdesenhos321@gmail.com";

echo Course;
echo"<h1>" .Course ."</h1>";

 var_dump(require_once __DIR__."./config.php" );


/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

//require "file.php";
//echo"<p>Continue</p>";