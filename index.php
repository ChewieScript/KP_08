<?php include ("./header.php");
include ('functions.php');
$produts = get_produts(); ?>
<div class="BANNER padding_site">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <img src="images/slider_1.png" alt="" >
                <div class="banner_info">
                    <h1>COWHIDE<br>STANDARD CREW</h1>
                    <p>White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of organic cotton and comes in a regular fit.</p>
                    <div class="input_shownow">SHOP NOW</div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="categories padding_site">
    <div class="categ_block">
        <div class="fon_images"><img id="categ_shoesimg" src="images/categories1.png" alt="" ></div>
        <div class="categ_infoblock">
            <a>BRANDED <br> SHOES</a>
            <div class="input_shop">SHOP</div>
        </div>
    </div>
    <div class="categ_block">
        <div class="fon_images"><img src="images/categories2.png" alt="" ></div>
        <div class="categ_infoblock">
            <a>BRANDED <br> TSHIRTS</a>
            <div class="input_shop">SHOP</div>
        </div>
    </div>

    <div class="categ_block">
        <div class="fon_images"><img src="images/categories3.png" alt="" ></div>
        <div class="categ_infoblock">
            <a>BRANDED <br> CARGOS</a>
            <div class="input_shop">SHOP</div>
        </div>
    </div>

</div>

<div class="product">
    <div class="feat_prod padding_site">
        <h2>FEATURED PRODUCTS</h2>
    </div>
    <div class="prod_shop padding_site">
        <?php foreach ($produts as $product){
            if($product['featured'] === 'Y'){?>
                <div class="prod_block">
                    <div class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <img src="<?= $product['img_path'] ?>" alt="" >
                            </div>
                            <div class="loop-action">
                                <a class="add-to-cart <?= 'product'.$product['ID'] ?>" >QUICK VIEW</a>
                                <a class="loop-add-to-cart">BUY</a>
                            </div>
                        </div>
                    </div>
                    <h3><?= $product['name'] ?></h3>
                    <a>$<?= $product['cost'] ?></a>
                    <div class="input_buy" onclick="send_to_cart(<?= $product['ID'] ?>,'<?= $product['name'] ?>',<?= $product['cost'] ?>)">BUY NOW</div>

                </div>

                <div class="blockcentr product_info <?= 'product'.$product['ID'] ?>" >
                    <div class="img_wrap">
                        <img src="<?= $product['img_path'] ?>" alt="" >
                    </div>
                    <div>
                        <ul>
                            <li>Gender: <?= $product['gender'] ?></li>
                            <li>qewqwe</li>
                            <li>qewqwe</li>
                        </ul>
                    </div>
                </div>

                <?php } ?>
        <?php } ?>
    </div>

    <div class="tytoknoall"></div>
</div>
<?php include ("./footer.php")?>