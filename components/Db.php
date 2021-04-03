<?php


class Db
{
    public static function connect(){

        $db=new PDO("mysql:host=localhost;dbname=time.by;charset=UTF8",'root','');
       // $db->exec("set names utf8"); второй вариант установки кодировки.
        return $db;
    }
}