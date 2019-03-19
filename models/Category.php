<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.12.2018
 * Time: 20:31
 */

class Category
{
    public static function getCategoriesList()
    {
        $conn = Db::getConnection();
        $sql = "select id, name from category order by id asc";
        $result = $conn->query($sql);
        $categories = $result->fetch_all(MYSQLI_ASSOC);
        return $categories;
    }

    public static function getDesignByCategoryId($id)
    {
        $id = intval($id);
        $conn = Db::getConnection();
//        $sql = "SELECT mydesign.id, title, img, descr, category.name FROM mydesign
//			INNER JOIN design_category ON mydesign.id = design_category.design_id
//			INNER JOIN category ON design_category.category_id = category.id
//			WHERE design_category.category_id=$id
//			ORDER BY mydesign.id";
        $sql = "select mydesign.id, title, img, descr from mydesign where category_id=$id";
        $result = $conn->query($sql);
        $categorydesigns = $result->fetch_all(MYSQLI_ASSOC);
        return $categorydesigns;
    }
}