<?php
if(!isset($_GET['category'])){
    header('LOCATION: /');
}
include ('header.php');
include ('functions.php');
$products = get_produts();
?>
<div class="product">
	<div class="feat_prod padding_site">
		<h2>FOUND PRODUCTS</h2>
	</div>


	<div class="prod_shop padding_site">
        <?php foreach ($products as $val){
            if (array_search($_GET['category'],explode(',',$val['category']))){?>

                <div class="prod_block">
                    <div class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <img src="<?= $val['img_path'] ?>" alt="" >
                        </div>
                        <div class="loop-action">
                            <a class="add-to-cart <?= 'product'.$val['ID'] ?>" >QUICK VIEW</a>
                            <a class="loop-add-to-cart" onclick="send_to_cart(<?= $val['ID'] ?>,'<?= $val['name'] ?>',<?= $val['cost'] ?>)">BUY</a>
                          </div>
                    </div>
                    </div>
                <h3><?= $val['name'] ?></h3>
                <a>$<?= $val['cost'] ?></a>
                <div class="input_buy" onclick="send_to_cart(<?= $val['ID'] ?>,'<?= $val['name'] ?>',<?= $val['cost'] ?>)">BUY NOW</div>

                </div>
                <div class="blockcentr product_info <?= 'product'.$val['ID'] ?>" >
                    <div class="img_wrap">
                        <img src="<?= $val['img_path'] ?>" alt="" >
                    </div>
                    <div>
                        <ul>
                            <li>Gender: <?= $val['gender'] ?></li>
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
<?php include ('footer.php') ?>