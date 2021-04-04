<?php


class Content
{
    public static function getContentAbout(){

        $db=Db::connect();
        $query=$db->query("SELECT content FROM content where name='about'")->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    public static function getContentPortfolio(){

        $db=Db::connect();
        $query=$db->query("SELECT content FROM content where name='portfolio'")->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    public static function getContentBlog(){

        $db=Db::connect();
        $result=$db->query("SELECT * FROM blog")->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}