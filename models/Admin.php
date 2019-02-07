<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.01.2019
 * Time: 14:04
 */

class Admin
{
    public static function addPost($title, $categ, $text, $img)
    {
        $imgTmpName = $img['tmp_name'];
        $imgName = iconv("UTF-8", "cp1251", $img['name']);
        $path = "/images/" . $img['name'];
        if (move_uploaded_file($imgTmpName, ROOT . "/images/$imgName")) {
            echo "File uploaded";
        } else {
            echo "File is not uploaded";
        }
        $conn = Db::getConnection();
        $sql = "insert into mydesign (title, category_id, descr, img, date) values('$title', $categ, '$text', '$path', NOW())";
        return $conn->query($sql);
    }

    public static function setPass($id, $login, $pass)
    {
        $conn = Db::getConnection();
        $sql = "insert into adminpass(id, login, password) VALUES ('$id', '$login', '$pass')";
        return $conn->query($sql);
    }

    public static function getPass()
    {
        $conn = Db::getConnection();
        $sql = 'select * from adminpass';
        $result = $conn->query($sql);
        $pass = $result->fetch_all(MYSQLI_ASSOC);
        return $pass;
    }
}