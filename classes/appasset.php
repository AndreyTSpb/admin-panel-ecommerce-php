<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/01/2021
 * Time: 23:23
 */

class AppAsset
{
    private static $css = [
        'css/bootstrap.min.css',

    ];

    /**
     * js files, ROOT/FOLDER/FILE
     */
    private static $js = [
        'js/jquery-3.3.1.slim.min.js',
        'js/bootstrap.min.js'
    ];

    /**
     * @return bool|string
     * Формируем строчки с сылкой на файлы стилей для подключения в теле шаблона
     */
    public static function css(){
        if(empty(self::$css)) return false;
        $str = "";
        foreach (self::$css as $file_name){
            $str .= "<link href=\"".DOCUMENT_STATIC.DS.$file_name."\" rel=\"stylesheet\"/>\n";
        }
        return $str;
    }

    /**
     * @return bool|string
     * Формируем строчки с сылкой на файлы JS
     */
    public static function js(){
        if(empty(self::$js)) return false;
        $str = "";
        foreach (self::$js as $file_name){
            $str .= "<script src=\"".DOCUMENT_STATIC.DS.$file_name."\"></script>\n";
        }
        return $str;
    }
}