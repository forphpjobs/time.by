<?php
include_once "components/Router.php";
include_once "components/Db.php";

$app=new Router(); // создаем экземпляр роутера
$app->Run();// вызываем метод маршрутизации
