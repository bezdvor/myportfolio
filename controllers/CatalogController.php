<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.01.2019
 * Time: 19:10
 */

class CatalogController
{
//    public function actionIndex()
//    {
//        $categories = Category::getCategoriesList();
//        $designList = Design::getDesignList();
//        require_once(ROOT . '/views/site/index.php');
//        return true;
//    }

    public function actionCategory($params)
    {
        $id = intval($params[0]);
//        $pageNumber = intval($params[1]);
//        if (!$pageNumber){
//            $pageNumber = 1;
//        }
//        $countOnPage = 12;
//        $designItemCount = ($pageNumber - 1) * $countOnPage;

        $categories = Category::getCategoriesList();
        $categoryDesigns = Category::getDesignByCategoryId($id);
        require_once(ROOT . '/views/site/category.php');
    }
//    public function actionView($productId){
//        $categories = Category::getCategoriesList();
//        $designItem = Design::getDesignById($productId);
//        require_once (ROOT . '/views/site/view.php');
//        return true;
//    }
}