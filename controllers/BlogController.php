<?php


class BlogController
{
    public static function actionIndex(){
        include_once "model/Content.php";
        $content=Content::getContentBlog();
        include_once "layouts/blog/index.php";
    }
}