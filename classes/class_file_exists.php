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
        $path  = $_SERVER['DOCUMENT_ROOT'].'/'.TP_FOLDER;
        $filename = $name_content.'.php';
        if (file_exists($path.'/'.$filename)) {
            return true;
        } else {
            return false;
        }
    }
}