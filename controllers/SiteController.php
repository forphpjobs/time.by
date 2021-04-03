<?php


class SiteController
{
    public static function actionIndex(){

        $date=date('l: d F Y H:i');
        $a=new DateTime('now');
        $b=new DateTime('+4 days');
        $b->modify('+2 year');
        $b->add(new DateInterval('P1M2DT2H12M13S'));

       include_once "layouts/site/index.php";
    }


}