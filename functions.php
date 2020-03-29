<?php

function get_produts(){
    include ('./config.php');
    $link = mysqli_connect($settings['host'],$settings['user'],$settings['password'],$settings['database'],$settings['port'])
    or die("Ошибка " . mysqli_connect_errno());
    mysqli_query($link,"SET NAMES 'utf8'");
    mysqli_query($link,"SET CHARACTER SET 'utf8'");
    mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");
    $result = $link->query('SELECT * FROM `products`');
    $products = array();
    for ($i=0;$i<$result->field_count;$i++){
        $products[] = $result->fetch_assoc();
    }
    $link->close();
    return $products;

}
