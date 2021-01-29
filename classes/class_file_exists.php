<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 22:48
 */

/**
 * Class Class_File_Exists
 * Проверяем есть ли нужный файл шаблона
 */
class Class_File_Exists
{
    static function test($name_content){
        /**
         * На хостинге документ_рут возврашает корневой домен, вместо папки поддомена
         * поэтому костыль
         */
        $real_path_arr = explode('/', dirname(__FILE__));
        array_pop($real_path_arr);
        //var_dump($real_path_arr);
        $real_path = implode('/', $real_path_arr);
        $path  = $real_path.'/'.TP_FOLDER;
        //echo $path;
        $filename = $name_content.'.php';
        if (file_exists($path.'/'.$filename)) {
            return true;
        } else {
            return false;
        }
    }
}