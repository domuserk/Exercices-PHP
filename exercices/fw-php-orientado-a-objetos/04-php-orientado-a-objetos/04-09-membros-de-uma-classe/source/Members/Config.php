<?php


namespace Source\Members;


class Config
{

    public const COMPANY="Brazillian";
     protected const DOMAIN="impcomercial.87@gmail.com";
    private const SECTOR="Educação";

public static $company;
public static $domain;
public static $sector;

public static function setConfig($company,$domain,$sector){
    self::$company=$company;
    self::$domain=$domain;
    self::$sector=$sector;
}

}