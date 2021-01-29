<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/01/2021
 * Time: 20:41
 */

/**
 * Connect bd
 */
require_once __DIR__ . '/config/config.php';

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/'. mb_strtolower($class_name) . '.php';
});

/**
 * Авторизация
 */
if(isset($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['pass'])){
    Class_Login::login($_POST['email'], $_POST['pass']);
}

if(Class_Test_Access::test()){
    /**
     * Если авторизация прошла
     * 1) получаем из урла ссылку на страницу
     * 2) Генерируем вьюху с нужной страницы
     */
    $arr = Class_Get_Route::get();
    Class_Generate_View::generate($arr['content'], 'tp');
    exit();
}else{
    /**
     * если не прошел проверку (нет правельного токена в куках)
     * перекидываем на страницу входа
     */
    Class_Generate_View::generate('login', 'tp_login');
    exit();
}