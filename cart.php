<?php include ('header.php') ?>
<?php if(isset($_SESSION['cart'])){ ?>
<div>

    <table class="cart padding_site">

        <tr>
            <th colspan="2">NAME BRAND</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>TOTAL</th>
            <th></th>
        </tr>

            <?php foreach ($_SESSION['cart'] as $key => $value){ ?>
                <tr>
                    <td colspan="2"><?= $value[0] ?></td>
                    <td><?= $value[1] ?></td>
                    <td><input class="input_cartproduct" placeholder="<?= $value[2] ?>"></td>
                    <td><?= $value[1]*$value[2] ?></td>
                    <td class="delete_product" onclick="delete_in_cart(<?= $key ?>) ">delete</td>
                </tr>
            <?php } ?>

    </table>


</div>
<div class="total padding_site">
    For payment : <?= $_SESSION['total_cost'] ?>$
    <div class="cart_buy">BUY NOW</div>
</div>
<?php }else{ ?>
    <div class="total padding_site">Cart is empty</div>
    <?php } ?>

<?php include ('footer.php') ?>