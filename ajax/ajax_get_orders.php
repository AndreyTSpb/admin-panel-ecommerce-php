<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 17/01/2021
 * Time: 20:44
 */
/**
 * Выборка всех заказов
 */

/*
 * "Order":       kol++,
    "date":   "2011/04/25",
    "Custommer_name":     "Tiger Nixon",
    "Custommer_Email": "sophia@gmail.com",
    "Due_date":     "2011/04/25",
    "Balance":       "5421",
    "Amount":       "$3,120"
 */

$db = new SQLite3($_SERVER['DOCUMENT_ROOT']."/bd.db");

$select = "SELECT * FROM orders ORDER BY order_date DESC";
$r = $db->query($select);
if(!$r){
    return false;
}
$arr = [];
while ($row = $r->fetchArray(1)) {
    $arr[] = [
        'Order'           => $row['order_id'],
        'date'            => date('d/m/Y', strtotime($row['order_date'])),
        'Custommer_name'  => $row['custommer_name'],
        'Custommer_Email' => $row['custommer_email'],
        'Due_date'        => date('d/m/Y', strtotime($row['due_date'])),
        'Balance'         => '$'.$row['balance'],
        'Amount'          => '$'.$row['amount']
    ];
}

echo json_encode($arr);
exit();