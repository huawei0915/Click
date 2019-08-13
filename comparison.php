<?php require __DIR__ . '/__db_connect.php';
$page_name = 'comparison';
$sql_camera = "SELECT * FROM `products`";
$totalRows_camera_model = $pdo->query($sql_camera)->fetchAll();   //取得相機型號

$sql_lens = "SELECT * FROM `lens` ";
$totalRows_lens_model = $pdo->query($sql_lens)->fetchAll();  //取得鏡頭型號

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
                    <li><a class="camera_list">相機</a></li>
                    <li><a class="len_list">鏡頭</a></li>
                </ul>
            </div>
            <div class="format">
                規格
            </div>
            <table class="table show_camera">
                <tbody>
                    <!--
                    <tr>
                        <th>廠牌</th>
                    </tr>
                    <tr>
                        <th>型號</th>
                    </tr>
                    <tr>
                        <th>商品簡介</th>
                    </tr>
                    <tr>
                        <th>相機格式</th>
                    </tr>
                    <tr>
                        <th>感光元件</th>
                    </tr>
                    <tr>
                        <th>感光元件像素</th>
                    </tr>
                    <tr>
                        <th>有效像素</th>
                    </tr>
                    <tr>
                        <th>感光元件大小</th>
                    </tr>
                    <tr>
                        <th>感光元件格式</th>
                    </tr>
                    <tr>
                        <th>感光元件種類</th>
                    </tr>
                    <tr>
                        <th>感光元件濾鏡排列</th>
                    </tr>
                    <tr>
                        <th>最大解像度</th>
                    </tr>
                    <tr>
                        <th>解像度選擇</th>
                    </tr>
                    <tr>
                        <th>壓縮模式</th>
                    </tr>
                    <tr>
                        <th>質素調較</th>
                    </tr>
                    <tr>
                        <th>無壓縮影像格式</th>
                    </tr>
                    <tr>
                        <th>影像比例</th>
                    </tr>
                    <tr>
                        <th>動畫解像度</th>
                    </tr>
                    <tr>
                        <th>動畫種類</th>
                    </tr>
                    <tr>
                        <th>動畫音效</th>
                    </tr>
                    <tr>
                        <th>訊號轉換器</th>
                    </tr>
                    <tr>
                        <th>雜訊消除</th>
                    </tr>
                    <tr>
                        <th>防手震功能</th>
                    </tr>
                    <tr>
                        <th>鏡片組合</th>
                    </tr>
                    <tr>
                        <th>鏡片焦距</th>
                    </tr>
                    <tr>
                        <th>135 格式焦距</th>
                    </tr>
                    <tr>
                        <th>變焦能力</th>
                    </tr>
                    <tr>
                        <th>動畫種類1</th>
                    </tr>
                    <tr>
                        <th>動畫音效1</th>
                    </tr>
                    <tr>
                        <th>訊號轉換器1</th>
                    </tr>
                    <tr>
                        <th>雜訊消除1</th>
                    </tr>
                    <tr>
                        <th>鏡片組合2</th>
                    </tr>

                    <tr>
                        <th>鏡片焦距2</th>
                    </tr>
                    <tr>
                        <th>135 格式焦距2</th>
                    </tr>
                    <tr>
                        <th>變焦能力2</th>
                    </tr>
                    <tr>
                        <th>數碼變焦</th>
                    </tr>
                    <tr>
                        <th>光圈範圍</th>
                    </tr>
                    <tr>
                        <th>焦距變換比率</th>
                    </tr>
                    <tr>
                        <th>AF Assist Light</th>
                    </tr>
                    <tr>
                        <th>手動對焦</th>
                    </tr>
                    <tr>
                        <th>正常對焦範圍</th>
                    </tr>
                    <tr>
                        <th>微距對焦範圍</th>
                    </tr>
                    <tr>
                        <th>鏡頭接環</th>
                    </tr>
                    <tr>
                        <th>轉換鏡頭</th>
                    </tr>
                    <tr>
                        <th>曝光模式</th>
                    </tr>
                    <tr>
                        <th>場景模式</th>
                    </tr>
                    <tr>
                        <th>快門速度</th>
                    </tr>
                    <tr>
                        <th>測光模式</th>
                    </tr>
                    <tr>
                        <th>曝光補償</th>
                    </tr>
                    <tr>
                        <th>自動曝光鎖</th>
                    </tr>
                    <tr>
                        <th>包圍曝光</th>
                    </tr>
                    <tr>
                        <th>ISO 感光值</th>
                    </tr>
                    <tr>
                        <th>白平衡設定</th>
                    </tr>
                    <tr>
                        <th>自拍</th>
                    </tr>
                    <tr>
                        <th>連拍</th>
                    </tr>
                    <tr>
                        <th>定時拍攝</th>
                    </tr>
                    <tr>
                        <th>LCD 熒光幕</th>
                    </tr>
                    <tr>
                        <th>光學觀景器</th>
                    </tr>
                    <tr>
                        <th>播放放大</th>
                    </tr>
                    <tr>
                        <th>儲存媒體</th>
                    </tr>
                    <tr>
                        <th>內存</th>
                    </tr>
                    <tr>
                        <th>跟機記憶體</th>
                    </tr>
                    <tr>
                        <th>接口</th>
                    </tr>
                    <tr>
                        <th>視頻輸出</th>
                    </tr>
                    <tr>
                        <th>打印協定</th>
                    </tr>
                    <tr>
                        <th>電池種類</th>
                    </tr>
                    <tr>
                        <th>電池手柄</th>
                    </tr>
                    <tr>
                        <th>隨機電池及充電器</th>
                    </tr>
                    <tr>
                        <th>電池壽命</th>
                    </tr>
                    <tr>
                        <th>支援火牛輸入</th>
                    </tr>
                    <tr>
                        <th>腳架座材料</th>
                    </tr>
                    <tr>
                        <th>機身重量</th>
                    </tr>
                    <tr>
                        <th>重量含電池</th>
                    </tr>
                    <tr>
                        <th>體積</th>
                    </tr>
                    <tr>
                        <th>搖遠控制</th>
                    </tr>
-->
                </tbody>
            </table>
            <table class="table show_len" style="display:none;">
                <tbody>
                <tr>
                    <th>廠牌</th>
                </tr>
                <tr>
                    <th>型號</th>
                </tr>
                <tr>
                    <th>分類</th>
                </tr>
                <tr>
                    <th>對應最大片幅</th>
                </tr>
                <tr>
                    <th>焦距</th>
                </tr>
                <tr>
                    <th>光圈</th>
                </tr>
                <tr>
                    <th>視角</th>
                </tr>
                <tr>
                    <th>鏡片組</th>
                </tr>
                <tr>
                    <th>光圈葉片數</th>
                </tr>
                <tr>
                    <th>最小光圈</th>
                </tr>
                <tr>
                    <th>最近對焦距離</th>
                </tr>
                <tr>
                    <th>放大倍率</th>
                </tr>
                <tr>
                    <th>對焦系統</th>
                </tr>
                <tr>
                    <th>變焦系統</th>
                </tr>
                <tr>
                    <th>濾光鏡尺寸</th>
                </tr>
                <tr>
                    <th>直徑 x 鏡長</th>
                </tr>
                <tr>
                    <th>重量</th>
                </tr>
                <tr>
                    <th>價錢</th>
                </tr>
                </tbody>
                
            </table>
        </div>

        <div class="pro_right d-flex">

            <div class="d-flex pro_right_select1 ">
                <div class="mr-3 ">
                    <select class="form-control camera_sel" id="camera1" name="camera">
                        <?php foreach ($totalRows_camera_model as $c) : ?>
                        <option value="<?= $c['sid'] ?>"><?= $c['product_name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="pro_pic_info card camera_com">

                        <figure>
                            <img src="img/product/<?= $c['images'] ?>.png" alt="" id="cameraPic">
                        </figure>
                        <h6></h6><?= $c['product_name'] ?></h6>
                        <h5>NT$<?= $c['price'] ?></h5>

                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select2">
                <div class="mr-3">
                    <select class="form-control camera_sel" id="camera2" name="camera">
                        <?php foreach ($totalRows_camera_model as $c) : ?>
                        <option value="<?= $c['sid'] ?>"><?= $c['product_name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="pro_pic_info card camera_com">

                        <figure>
                            <img src="img/product/<?= $c['images'] ?>.png" alt="" id="cameraPic">
                        </figure>
                        <h6></h6><?= $c['product_name'] ?></h6>
                        <h5>NT$<?= $c['price'] ?></h5>

                    </div>
                </div>
            </div>
            <div class="d-flex pro_right_select3">
                <div class="mr-3">
                    <select class="form-control camera_sel" id="camera3" name="camera">
                        <?php foreach ($totalRows_camera_model as $c) : ?>
                        <option value="<?= $c['sid'] ?>"><?= $c['product_name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="pro_pic_info card camera_com">

                        <figure>
                            <img src="img/product/<?= $c['images'] ?>.png" alt="" id="cameraPic">
                        </figure>
                        <h6></h6><?= $c['product_name'] ?></h6>
                        <h5>NT$<?= $c['price'] ?></h5>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<!-- <script>
    $.ajax({
        url: 'comparison_api.php',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            var $camera = $('#camera');
            for (var i = 0; i < data['totalRows_camera_model'].length; i++) {
                $camera.append('<option id=' + 'totalRows_camera_model' + i + ' value=' + data['totalRows_camera_model'][i] + '>' + data['totalRows_camera_model'][i] + '</option>');
            }
            var $lens = $('#lens');
            for (var i = 0; i < data['totalRows_lens_model'].length; i++) {
                $lens.append('<option id=' + 'totalRows_lens_model' + i + ' value=' + data['totalRows_lens_model'][i] + '>' + data['totalRows_lens_model'][i] + '</option>');
            }


            // var $cameraPic=$("#cameraPic");
            // for (var i=0; i< data['totalRows_camera'].length;i++){
            //     $cameraPic.attr("src",'img/product/'+ [i]['images'] + '.png' );
            // }
            // console.log(data['totalRows_camera']);
        }

    });

    var products_container_camera = $('.camera_com');
    var p_item_str_camera = `<figure>
                            <img src="img/product/<%= images %>.png" alt="" id="cameraPic">
                        </figure>
                        <h6 ></h6><%= product_name %?></h6>
                        <h5>NT$<%= price %></h5>`;
    var p_item_fn_camera = _.template(p_item_str_camera);

    $('#camera').change(function() {
        var camera = $('#camera').val()
        var data = {
            camera_sid: camera
        }
        $.ajax({
            url: 'comparison_api.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(data) {
                var totalRows_camera = data.totalRows_camera.length
                totalRows_camera.html("")
                for (var i = 0; i < totalRows_camera; i++) {
                    var camera_images = data.totalRows_camera[i]['images']
                    var camera_model = data.totalRows_camera[i]['model']
                    var camera_price = data.totalRows_camera[i]['price']
                    var camera_array = {
                        'images': tools_images,
                        'model': tools_model,
                        'description': tools_description,
                        'price': tools_price,
                    }
                    totalRows_camera.append(p_item_fn_camera(camera_array));
                }

            }
        });
    });
</script> -->
<script>

let camera_data = <?= json_encode($totalRows_camera_model, JSON_UNESCAPED_UNICODE) ?>;
let len_data = <?= json_encode($totalRows_camera_model, JSON_UNESCAPED_UNICODE) ?>;

let showCamera = $('.show_camera tbody');
let camera_sels = $('.camera_sel');

let camera_dict = {};

let cols_camera = [ `廠牌`, `型號`, `商品簡介`, `相機格式`, `感光元件像素`, `有效像素`, `感光元件大小`, `感光元件格式`, `感光元件種類`, `感光元件濾鏡排列`, `感光元件生產商`, `最大解像度`, `解像度選擇`, `壓縮模式`, `質素調較`, `無壓縮影像格式`, `影像比例`, `動畫解像度`, `動畫種類`, `動畫音效`, `訊號轉換器`, `雜訊消除`, `防手震功能`, `鏡片組合`, `鏡片焦距`, `135 格式焦距`, `變焦能力`, `動畫種類1`, `動畫音效1`, `訊號轉換器1`, `雜訊消除1`, `鏡片組合2`, `鏡片焦距2`, `135 格式焦距2`, `變焦能力2`, `數碼變焦`, `光圈範圍`, `焦距變換比率`, `自動對焦情況`, `AF Assist Light`, `手動對焦`, `正常對焦範圍`, `微距對焦範圍`, `鏡頭接環`, `轉換鏡頭`, `曝光模式`, `場景模式`, `快門速度`, `測光模式`, `曝光補償`, `自動曝光鎖`, `包圍曝光`, `ISO 感光值`, `白平衡設定`, `自拍`, `連拍`, `定時拍攝`, `LCD 熒光幕`, `光學觀景器`, `播放放大`, `儲存媒體`, `內存`, `跟機記憶體`, `接口`, `視頻輸出`, `打印協定`, `電池種類`, `電池手柄`, `隨機電池及充電器`, `電池壽命`, `支援火牛輸入`, `腳架座材料`, `機身重量`, `重量含電池`, `體積`, `搖遠控制`, `隨機軟件`, `隨機物件`];

for(let s in camera_data) {
    let row = camera_data[s];
    camera_dict[row.sid] = row;
}


for(let col_c of cols_camera){   //顯示欄位名稱  cols帶入   col 筆數
    let s = `<tr data-col="${col_c}">
    <th>${col_c}</th>   
    <td>${camera_dict[1][col_c]}</td><td>${camera_dict[1][col_c]}</td><td>${camera_dict[1][col_c]}</td>
    </tr>`;

    showCamera.append(s);
}





let trs = showCamera.find('tr');

camera_sels.change(function(){    //下拉選單
    let map_data = {
        camera1: 0,
        camera2: 1,
        camera3: 2,
    }
    let id = $(this).attr('id');     //選擇到的下拉選單
    let ind = map_data[id];

    let selectedItem = camera_dict[$(this).val()];
    // console.log(camera_dict[$(this).val()]);

    trs.each(function(){
        let col = $(this).attr('data-col');

        $(this).find('td').eq(ind).text(selectedItem[col]);


    });




});







$('.camera_list').click(function(){
$('.show_len').hide();
$('.show_camera').show();
$(this).css('color','#FFB11B');
$('.len_list').css('color','black');
})
$('.len_list').click(function(){
    $('.show_len').show();
$('.show_camera').hide();
$(this).css('color','#FFB11B');
$('.camera_list').css('color','black');
})

</script>

<?php include __DIR__ . '/__html_end.php' ?>