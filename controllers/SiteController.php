<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.12.2018
 * Time: 20:28
 */

class SiteController
{
public function actionIndex(){
    $categories = Category::getCategoriesList();
    require_once(ROOT . '/views/site/index.php');
    return true;
}
}