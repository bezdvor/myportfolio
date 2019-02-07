<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.11.2018
 * Time: 21:39
 */
return array(
    '/admin/addPost' => 'admin/addPost',
    '/admin/destroy' => 'admin/destroy',
    '/exit' => 'admin/destroy',
    '/admin' => 'admin/index',
    '/([0-9]+)/page-([0-9]+)' => 'design/index/$1/$2',//пагинация в категории постранично
    '/design/([0-9]+)' => 'design/design/$1',//конкретная работа по ID
    '/([0-9]+)' => 'design/index/$1',//все работы по категориям
    '/page-([0-9]+)' => 'design/index//$1',//пагинация общая постранично
    '/' => 'design/index',
//    '/index.php' => 'design/index',
//    '' => 'design/index',
);