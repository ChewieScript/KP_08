<?php
session_start();
$_SESSION['total_cost']-=$_SESSION['cart'][$_POST['id']][1]*$_SESSION['cart'][$_POST['id']][2];
if (isset($_SESSION['cart'][$_POST['id']])){
   unset($_SESSION['cart'][$_POST['id']]);
   var_dump($_SESSION);
}
