<?php


class AboutController
{
    public static function actionIndex(){
        $content=Content::getContentAbout();

        include_once "layouts/about/index.php";
    }
}