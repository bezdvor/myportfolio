<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20.10.2018
 * Time: 11:34
 */

class Design
{
    public static function getDesigns($start, $countOnPage){
        $conn = Db::getConnection();
        $sql = "SELECT id, title, img, descr from mydesign order by id DESC limit $start, $countOnPage";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;

    }

    public static function getDesignsByCategoryId($id, $start, $countOnPage){
        $id = intval($id);
        if ($id){
            $conn = Db::getConnection();
            $sql = "SELECT mydesign.id, title, img, descr, category.name AS category_name
			FROM mydesign
			INNER JOIN design_category ON mydesign.id = design_category.design_id
			INNER JOIN category ON design_category.category_id = category.id
			WHERE design_category.category_id=$id
			ORDER BY mydesign.id
        limit $start, $countOnPage";
            $result = $conn->query($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
    }
    public static function getDesignById($id){
        $id = intval($id);
        if ($id){
            $conn = Db::getConnection();
            $sql = "select * from mydesign where id=$id";
            $result = $conn->query($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data[0];
        }
    }
    public static function getCategories(){
        $conn = Db::getConnection();
        $sql = 'select id, name from category order by id asc';
        $result =$conn->query($sql);
        $categories = $result->fetch_all(MYSQLI_ASSOC);
        return $categories;
    }
    public static function getDesignCount(){
        $conn = Db::getConnection();
        $sql = "select count(*) as count from mydesign";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data[0]['count'];
    }
    public static function getDesignCountByCategory($id){
        $id = intval($id);
        if ($id){
            $conn = Db::getConnection();
            $sql = "select count(*) as count from mydesign
inner join design_category on mydesign.id = design_category.design_id
where design_category.design_id=$id";
            $result = $conn->query($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
    }
}