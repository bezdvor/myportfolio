<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.01.2019
 * Time: 19:10
 */

class CatalogController
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        $designList = Design::getDesignList();
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
        $categories = Category::getCategoriesList();
        $categoryDesigns = Design::getDesignListByCategory($categoryId, $page);
        $total = Design::getTotalDesignInCategory($categoryId);
        $pagination = new Pagination($total, $page, Design::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/site/category.php');
        return true;
    }
    public function actionView($productId){
        $categories = Category::getCategoriesList();
        $designItem = Design::getDesignById($productId);
        require_once (ROOT . '/views/site/view.php');
        return true;
    }
}