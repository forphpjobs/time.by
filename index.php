<?php
include_once "components/Router.php";
include_once "components/Db.php";
include_once "model/Content.php";

$app=new Router(); // создаем экземпляр роутера
$app->Run();// вызываем метод маршрутизации
