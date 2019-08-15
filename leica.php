<?php include __DIR__ . '/__db_connect.php';

$page_name = 'product-list';
$data = isset($_GET['search']) ? $_GET['search'] : 0;

?>

<?php include __DIR__ . '/__html_head.php' ?>




<?php include __DIR__ . '/__nav.php' ?>

<!-- PRODUCT FILTER -->
<div class="container flt_btn">
    <button type="button" class="btn btn-outline-secondary fltbtn">篩選列表</button>
</div>
<div class="prd_filter">
    <div class="container fltcon">
        <form action="" method="post" class="product_form">
            <div class="filte">

                <div class="prd_price">
                    <div class="prdfil">
                        <label class="" for="formControlRange">篩選列表</label>
                        <!-- <input type="range" class="form-control-range prbar" id="formControlRange"> -->
                    </div>
                    <div>
                        <div class="form-group">
                            <section class="range-slider">
                                <span class="output outputOne"></span>
                                <span class="output outputTwo"></span>
                                <span class="full-range"></span>
                                <span class="incl-range"></span>
                                <input value="1000" min="0" max="300000" step="1" type="range" name="min">
                                <input value="300000" min="0" max="300000" step="1" type="range" name="max">
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
                        <input type="checkbox" class="custom-control-input" id="br_nikon" value="2" name="brand[]" >
                        <label class="custom-control-label" for="br_nikon">NIKON</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="br_leica" value="3" name="brand[]" checked>
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

                <div class="pl_parts">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10" value="10" name="cate[]">
                        <label class="custom-control-label" for="customCheck10">閃光燈</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck11" value="8" name="cate[]">
                        <label class="custom-control-label" for="customCheck11">腳架</label>
                    </div>
                </div>
                <div>
                    <input type="hidden" class="custom-control-input camera_page" value="1" name="camera_page">
                    <input type="hidden" class="custom-control-input lens_page" value="1" name="lens_page">
                    <input type="hidden" class="custom-control-input tools_page" value="1" name="tools_page">
                </div>
                <!-- <div class="filter_btn">
                    <button type="button" class="btn btn-secondary ftbn">篩選</button>
                </div>  -->

            </div>
        </form>
    </div>
</div>

<!-- BANNER -->
<div class="pl-ban">
    <!-- <img src="img\canon-banner.jpg" alt=""> -->
</div>

<!-- PRODUCT LIST -->
<div class="container">


    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST CAMERA -->
        <div class="plt d-flex flex-wrap camera_box">

        </div>
        <div class="d-flex justify-content-center mt-3 arrow_list_camera">

        </div>

    </div>

    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST LENS -->
        <div class="plt d-flex flex-wrap lens_box">

        </div>
        <div class="d-flex justify-content-center mt-3 arrow_list_lens">

        </div>
    </div>
    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST TOOLS -->
        <div class="plt d-flex flex-wrap tools_box">

        </div>
        <div class="d-flex justify-content-center mt-3 arrow_list_tools">

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
    var pagination_item_str_camera = `<a class="mr-3 prev">
                <i class="fas fa-caret-left"></i>
                上一頁</a>         
                <a class="ml-3 next" data-total="<%= camera_totalPage %>">下一頁
                    <i class="fas fa-caret-right"></i>
                </a>`;
    var pagination_item_fn_camera = _.template(pagination_item_str_camera);
    var p_item_str_camera = `<div class="prd_cards" style="background-color: #fff;">
                    <a href="product.php?sid=<%= sid %>" style="color:black;">
                    <input type="hidden" value="1">
                    <figure class="prd_pic"><img src="img/product/<%= images %>.png" alt=""></figure>
                    <h6><%= model %></h6>
                    <ul>
                        <li><%= description %></li>
                    </ul>
                    </a>
                    <p>NT$<%= price %></p>
                    <a href="comparison.php">
                    <div class="compare">比較</div>
                    </a>
                </div>
                `;
    var p_item_fn_camera = _.template(p_item_str_camera);

    var pagination_lens = $('.arrow_list_lens');
    var products_container_lens = $('.lens_box');
    var pagination_item_str_lens = `<a class="mr-3 prev">
                <i class="fas fa-caret-left"></i>
                上一頁</a>         
                <a class="ml-3 next" data-total="<%= lens_totalPage %>">下一頁
                    <i class="fas fa-caret-right"></i>
                </a>`;
    var pagination_item_fn_lens = _.template(pagination_item_str_lens);
    var p_item_str_lens = `<div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="./img/product/<%= images %>.png" alt=""></figure>
                    <h6><%= model %></h6>
                    <ul>
                        <li>焦距 : <%= description %></li>
                    </ul>

                    <p>NT$<%= price %></p>
                    <a href="comparison.php">
                    <div class="compare">比較</div>
                    </a>
                </div>`;
    var p_item_fn_lens = _.template(p_item_str_lens);
    // ----------------------------
    var pagination_tools = $('.arrow_list_tools');
    var products_container_tools = $('.tools_box');
    var pagination_item_str_tools = `<a class="mr-3 prev">
                <i class="fas fa-caret-left"></i>
                上一頁</a>         
                <a class="ml-3 next" data-total="<%= tools_totalPage %>">下一頁
                    <i class="fas fa-caret-right"></i>
                </a>`;
    var pagination_item_fn_tools = _.template(pagination_item_str_tools);
    var p_item_str_tools = `<div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="./img/product/<%= images %>.png" alt=""></figure>
                    <h6><%= model %></h6>
                    <ul>
                        <li><%= description %></li>
                    </ul>

                    <p>NT$<%= price %></p>
                </div>`;
    var p_item_fn_tools = _.template(p_item_str_tools);


    // -----------------------相機分頁----------------

    $("html").on("click", '.arrow_list_camera .prev', function() {
        var camera_page = Number($(".camera_page").val())
        if (camera_page != 1) {
            $(".camera_page").val(camera_page - 1)
        } else {
            $(".camera_page").val(1)
        }

        form_post()
    })
    $("html").on("click", '.arrow_list_camera .next', function() {
        var camera_page = Number($(".camera_page").val())
        var total = $(this).attr("data-total")
        if (camera_page != total) {
            $(".camera_page").val(camera_page + 1)
        } else {
            $(".camera_page").val(total)
        }

        form_post()
    })

    // ---------------------鏡頭分頁-----------------------
    $("html").on("click", '.arrow_list_lens .prev', function() {
        var lens_page = Number($(".lens_page").val())
        if (lens_page != 1) {
            $(".lens_page").val(lens_page - 1)
        } else {
            $(".lens_page").val(1)
        }
   
        form_post()
    })
    $("html").on("click", '.arrow_list_lens .next', function() {
        var lens_page = Number($(".lens_page").val())
        var total = $(this).attr("data-total")
        if (lens_page != total) {
            $(".lens_page").val(lens_page + 1)
        } else {
            $(".lens_page").val(total)
        }

        form_post()
    })
    // ---------------------配件分頁-----------------------
    $("html").on("click", '.arrow_list_tools .prev', function() {
        var tools_page = Number($(".tools_page").val())
        if (tools_page != 1) {
            $(".tools_page").val(tools_page - 1)
        } else {
            $(".tools_page").val(1)
        }

        form_post()
    })
    $("html").on("click", '.arrow_list_tools .next', function() {
        var tools_page = Number($(".tools_page").val())
        var total = $(this).attr("data-total")
        console.log(total)
        if (tools_page != total) {
            $(".tools_page").val(tools_page + 1)
        } else {
            $(".tools_page").val(total)
        }

        form_post()
    })
    // ----------------------

    $(".product_form input").change(function() {
        form_post()
    })
    $(".product_form").change(function() {
        $(".camera_page").val(1);
        form_post()
    })


    function form_post(){
        if(<?= !empty($data) ? 'true' : 'false' ?>){
            obj = '<?= $data ?>'

            $.post("product-list-api.php", {'search':obj}, function(data){
                // console.log(data)
                var camera_page_array = {
                    'camera_page': data.camera_page,
                    'camera_totalPage': data.totalPage_camera,
                }

                pagination_camera.html("")


                var camera_rows = data.rowsCamera.length
                products_container_camera.html("")

                if(camera_rows==0){
                    products_container_camera.html(`<h2>無相符合之相機商品</h2>`)
                }

                for (var i = 0; i < camera_rows; i++) {
                    var camera_sid=data.rowsCamera[i]['sid']
                    var camera_images = data.rowsCamera[i]['images']
                    var camera_model = data.rowsCamera[i]['model']
                    var camera_description = data.rowsCamera[i]['description']
                    var camera_price = data.rowsCamera[i]['price']
                    var camera_array = {
                        'sid': camera_sid,
                        'images': camera_images,
                        'model': camera_model,
                        'description': camera_description,
                        'price': camera_price,
                    }
                    products_container_camera.append(p_item_fn_camera(camera_array));
                }
            },"json")
                $(".prd_list").eq(1).hide();
                $(".prd_list").eq(2).hide();
                


        }else{
            $.post("product-list-api.php", $(".product_form").serialize(), function(data) {
            var camera_page_array = {
                'camera_page': data.camera_page,
                'camera_totalPage': data.totalPage_camera,
            }

            pagination_camera.html("")
            pagination_camera.append(pagination_item_fn_camera(camera_page_array));


            var camera_rows = data.rowsCamera.length
            products_container_camera.html("")

            if(camera_rows==0){
                products_container_camera.html(`<h2>無相符合之相機商品</h2>`)
            }

            for (var i = 0; i < camera_rows; i++) {
                var camera_sid=data.rowsCamera[i]['sid']
                var camera_images = data.rowsCamera[i]['images']
                var camera_model = data.rowsCamera[i]['model']
                var camera_description = data.rowsCamera[i]['description']
                var camera_price = data.rowsCamera[i]['price']
                var camera_array = {
                    'sid': camera_sid,
                    'images': camera_images,
                    'model': camera_model,
                    'description': camera_description,
                    'price': camera_price,
                }
                products_container_camera.append(p_item_fn_camera(camera_array));
            }


            var lens_page_array = {
                'lens_page': data.lens_page,
                'lens_totalPage': data.totalPage_lens,
            }

            pagination_lens.html("")
            pagination_lens.append(pagination_item_fn_lens(lens_page_array));


            var lens_rows = data.rowsLens.length
            products_container_lens.html("")

            if(lens_rows==0){
                products_container_lens.html(`<h2>無相符合之鏡頭商品</h2>`)
            }
            for (var i = 0; i < lens_rows; i++) {
                var lens_images = data.rowsLens[i]['images']
                var lens_model = data.rowsLens[i]['model']
                var lens_description = data.rowsLens[i]['description']
                var lens_price = data.rowsLens[i]['price']
                var lens_array = {
                    'images': lens_images,
                    'model': lens_model,
                    'description': lens_description,
                    'price': lens_price,
                }
                products_container_lens.append(p_item_fn_lens(lens_array));
            }


            var tools_page_array = {
                'tools_page': data.tools_page,
                'tools_totalPage': data.totalPage_tools,
            }

            pagination_tools.html("")
            pagination_tools.append(pagination_item_fn_tools(tools_page_array));


            var tools_rows = data.rowsTools.length
            products_container_tools.html("")

            if(tools_rows==0){
                // products_container_tools.html(`<h2>無相符合之商品</h2>`)
                $('.prd_list').eq(2).remove();
            }
            for (var i = 0; i < tools_rows; i++) {
                var tools_images = data.rowsTools[i]['images']
                var tools_model = data.rowsTools[i]['model']
                var tools_description = data.rowsTools[i]['description']
                var tools_price = data.rowsTools[i]['price']
                var tools_array = {
                    'images': tools_images,
                    'model': tools_model,
                    'description': tools_description,
                    'price': tools_price,
                }
                products_container_tools.append(p_item_fn_tools(tools_array));
            }
        }, "json")}
    }



    form_post({})

    $('.flt_btn').click(function(){
        $('.prd_filter').toggle(".filte");
    })
</script>




<?php include __DIR__ . '/__html_end.php' ?>