<?php  require __DIR__ . '/__db_connect.php';


// if(!isset($_GET['sid'])){
//     header('Location: ./');
//     exit();
// }
$member = isset($_SESSION['loginUser']) ? intval($_SESSION['loginUser']['sid']) :0 ;


$sid = isset($_GET['sid']) ? $_GET['sid'] : " ";
$sql="SELECT `p_products`.*, `collection`.`member_sid`,`collection`.`p_products_sid` FROM `p_products` JOIN `collection` ON `p_products`.`sid` = `collection`.`p_products_sid` WHERE `p_products`.`sid` =".$_GET['sid'];
$stmt= $pdo->query($sql);
$row = $stmt->fetch();





?>


<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>


<div class="container">
    <?php //foreach ($rows as $r) : ?>
        <div class="prdtop p-item" data-sid="<?= $row['sid'] ?>">

            <div class="d-flex">
                <figure class="prdpic"><img src="./img/product/<?= $row['images'] ?>.png" alt=""></figure>
                <div class="prd_introduct">
                    <h1><?= $row['model'] ?></h1>
                    <p><?= $row['description'] ?></p>
                    <!-- <p>期待已久的EOS 5D Mark IV數位單眼相機搭載全新設計的3,040萬像素全片幅CMOS影像感測器及革命性Dual Pixel RAW，以追求更高影像品質；更配備承襲自旗艦型號EOS-1D X Mark II、全部61點自動對焦點均支援f/8光圈自動對焦的先進61點自動對焦系統及卓越的「雙像素CMOS自動對焦」技術，進一步提升攝影、錄影的自動對焦表現，同時支援DCI 4K短片拍攝，勢將拍攝錄影全面體驗進一步普及化。</p> -->
                </div>
            </div>
            <div class="prdprice d-flex">
                <h6>建議售價</h6>
                <h5>NT$<?= $row['price'] ?></h5>
            </div>
            <div class="prd_btn d-flex">
                <button type="button" class="btn btn-outline-secondary prd_comparison">商品比較</button>

                <button type="button" class="btn btn-outline-secondary prd_collection" ><i class="far fa-star <?= $row['sid']==$row['p_products_sid'] && $row['member_sid'] == $member ? 'fas' : 'far' ?>" id="myclt"></i><?= $row['sid']==$row['p_products_sid'] && $row['member_sid'] == $member ? '已收藏' : '收藏' ?></button>
                

                <div class="quantity">
                    <button type="button" class="btn btn-outline-secondary down">-</button>
                    <input type="text" name="quantity_input" id="quantity_number" value="1" min="1" max="10">
                    <button type="button" class="btn btn-outline-secondary up">+</button>
                </div>

                <button type="button" class="btn btn-outline-secondary prd_car buy-btn">放入購物車</button>
            </div>
        <?php //endforeach; ?>
        <div class="prd_specification d-flex">
            <div class="specification_left">
                <ul>
                    <li>堅固可靠鎂合金機身及防塵防水滴設計</li>
                    <li>高速DIGIC 6+ 數位影像處理器</li>
                    <li>內建具備「數位鏡頭優化（DLO）」功能的專用影像處理器</li>
                    <li>約3,040萬像素下實現最高約7張/秒連拍</li>
                    <li>內建Wi-Fi/NFC，支援FTP檔案傳輸及連接智慧型手機</li>
                    <li>3.2 吋Clear View II LCD螢幕支援觸控螢幕功能</li>
                </ul>
            </div>
            <div class="specification_right">
                <ul>
                    <li>全新研發約3,040萬像素全片幅CMOS影像感測器</li>
                    <li>標準ISO範圍100-32000</li>
                    <li>高精確度61點高密度自動對焦感應器</li>
                    <li>支援數位電影標準 DCI 4K</li>
                    <li>約150,000像素RGB+IR測光感應器</li>
                    <li>內建GPS接收器及支援記錄器功能</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="prd_dtlspec">
        <div class="dtlspec">
            <h4>詳細規格</h4>
            <img class="spec" src="img/spec.png" alt="">
            <img class="spec768" src="img/spec768.png" alt="">
        </div>
    </div>

    <div class="prd_characteristic">
        <h4>產品特色</h4>
        <div class="prd_charpic">
            <img class="charpic" src="img/charpic.png" alt="">
            <img class="charpic768" src="img/charpic768.png" alt="">
        </div>
    </div>

    <div class="prddown">
        <div class="annex">
            <h4>隨機附件</h4>
            <div class="prd_annex">
                <img src="img/canon_annex.jpg" alt="">
                <ul>
                    <li>EOS 5D Mark IV 數位相機</li>
                    <li>電池LP-E6N</li>
                    <li>充電器LC-E6E（附電源線）</li>
                    <li>相機帶 EW-EOS5DMKIV</li>
                    <li>界面連接線IFC-150U II（附連接線保護器）</li>
                    <li>相機使用說明書及Wi-Fi（無線通訊）功能（基本）使用說明書</li>
                    <li>CD-ROM (電子版繁體中文使用手冊)</li>
                    <li>EOS DIGITAL Solution Disk（CD-ROM）</li>
                    <li>中文入門指南</li>
                    <li>產品保固卡</li>
                </ul>
            </div>
        </div>

        <div class="prd_text">
            <h4>產品實測</h4>
            <div class="text_cards">
                <div class="tcs">
                    <a href="img/text_big_pic1.jpg">
                        <img src="img/prd_text_pic1.jpg" alt="">
                    </a>
                    <h6>大鬼湖台灣杉</h6>
                    <p>攝影：雪羊snow ram</p>
                    <ul>
                        <li>EOS 6D</li>
                        <li>EF 16-35mm f/2.8L II USM</li>
                        <li>光圈 F8</li>
                        <li>感光度 ISO 200</li>
                        <li>快門 1/80 秒</li>
                    </ul>
                </div>
                <div class="tcs">
                    <a href="img/text_big_pic2.jpg">
                        <img src="img/prd_text_pic2.jpg" alt="">
                    </a>
                    <h6>奇萊山屋日落火燒雲</h6>
                    <p>攝影：雪羊snow ram</p>
                    <ul>
                        <li>EOS 5D Mark IV</li>
                        <li>EF 50mm f/1.2L USM</li>
                        <li>光圈 F13</li>
                        <li>感光度 ISO 100</li>
                        <li>快門 1/40 秒</li>
                    </ul>
                </div>
                <div class="tcs">
                    <a href="img/text_big_pic3.jpg">
                        <img src="img/prd_text_pic3.jpg" alt="">
                    </a>
                    <h6>西稜奇峻山銀河</h6>
                    <p>攝影：雪羊snow ram</p>
                    <ul>
                        <li>EOS 5D Mark IV</li>
                        <li>EF 16-35mm f/2.8L II USM</li>
                        <li>光圈 F2.8</li>
                        <li>感光度 ISO 2000</li>
                        <li>快門 15 秒</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>





</div>




<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
// function myFunction() {
//   var x = document.getElementById("myclt");
//       x.classList.toggle("far fa-star");
      
//   if (x.innerHTML === "A") {
//     x.innerHTML = "B";
//     x.classList.toggle("fas fa-star");
//   } else {
//     x.innerHTML = "A";
//     x.classList.toggle("far fa-star");
//   }
// }
</script>

<script>
    var input = $('#quantity_number'),
        btnUp = $('button.up'),
        btnDown = $('button.down');

    btnUp.on("click", function() {
        var max = parseInt(input.attr("max")),
            val = parseInt(input.val());

        if (val < max && val != max) {
            val++;
            input.val(val);
        }
    });

    btnDown.on("click", function() {
        var val = parseInt(input.val());

        if (val > 1) {
            val--;
            input.val(val);
        }
    });

    input.on("focusout", function() {
        var max = parseInt(input.attr("max")),
            val = parseInt(input.val());

        if (val > max) {
            input.val(max);
        }
    });


    var sid = $('.buy-btn').closest('.p-item').attr('data-sid');
    var buy_btn = $('.buy-btn');
    buy_btn.click(function() {
        var p_item = $(this).closest('.p-item');
        
        var qty = p_item.find('#quantity_number').val();
        $.get('add_to_cart.php', {
            sid: sid,
            qty: qty
        }, function(data) {
            calcQty(data);
            alert('感謝加入購物車');

        }, 'json');


    });


$('.prd_collection').click(function(){
    var far=$("#myclt").hasClass("far");
    // var fas=$("#myclt").hasClass("fas");
    <?php if(isset($_SESSION['loginUser'])):?>
        
    if(far){
        $("#myclt").removeClass("far");
        $(this).html(`<i class="fas fa-star" id="myclt"></i>已收藏`);
        like='like'
    }else{
        $("#myclt").removeClass("fas");
        $(this).html(`<i class="far fa-star" id="myclt"></i>收藏`);
        like='dislike'
    }
<?php else: ?>
    alert("請先登入或註冊會員");
<?php endif; ?>



$.ajax({
    type:'POST',
    url:'collection_api.php',
    data:{
        product:sid,
        like:like,
    },
    dataType:'json'}).done(function(){

    })

})



</script>




<?php include __DIR__ . '/__html_end.php' ?>