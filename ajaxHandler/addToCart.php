<?php
session_start();
var_dump($_POST);
if (isset($_SESSION['cart'][$_POST['id']])){
    $_SESSION['cart'][$_POST['id']][2]+=1;
}else{
    if(is_array($_SESSION['cart'])){
        $_SESSION['cart'][$_POST['id']] = [$_POST['name'],$_POST['cost'],1];
    }else{
        $_SESSION['cart'] = [];
        $_SESSION['cart'][$_POST['id']] = [$_POST['name'],$_POST['cost'],1];
    }
}
if (isset($_SESSION['total_cost'])){
    $_SESSION['total_cost'] = 0;
}
foreach ($_SESSION['cart'] as $value){
    if (isset($_SESSION['total_cost'])){
        $_SESSION['total_cost']+=$value[1]*$value[2];
    }else{
        $_SESSION['total_cost']=$value[1]*$value[2];
    }
}

var_dump($_SESSION);
