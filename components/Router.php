<?php


class Router
{
    private $routes; // переменная в которой хранятся маршруты

    public function __construct(){
        $this->routes=include_once "components/routes.php";
    }

    public function Run(){

        $url=$_SERVER['REQUEST_URI'];
        $url=trim($url, '/');

        $routes=$this->routes;

        foreach ($routes as $route => $path){

            if(preg_match("~$route~",$url)){

                $path=preg_replace("~$route~", $path, $url );
                $path2=explode('/',$path);

                $controller=ucfirst(array_shift($path2))."Controller";
                $action="action".ucfirst(array_shift($path2));
                $params=$path2;
               //var_dump($controller);

                if (file_exists("controllers/$controller.php")){
                    include_once "controllers/$controller.php";
                }else{
                    echo "Don't have file $controller";
                }

                $object= new $controller;
                $object->$action($params);
                die();
            }

        }

    }

}