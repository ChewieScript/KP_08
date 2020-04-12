<?php
session_start();
include ('../config.php');
$query_string = '';
$fields_name = '';
$product_list = '';
foreach ($_POST as $key => $value){
    $fields_name.= '`'.$key.'`,';
    $query_string.= '"'.$value.'",';
}
$query_string = rtrim($query_string,',');
$fields_name = rtrim($fields_name,',');

foreach ($_SESSION['cart'] as $key => $value){
    $product_list.= $key.',';
}
$product_list = rtrim($product_list,',');
$query_string.=',"'.$product_list.'"';
$fields_name.=',`products_id`';

$link = mysqli_connect($settings['host'],$settings['user'],$settings['password'],$settings['database'],$settings['port'])
or die("Ошибка " . mysqli_connect_errno());
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET 'utf8'");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");
$result = $link->query('INSERT INTO orders ('.$fields_name.') VALUES ('.$query_string.')');
echo 'OK';

var_dump($product_list);
