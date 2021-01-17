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
$db = new SQLite3($_SERVER['DOCUMENT_ROOT']."/bd.db");

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