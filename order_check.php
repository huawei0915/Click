<?php require __DIR__ . '/__db_connect.php';


if (!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);

    $sql = sprintf(
        "SELECT * FROM `p_products` WHERE `sid` IN (%s)",
        implode(',', $keys)
    );
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $dict = array();
    foreach ($rows as $r) {
        $dict[$r['sid']] = $r;
    }
    $_SESSION['order']=$_SESSION['cart'];
    // print_r( $_SESSION['order']);
    // exit;
unset ($_SESSION['cart']);

} else {
    header('Location: product-list.php'); //頁面跳轉 產品清單
    exit;
}



$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` =7");
$stmt_tool = $pdo->query($p_tool);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>

<div class="bg_mber">
    <!-- -----order_check----- -->
    <div class="container">
        <div class="order_checkImg">
            <img src="img/order_check.svg" alt="">
        </div>

        <!-- ----products_list----- -->
        <div class="container ">

            <?php foreach ($keys as $k) :
                $r = $dict[$k];
                ?>
            <div class="shap_list_main p-item mb-3" data-sid="<?= $r['sid'] ?>">
                <img src="./img/product/<?= $r['images'] ?>.png" alt="">
                <h4 class="productsName"><?= $r['model'] ?></h4>
                <h5 class="productsPrice price" data-price="<?= $r['price'] ?>"></h5>
                <div class="quantity qty" data-qty="<?= $_SESSION['order'][$k] ?>">
                    <!-- <button type="button" class="btn btn-outline-secondary down">-</button> -->
                    <input class="mx-1" type="text" name="quantity_input" id="quantity_number1" value="<?= $_SESSION['order'][$k] ?>" min="1" max="10" data-num="1" readonly>
                    <!-- <button type="button" class="btn btn-outline-secondary up">+</button> -->
                </div>
                <div class="money productsPrice">NT$<span class="subtotal productsPrice"></span></div>
                <!-- <p class="remove-btn">X</p> -->
            </div>
            <?php endforeach; ?>
        </div>
       
        <!-- -----BackHome & orderlist----- -->
        <div class="container">
            <div class="order_checkButton d-flex">
                <a onclick="check();" class="checkbutton_orderlist">訂單查詢</a>
                <a href="index.php" class="checkbutton_backhome">回首頁</a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>


<script>
  

    var p_items = $('.p-item');
    // var remove_btns = $('.remove-btn');

    var dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    p_items.each(function() {
        var price = $(this).find('.price').attr('data-price');
        var qty = $(this).find('.qty').attr('data-qty');
        $(this).find('.subtotal').text(dallorCommas(price * qty));
        $(this).find('.price').text(dallorCommas(price));

        // select element
        $(this).find('.qty').val(qty);
    });

    $('.qty button').on('click', function() {
        var tr = $(this).closest('.p-item');
        var sid = tr.attr('data-sid');
        var price = tr.find('.price').attr('data-price');
        var qty = $(this).siblings("input").val();
        console.log(qty);
        $.get('add_to_cart.php', {
            sid: sid,
            qty: qty
        }, function(data) {
            calcQty(data);
            tr.find('.subtotal').text(dallorCommas(price * qty));
            calcTotalPrice();
        }, 'json');
    });

    function calcTotalPrice() {
        var t = 0;
        $('.p-item').each(function() {
            var price = $(this).find('.price').attr('data-price');
            var qty = $(this).find('.qty').val();

            t += price * qty;
        });

        $('#total_price').text(dallorCommas(t));
    }
    calcTotalPrice();

    function check() {
        if( <?= !empty($_SESSION['loginUser']) ? 'true' : 'false' ?> ){
            window.location("mber_profile.php?aaa=3");
        }else{ 
            show_warning($('#WY-loginWarning'),"請先登入或註冊會員");
        }
    }

    
    

</script>




<?php include __DIR__ . '/__html_end.php' ?>