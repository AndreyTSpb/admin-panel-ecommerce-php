<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 12:33
 */

class Class_Generate_Hash_Key
{
    static function gen(){

        $arr = array(
            'a','b','c','d','e','f','g','h','i','j','k','l',
            'm','n','o','p','r','s','t','u','v','x','y','z',

            'A','B','C','D','E','F','G','H','I','J','K','L',
            'M','N','O','P','R','S','T','U','V','X','Y','Z',

            '1','2','3','4','5','6','7','8','9','0'
        );

        // Генерируем hash
        $hash = "";

        for($i = 0; $i < 8; $i++)
        {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $hash .= $arr[$index];
        }

        return $hash;
    }
}