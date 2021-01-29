<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/01/2021
 * Time: 21:44
 */
//Создаём если ее не или открываем базу данных bd.db
$db = new SQLite3("bd.db");
if (!$db) exit("Не удалось создать базу данных!");

//соль
define('SALT','erdliu762hbgfgdamnhf');

/*Урл сайта полный для header-location*/
$protocol = (!empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS'])?"https://":"http://");
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
define('DOCUMENT_ROOT',$protocol.$host.$uri);

