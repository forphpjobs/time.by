<?php


class Content
{
    public static function getContentAbout(){

        $db=Db::connect();
        $query=$db->query("SELECT content FROM content")->fetch(PDO::FETCH_ASSOC);
        return $query;
    }
}