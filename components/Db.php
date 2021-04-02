<?php


class Db
{
    public static function connect(){

        $db=new PDO("mysql:host=localhost;dbname=timeby",'root','');
        return $db;
    }
}