<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 22:01
 */

/**
 * Class Class_Get_Route
 * получаем какой сонтент отображать из пути
 */
class Class_Get_Route
{
    static function get(){
        /**
         * разделяем строку на переменные и путь
         * разделитель ?, разделитель пременных &
         */
        $route_arr = explode('?', $_SERVER['REQUEST_URI']);

        if(!empty($route_arr[0])){
            $route_str = ltrim($route_arr[0], "/");
        }else{
            $route_str ='';
        }
        if(!empty($route_arr[1])){
            $param_str = $route_arr[1];
        }else{
            $param_str ='';
        }

        /*Делим строку пути на состовлющие: значение в по первому ключу адрес страницы*/
        $routes = explode('/', $route_str);
        $content = trim($routes[0],'.html');

        if(empty($content) OR !Class_File_Exists::test($content)){
            $content = 'dashboard';
        }
        /**
         * Получаем переменные если переданы
         */
        $params = array();
        if(!empty($param_str)){
            $par = explode('&', $param_str);
            /*разделяем параметры на ключ = значение, разделитель =*/
            foreach ($par as $val){
                list($key, $item) = explode('=', $val);
                $params[$key] = $item;
            }
        }

        return compact('content', 'params');
    }
}