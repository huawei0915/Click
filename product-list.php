<?php include __DIR__ . '/__db_connect.php';

$page_name = 'product-list';

// $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
// $per_page_camera = 8;  //相機顯示數量
// $per_page_lens = 8;  //鏡頭顯示數量
// $per_page_tools = 0;    //配件顯示數量

// $c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
// $c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=1";
// $cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// 取得總筆數
// $t_sql = "SELECT COUNT(1) FROM `p_products`";
// $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// $p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 LIMIT %s, %s ", ($page - 1) * $per_page_camera, $per_page_camera);  //鏡頭分類
// $p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 LIMIT %s, %s ", ($page - 1) * $per_page_lens, $per_page_lens);  //鏡頭分類
// $p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10) LIMIT %s, %s ", ($page - 1) * $per_page_tools, $per_page_tools);   //配件分類

// $stmt_camera = $pdo->query($p_camera);
// $stmt_lens = $pdo->query($p_lens);
// $stmt_tool = $pdo->query($p_tool);

// $rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
// $rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
// $rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);


// $brand = isset($_GET['brand']) ? intval($_GET['brand']) : 0; //廠牌
// $category = isset($_GET['category']) ? intval($_GET['category']) : 0; //次分類
// $price = isset($_GET['price']) ? intval($_GET['price']) : 0; //價格

// $cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// $where = " WHERE 1 ";

// if (!empty($brand)) {
//     $where .= " AND `category_sid`=$brand ";
// }
// if (!empty($category)) {
//     $where .= " AND `category_sid`=$category ";
// }


// var_dump($rows[0]['images']);
// echo($rows[0]['images']);
// exit();


?>

<?php include __DIR__ . '/__html_head.php' ?>




<?php include __DIR__ . '/__nav.php' ?>

<!-- PRODUCT FILTER -->
<div class="prd_filter">
    <div class="container">
        <form action="" method="post" class="product_form">
            <div class="filte">

                <div class="prd_price">
                    <div class="form-group">
                        <label for="formControlRange">篩選列表</label>
                        <!-- <input type="range" class="form-control-range prbar" id="formControlRange"> -->
                    </div>
                    <div>
                        <div class="form-group">
                            <section class="range-slider">
                                <span class="output outputOne"></span>
                                <span class="output outputTwo"></span>
                                <span class="full-range"></span>
                                <span class="incl-range"></span>
                                <input value="1000" min="0" max="400000" step="1" type="range" name="min">
                                <input value="400000" min="0" max="400000" step="1" type="range" name="max">
                            </section>
                        </div>
                    </div>
                </div>

                <div class="pl_brand">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="br_canon" value="1" name="brand[]">
                        <label class="custom-control-label" for="br_canon">CANON</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="br_nikon" value="2" name="brand[]">
                        <label class="custom-control-label" for="br_nikon">NIKON</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="br_leica" value="3" name="brand[]">
                        <label class="custom-control-label" for="br_leica">LEICA</label>
                    </div>
                </div>

                <div class="pl_camera">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="5" name="cate[]">
                        <label class="custom-control-label" for="customCheck1">微單眼相機</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" value="4" name="cate[]">
                        <label class="custom-control-label" for="customCheck2">全片幅相機</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" value="6" name="cate[]">
                        <label class="custom-control-label" for="customCheck3">數位攝影機</label>
                    </div>
                </div>

                <div class="pl_lens">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" value="14" name="cate[]">
                        <label class="custom-control-label" for="customCheck4">廣角定焦鏡頭</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5" value="13" name="cate[]">
                        <label class="custom-control-label" for="customCheck5">廣角變焦鏡頭</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6" value="15" name="cate[]">
                        <label class="custom-control-label" for="customCheck6">標準變焦鏡頭</label>
                    </div>
                </div>
                <div class="pl_lens">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7" value="18" name="cate[]">
                        <label class="custom-control-label" for="customCheck7">遠攝定焦鏡頭</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck8" value="17" name="cate[]">
                        <label class="custom-control-label" for="customCheck8">遠攝變焦鏡頭</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck9" value="16" name="cate[]">
                        <label class="custom-control-label" for="customCheck9">微距鏡頭</label>
                    </div>
                </div>
                <div>
                    <input type="hidden" class="custom-control-input camera_page" value="1" name="camera_page">
                    <input type="hidden" class="custom-control-input lens_page" value="1" name="lens_page">
                </div>
                <!-- <div class="pl_parts">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10" value="10" name="cate[]">
                        <label class="custom-control-label" for="customCheck10">閃光燈</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck11" value="8" name="cate[]">
                        <label class="custom-control-label" for="customCheck11">腳架</label>
                    </div>
                </div>

                <div class="filter_btn">
                    <button type="button" class="btn btn-secondary ftbn">篩選</button>
                </div> -->

            </div>
        </form>
    </div>
</div>

<!-- BANNER -->
<div class="pl-ban">
    <img src="img\canon-banner.jpg" alt="">
</div>

<!-- PRODUCT LIST -->
<div class="container">


    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST CAMERA -->
        <div class="plt d-flex flex-wrap camera_box">
            
        </div>
        <div class="d-flex justify-content-center mt-3 arrow_list_camera">
            <!-- <a class="mr-3 prev">
                <i class="fas fa-caret-left"></i>
                上一頁</a>
         
                <a class="ml-3 next">下一頁
                    <i class="fas fa-caret-right"></i>
                </a> -->
        </div>

    </div>

    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST LENS -->
        <div class="plt d-flex flex-wrap lens_box">
            
        </div>
        <div class="d-flex justify-content-center mt-3 arrow_list_lens">
            <!-- <a class="mr-3">
                <i class="fas fa-caret-left"></i>
                上一頁</a>
            <a class="ml-3">下一頁
                <i class="fas fa-caret-right"></i>
            </a> -->
        </div>
    </div>

</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
    var rangeOne = document.querySelector('input[name="min"]'),
        rangeTwo = document.querySelector('input[name="max"]'),
        outputOne = document.querySelector('.outputOne'),
        outputTwo = document.querySelector('.outputTwo'),
        inclRange = document.querySelector('.incl-range'),
        updateView = function() {
            if (this.getAttribute('name') === 'min') {
                outputOne.innerHTML = this.value;
                outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
            } else {
                outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
                outputTwo.innerHTML = this.value
            }
            if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
                inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
                inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
            } else {
                inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
                inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
            }
        };

    document.addEventListener('DOMContentLoaded', function() {
        updateView.call(rangeOne);
        updateView.call(rangeTwo);
        $('input[type="range"]').on('mouseup', function() {
            this.blur();
        }).on('mousedown input', function() {
            updateView.call(this);
        });
    });

    var pagination_camera = $('.arrow_list_camera');
    var products_container_camera = $('.camera_box');
    var pagination_item_str = `<a class="mr-3 prev">
                <i class="fas fa-caret-left"></i>
                上一頁</a>         
                <a class="ml-3 next" data-total="<%= camera_totalPage %>">下一頁
                    <i class="fas fa-caret-right"></i>
                </a>`;
    var pagination_item_fn = _.template(pagination_item_str);
    var p_item_str_camera = `<div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="img/product/camera/<%= images %>.png" alt=""></figure>
                    <h6><%= model %></h6>
                    <ul>
                        <li><%= description %></li>
                    </ul>
                    <p>NT$<%= price %></p>
                    <div class="compare">比較</div>
                </div>`;
    var p_item_fn_camera = _.template(p_item_str_camera);

    var pagination_lens = $('.arrow_list_lens');
    var products_container_lens = $('.lens_box');
    var p_item_str_lens =`<div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="./img/product/lens/<%= images %>.png" alt=""></figure>
                    <h6><%= model %></h6>
                    <ul>
                        <li>焦距 : <%= description %></li>
                    </ul>

                    <p>NT$<%= price %></p>
                    <div class="compare">比較</div>
                </div>`;
    var p_item_fn_lens = _.template(p_item_str_lens);


    $("html").on("click",'.arrow_list_camera .prev',function(){
        var camera_page = Number($(".camera_page").val())
        if(camera_page!=1){
            $(".camera_page").val(camera_page-1)
        }else{
            $(".camera_page").val(1)
        }
        console.log($(".camera_page").val())
        form_post()
    })
    $("html").on("click",'.arrow_list_camera .next',function(){
        var camera_page =  Number($(".camera_page").val())
        var total = $(this).attr("data-total")
        if(camera_page!=total){
            $(".camera_page").val(camera_page+1)
        }else{
            $(".camera_page").val(total)
        }
        console.log($(".camera_page").val())
        form_post()
    })

    $(".product_form input").change(function() {
        form_post()
    })

    function form_post() {
        $.post("product-list-api.php", $(".product_form").serialize(), function(data){
            
            var camera_page_array={
                'camera_page' : data.camera_page,
                'camera_totalPage' : data.totalPage_camera,
            }
            
            pagination_camera.html("")
            pagination_camera.append(pagination_item_fn(camera_page_array));

            var camera_rows = data.rowsCamera.length
            products_container_camera.html("")
            for(var i=0;i<camera_rows;i++){
                var camera_images = data.rowsCamera[i]['images']
                var camera_model = data.rowsCamera[i]['model']
                var camera_description = data.rowsCamera[i]['description']
                var camera_price = data.rowsCamera[i]['price']
                var camera_array={
                    'images': camera_images,
                    'model': camera_model,
                    'description': camera_description,
                    'price': camera_price,
                    }
                    products_container_camera.append(p_item_fn_camera(camera_array));
            }
            // var lens_rows = data.rowsLens.length
            // products_container_lens.html("")
            // for(var i=0;i<lens_rows;i++){
            //     var lens_images = data.rowsLens[i]['images']
            //     var lens_model = data.rowsLens[i]['model']
            //     var lens_description = data.rowsLens[i]['description']
            //     var lens_price = data.rowsLens[i]['price']
            //     var lens_array={
            //         'images': lens_images,
            //         'model': lens_model,
            //         'description': lens_description,
            //         'price': lens_price,
            //         }
            //         products_container_lens.append(p_item_fn_lens(lens_array));
            // }
        },"json")
    }

    

    form_post({})

</script>





<?php include __DIR__ . '/__html_end.php' ?>