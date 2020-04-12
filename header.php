<?php session_start() ?>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel='stylesheet' href="font/Bebas/bebasneue.css">
    <link rel='stylesheet' href="font/OpenSans/opensans.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel='shortcut icon' type="image/gif" href="images/3imJ.gif">

    <title>Aditii</title>
</head>
<body>
<header>
    <div class="hdr">
        <div class="first_hdr padding_site">
            <div >
                <a href="/">
                    <img src="images/logo.png" alt="" >
                </a>

            </div>
            <div class="searchblock">

                <img src="images/search.png" alt="" >
            </div>
            <div class="">
                <a href="/cart.php"><img src="images/Shape.png" alt="" > <a class="price">$<?= $_SESSION['total_cost']?$_SESSION['total_cost']:0 ?></a></a>

            </div>
        </div>
        <div class="menu padding_site">
            <a href="/" class="menu_list">HOME</a>
            <a href="sale.php" class="menu_list">SALE</a>
            <a href="filter.php?category=handbags" class="menu_list">HANDBAGS</a>
            <a href="filter.php?category=wallets" class="menu_list">WALLETS</a>
            <a href="filter.php?category=accessories" class="menu_list">ACCESSORIES</a>
            <a href="filter.php?category=men" class="menu_list">MENS STORE</a>
            <a href="filter.php?category=shoes" class="menu_list">SHOES</a>
            <a href="filter.php?category=vintage" class="menu_list">VINTAGE</a>
            <a class="menu_list">SERVICE</a>
            <a class="menu_list">CONTACT US</a>

        </div>
    </div>

</header>