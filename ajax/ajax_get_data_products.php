<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 16/01/2021
 * Time: 14:03
 */
/**
 * Выборка данных о товарах
 */

/**
 * На хостинге документ_рут возврашает корневой домен, вместо папки поддомена
 * поэтому костыль
 */
$real_path_arr = explode('/', dirname(__FILE__));
array_pop($real_path_arr);
//var_dump($real_path_arr);
$real_path = implode('/', $real_path_arr);

$db = new SQLite3($real_path."/bd.db");

$select = "SELECT * FROM products";
$r = $db->query($select);
if(!$r){
    return false;
}
$arr = [];
while ($row = $r->fetchArray(1)){

    $arr[] = [
        'No'=> $row['product_id'],
        'Product_Name' => $row['name'],
        'Photo' => '<img src="../web/img/'.$row['img'].'" alt="" srcset="">',
        'Link' => '<a href="'.$_SERVER['DOCUMENT_ROOT'].'/'.$row['seo_link'].'.html">Ссылка на страницу</a>',
        'Qnt' => $row['qnt'],
        'Price' => $row['price']
    ];

}

echo json_encode($arr);
exit();