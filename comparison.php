<?php require __DIR__ . '/__db_connect.php';

$sql_camera = "SELECT `product_name` FROM `products`";
$totalRows_camera = $pdo->query($sql_camera)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_camera']=$totalRows_camera;   //取得相機型號

$sql_lens = "SELECT `model` FROM `lens` ";
$totalRows_lens = $pdo->query($sql_lens)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_lens']=$totalRows_lens;      //取得鏡頭型號

// print_r($totalRows_camera);
// echo '<hr>';
// echo '<br>';
// echo '<br>';
// var_dump($totalRows_lens);
// exit;
// echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>
<div class="container" style="background:#F1F1F1;">
    <div class="pro_compar">
        <div class="pro_left">
            <div class="pro_title">
                <h4>產品比較</h4>
            </div>
            <div class="cate">
                <ul>
                    <li><a href="#">相機</a></li>
                    <li><a href="#">鏡頭</a></li>
                </ul>
            </div>
            <div class="format">
                規格
            </div>
            <div>
                廠牌<br>
                型號<br>
                商品簡介<br>
                相機格式<br>
                感光元件<br>
                感光元件像素<br>
                有效像素<br>
                感光元件大小<br>
                感光元件格式<br>
                感光元件種類<br>
                最大解像度<br>

            </div>
        </div>

        <div class="pro_right d-flex">

            <div class="d-flex pro_right_select1">
                <div class="mr-3 ">
                    <select class="form-control">
                    <?php foreach($totalRows_camera as $c): ?>
                        <!-- <option>產品選擇</option> -->
                        <option ><?= $c ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="pro_pic_info card">
                        <figure>
                            <img src="img/product/CC-01.png" alt="">
                        </figure>
                        <h6>Canon EOS 5D Mark IV</h6>
                        <h5>NT$1111,000</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select2">
                <div class="mr-3">
                    <select class="form-control">   
                    <?php foreach($totalRows_lens as $l): ?>

                        <!-- <option>產品選擇</option> -->
                        <option ><?= $l ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="pro_pic_info card">
                        <figure>
                        <img src="img/product/CC-01.png" alt="">
                        </figure>
                        <h6></h6>
                        <h5></h5>
                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select3">
                <div class="mr-3">
                    <select class="form-control ">
                        <option>產品選擇</option>
                    </select>
                    <div class="pro_pic_info card">
                        <figure>
                        <img src="img/product/CC-01.png" alt="">
                        </figure>
                        <h6></h6>
                        <h5></h5>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>