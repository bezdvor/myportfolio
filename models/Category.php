<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.12.2018
 * Time: 20:31
 */

class Category
{
public static function getCategoriesList(){
   $conn = Db::getConnection();
   $sql = "select id, name from category order by id asc";
   $result = $conn->query($sql);
   $categories = $result->fetch_all(MYSQLI_ASSOC);
   return $categories;
}
public static function getDesignByCategoryId($id){
    $conn = Db::getConnection();
    $sql = "select id, title, img, descr from mydesign where category_id =$id";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    return $data;
}
}