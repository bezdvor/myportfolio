<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.01.2019
 * Time: 13:39
 */

class AdminController
{
    public function actionIndex()
    {
        $login = '';
        $pass = '';
        if (isset($_POST['submit'])){
            $login = $_POST['adminLogin'];
            $pass = $_POST['adminPass'];
            $id = time() . rand(0, 1000000000);
            $isAdmin = Admin::setPass($id, $login, $pass);
        }
        if ($_POST['adminLogin'] === 'mybezdvor' AND $_POST['adminPass'] === '24artem13') {
            $_SESSION['admin'] = 'root';
            include ROOT . '/views/site/admin.php';
            return;
        }
        if ($_SESSION['admin'] === 'root') {
            include ROOT . '/views/site/admin.php';
        } else {
            include ROOT . '/views/site/registerAdmin.php';
        }
    }

    public function actionRegister(){

    }

    public function actionAddPost()
    {
        if (isset($_POST['sub'])) {
            $userfile = array(
                'name' => $_FILES['userfile']['name'],
                'tmp_name' => $_FILES['userfile']['tmp_name']
            );
            $postTitle = $_POST['postTitle'];
            $postText = $_POST['postText'];
            $postCat = intval($_POST['postCat']);
            if (Admin::addPost($postTitle, $postCat, $postText, $userfile)){
                echo '<h3>Post has been added</h3>';
            } else {
                echo '<h3>Error to added post</h3>';
            }
        }
        $this->actionIndex();
    }
    public function actionDestroy(){
        unset($_SESSION['admin']);
        session_destroy();
        $this->actionIndex();
    }

//    end of class
}