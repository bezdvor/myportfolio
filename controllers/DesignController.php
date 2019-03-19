<?php

class DesignController
{
    public function actionIndex()
    {
            $designList = Design::getDesigns();
        $categories = Design::getCategories();
        include ROOT . '/views/site/index.php';
    }

    public function actionDesign($params)
    {
        $id = $params[0];
        $pageNumber = intval($params[1]);
        $id = intval($id);
        if ($id) {
            $designById =Design::getDesignById($id);
        }
        include ROOT . '/views/site/view.php';
    }
    public function actionAbout(){
        include ROOT . '/views/site/about.php';
    }
}