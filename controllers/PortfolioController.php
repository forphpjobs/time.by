<?php


class PortfolioController
{
        public static function actionIndex(){
            include_once "model/Content.php";
            $content=Content::getContentPortfolio();

            include_once "layouts/portfolio/index.php";
        }
}