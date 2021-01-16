<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/01/2021
 * Time: 21:36
 */

class Class_Test_Access
{
    static function test(){
        if(isset($_COOKIE['token']) AND !empty($_COOKIE['token'])){
            global $db;
            $token = md5($_COOKIE['token'].SALT);
            /**
             * Проверка есть ли такой хеш в БД
             */
            $sql = "SELECT user_id FROM users WHERE hash_key = '".$token."';";
            $result = $db->query($sql);

            // Получаем ассоциативный массив
            $row = $result->fetchArray(SQLITE3_ASSOC);
            if($row){
                return true;
            }
            return false;
        }
    }
}