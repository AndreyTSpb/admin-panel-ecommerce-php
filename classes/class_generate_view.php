<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/01/2021
 * Time: 23:10
 */

class Class_Generate_View
{
    static function generate($content_view, $template, $data = null)
    {
        if(is_array($data)) {

            // преобразуем элементы массива в переменные
            extract($data);
        }
        /*
         * JS AND CSS
         */
        $js = AppAsset::js();
        $css = AppAsset::css();

        /*
        динамически подключаем общий шаблон (вид),
        внутри которого будет встраиваться вид
        для отображения контента конкретной страницы.
        */
        include TP_FOLDER.'/'.$template.'.php';
    }
}