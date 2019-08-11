<?php require __DIR__ . '/__db_connect.php';
$page_name = 'comparison';
// $sql_camera = "SELECT `product_name` FROM `products`";
// $totalRows_camera_model = $pdo->query($sql_camera)->fetchAll(PDO::FETCH_NUM);
// $result['totalRows_camera_model']=$totalRows_camera_model;   //取得相機型號

// $sql_lens = "SELECT `model` FROM `lens` ";
// $totalRows_lens_model = $pdo->query($sql_lens)->fetchAll(PDO::FETCH_NUM);
// $result['totalRows_lens_model']=$totalRows_lens_model;      //取得鏡頭型號

// $t_sql_camera = "SELECT * FROM `products`";
// $totalRows_camera = $pdo->query($t_sql_camera)->fetchAll(PDO::FETCH_NUM);
// $result['totalRows_camera']=$totalRows_camera;              //取得相機 詳細資訊

// $sql_lens = "SELECT * FROM `lens` ";
// $totalRows_lens = $pdo->query($sql_lens)->fetchAll(PDO::FETCH_NUM);
// $result['totalRows_lens']=$totalRows_lens;                  //取得鏡頭 詳細資訊


// json_encode($result, JSON_UNESCAPED_UNICODE);
// exit;
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
                    <select class="form-control" id="camera">
                    </select>

                    <div class="pro_pic_info card">
                        <?php  ?>
                        <figure>
                            <img src="img/product/<?= $c['images'] ?>.png" alt="" id="cameraPic">
                        </figure>
                        <h6 id="cameraModel"></h6>
                        <h5>NT$1111,000</h5>
                        <?php  ?>
                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select2">
                <div class="mr-3">
                    <select class="form-control" id="lens">

                    </select>
                    <div class="pro_pic_info card">
                        <?php foreach ($totalRows_lens as $l) : ?>

                            <figure>
                                <img src="img/product/<?= $l['images'] ?>.png" alt="">
                            </figure>
                            <h6></h6>
                            <h5></h5>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select3">
                <!-- <div class="mr-3">
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
                </div> -->
            </div>
        </div>


    </div>
</div>




<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
    $.ajax({
        url: 'comparison_api.php',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            var $camera = $('#camera');
            for (var i = 0; i < data['totalRows_camera_model'].length; i++) {
                $camera.append('<option id=' + 'totalRows_camera_model' + i + ' value=' + i + '>' + data['totalRows_camera_model'][i] + '</option>');
            }
            var $lens = $('#lens');
            for (var i = 0; i < data['totalRows_lens_model'].length; i++) {
                $lens.append('<option id=' + 'totalRows_lens_model' + i + ' value=' + i + '>' + data['totalRows_lens_model'][i] + '</option>');
            }


            // var $cameraPic=$("#cameraPic");
            // for (var i=0; i< data['totalRows_camera'].length;i++){
            //     $cameraPic.attr("src",'img/product/'+ [i]['images'] + '.png' );
            // }
            console.log(data['totalRows_camera']);
        }

    });

    $('#camera').change(function() {
        $.ajax({
            url: 'comparison_api.php',
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                var $cameraPic = $("#cameraPic"),
                    $cameraModel = $("#cameraModel");
                for (var i = 0; i < data['totalRows_camera'].length; i++) {
                    // $cameraPic.attr("src", './img/product/' + data['totalRows_camera'][i]['images'] + '.png');
                    // $cameraModel.append(data['totalRows_camera'][i]);
                    console.log(i['product_name']);
                }
                // console.log(data['totalRows_camera']);
            }
        });
    });
</script>




<?php include __DIR__ . '/__html_end.php' ?>