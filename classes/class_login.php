<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 11:34
 */

/**
 * Class Class_Login
 * авторизация на сайте
 */
class Class_Login
{
    static function login($login, $pass){
        global $db;
        $pass = md5(trim($pass));
        $login = htmlspecialchars(mb_strtolower(trim($login)));

        $select = "SELECT user_id FROM users WHERE email = :login AND pass = :pass";
        $stmt = $db->prepare($select);

        $stmt->bindValue(':login', $login, SQLITE3_TEXT);
        $stmt->bindValue(':pass', $pass, SQLITE3_TEXT);

        $result = $stmt->execute();
        $row = $result->fetchArray(1);
        //var_dump($row);
        $id = $row['user_id'];
        if($result AND $id > 0){
            /**
             * Если вернулся айди, значит надо сгенерировать хэшкей,
             * добавить его в куки и заслать в БД
             */
            $hash_key = Class_Generate_Hash_Key::gen();

            Class_Work_Cookies::add_hash_key($hash_key);

            /**
             * Запись в БД
             */
            $token = md5($hash_key.SALT); // Хешируем с подсолкой
            $update = "UPDATE users SET hash_key = '".$token."' WHERE user_id = '".$id."';";
            //echo $update;
            $r = $db->query($update);
            //var_dump($r);
            if(!$r){
                echo "error1";
                exit;
            }
            header('Location: /');
            exit();
        }
        exit('error');
    }
}