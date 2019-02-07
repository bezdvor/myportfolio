<?php

class DesignController
{
    public function actionIndex($params)
    {
        $id = intval($params[0]);
        $pageNumber = intval($params[1]);
        if (!$pageNumber) {
            $pageNumber = 1;
        }
        $countOnPage = 12;
        $designItemsCount = ($pageNumber - 1) * $countOnPage;
        if ($id) {
            $designList = Design::getDesignsByCategoryId($id, $designItemsCount, $countOnPage);
            $designCount = Design::getDesignCountByCategory($id);
            $paginationPath = "/$id/page-";
        } else {
            $designList = Design::getDesigns($designItemsCount, $countOnPage);
            $designCount = Design::getDesignCount();
            $paginationPath = "/page-";
        }
        $designCount = intval($designCount);
        $categories = Design::getCategories();
        include ROOT . '/views/site/index.php';
        $pagination = new Pagination($designCount, $countOnPage, $pageNumber, $paginationPath);
        echo $pagination->show();
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
}