<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 12:36
 */

class Class_Work_Cookies
{
    /**
     * Запись хешключа в куки
     * @param $hash_key
     */
    static function add_hash_key($hash_key){
        setcookie("token",$hash_key,time() + 24*60*60,"/");
    }

    /**
     * Удаление хешключа из куков
     */
    static function del_hash_key(){
        setcookie("token","",time() - 1,"/");
    }
}