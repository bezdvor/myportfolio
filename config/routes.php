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


    '/design/([0-9]+)' => 'design/design/$1',//конкретная работа по ID
    '/([0-9]+)/page-([0-9]+)' => 'design/index/$1/$2',
    '/page-([0-9]+)' => 'design/index//$1',//пагинация общая постранично
    '/([0-9]+)' => 'catalog/category/$1',
    '/about' => 'design/about',
    '/' => 'design/index',
);
//    '/index.php' => 'design/index',
//    '' => 'design/index',
//    '/([0-9]+)' => 'design/index/$1',//все работы по категориям
//    '/([0-9]+)/page-([0-9]+)' => 'design/index/$1/$2',//пагинация в категории постранично
