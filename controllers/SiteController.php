<?php


class SiteController
{
    public static function actionIndex(){

       include_once "layouts/site/index.php";
    }

    public static function actionView($arr){
        var_dump($arr);
        echo "WORKED111";
    }
}