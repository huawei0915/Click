<?php require __DIR__ . '/__db_connect.php';


// if(! empty($_SESSION['cart'])){
//     $keys = array_keys($_SESSION['cart']);

//     $sql = sprintf("SELECT * FROM `products` WHERE `sid` IN (%s)",
//         implode(',', $keys));
//     $stmt = $pdo->query($sql);
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     $dict = array();
//     foreach($rows as $r){
//         $dict[$r['sid']] = $r;
//     }
//    header('Content-Type: text/plain');
//    print_r($dict);
//    print_r($keys);
//    exit;
// } else {
//     header('Location: product-list.php'); //頁面跳轉 產品清單
//     exit;
// }




?>

<?php require __DIR__ . '/__html_head.php' ?>
<style>
    .form-group {
        width: auto;
        margin: 15px auto;
    }
</style>
<?php require __DIR__ . '/__nav.php' ?>
<div style="background-color:white; height:20px;"></div>
<div style="background-color:white;">
    <div class="cart-header">
        <div class="container">
            <h6>購物車結帳流程</h6>
        </div>
    </div>
    <div class="container">
        <div>

            <div class="messange">

                <div id="step-1" class="step-1">
                    <div class="">
                        <h2 class=""><img src="img/icon/會員圈.svg" alt=""> 個人資料(訂購人)</h2>
                        <div class="">
                            <form class="form01" 　>
                                <div class="form-group row ">
                                    <label for="name" class="col-lg-2 col-sm-2 col-form-label ">姓名</label>
                                    <div class="col-lg-4 col-sm-10">
                                        <input type="text" class="form-control" id="name" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile" class="col-lg-2 col-sm-2 col-form-label">電話</label>
                                    <div class="col-lg-4 col-sm-10">
                                        <input type="text" class="form-control" id="mobile" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-md-2 col-sm-12 col-form-label ">住址</label>

                                    <div class="col-sm-4 address_box">
                                        <select class="custom-select" id="address2">
                                            <option selected>選縣市</option>
                                            <option value="1">台北市</option>
                                            <option value="2">新北市</option>
                                            <option value="3">桃園市</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 address_box">
                                        <select class="custom-select" id="address3">
                                            <option selected>鄉鎮區</option>
                                            <option value="1">大安區</option>
                                            <option value="2">文山區</option>
                                            <option value="3">中山區</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control col-sm-2 postcode" placeholder="郵遞區號">

                                    <label for="address" class="col-md-2 col-form-label" disable></label>
                                    <div class="col-md-10 col-sm-12 pr-0 pt-3 address_text">
                                        <input type="text" class="form-control" id="address" placeholder="輸入地址">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pwd" class="col-lg-2  col-sm-4 col-form-label">密碼</label>
                                    <div class="col-lg-4 col-sm-8">
                                        <input type="password" class="form-control" id="pwd" placeholder="">

                                    </div>
                                    <em class="col-lg-5 col-sm-10 pt-2" style="font-size:0.75rem;">(密碼需8碼以上，英文請區分大小寫)</em>
                                </div>
                                <div class="form-group row">
                                    <label for="pwd_check" class="col-lg-2 col-sm-4 col-form-label">密碼確認</label>
                                    <div class="col-lg-4 col-sm-8">
                                        <input type="password" class="form-control" id="pwd_check" placeholder="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="step-2" class="step-2">
                    <div class="">
                        <div class="recipient">
                            <h2 class=""><img src="img/icon/會員圈.svg" alt=""> 收件人資料</h2>
                            <div class="custom-control custom-radio custom-control-inline radio-text">
                                <input type="radio" id="customRadioInline0" name="customRadioInline0" class="custom-control-input">
                                <label class="custom-control-label people" for="customRadioInline0">同訂購人</label>
                            </div>
                        </div>
                        <div class="">
                            <form class="form01" 　>
                                <div class="form-group row ">
                                    <label for="name" class="col-sm-2 col-form-label ">姓名</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="name1" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile" class="col-sm-2 col-form-label">電話</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile1" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">住址</label>
                                    <div class="col-sm-4 address_box">
                                        <select class="custom-select" id="address2">
                                            <option selected>選縣市</option>
                                            <option value="1">台北市</option>
                                            <option value="2">新北市</option>
                                            <option value="3">桃園市</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 address_box">
                                        <select class="custom-select" id="address3">
                                            <option selected>鄉鎮區</option>
                                            <option value="1">大安區</option>
                                            <option value="2">文山區</option>
                                            <option value="3">中山區</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control col-sm-2 postcode" placeholder="郵遞區號">

                                    <label for="address" class="col-sm-2 col-form-label" disable></label>
                                    <div class="col-sm-10 pr-0 pt-3 address_text">
                                        <input type="text" class="form-control" id="address4" placeholder="輸入地址">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="step-3" class="step-3">
                    <div class="shap_list">
                        <ul>
                            <li>購物清單</li>
                            <li>商品名稱</li>
                            <li>單價</li>
                            <li>數量</li>
                            <li>小記</li>
                            <li></li>
                        </ul>
                        <div class="shap_list_border">
                            <div class="shap_list_main">
                                <img src="img/1.png" alt="">
                                <h4>產品名稱</h4>
                                <h5>產品單價</h5>
                                <div class="d-flex count_box">
                                    <div>-</div>
                                    <input class="count" type="text" readonly value="1">
                                    <div>+</div>
                                </div>
                                <div class="money">NT$<input type="text" readonly value="150000"></div>
                                <p>X</p>
                            </div>
                        </div>

                        <div class="shap_list_border">
                            <div class="shap_list_main">
                                <img src="img/1.png" alt="">
                                <h4>產品名稱</h4>
                                <h5>產品單價</h5>
                                <div class="d-flex count_box">
                                    <div>-</div>
                                    <input class="count" type="text" readonly value="1">
                                    <div>+</div>
                                </div>
                                <div class="money">NT$<input type="text" readonly value="150000"></div>
                                <p>X</p>
                            </div>
                        </div>

                        <div class="shap_list_border">
                            <div class="shap_list_main">
                                <img src="img/1.png" alt="">
                                <h4>產品名稱</h4>
                                <h5>產品單價</h5>
                                <div class="d-flex count_box">
                                    <div>-</div>
                                    <input class="count" type="text" readonly value="1">
                                    <div>+</div>
                                </div>
                                <div class="money">NT$<input type="text" readonly value="15000"></div>
                                <p>X</p>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------Z -->



                    <!-- ------------------------- -->
                    <div class="add_shop">加購商品</div>
                    <div class="shap_list_border">
                        <div class="shap_list_main">
                            <img src="img/1.png" alt="">
                            <h4>產品名稱</h4>
                            <h5>產品單價</h5>
                            <div class="d-flex count_box">
                                <div>-</div>
                                <input class="count" type="text" readonly value="1">
                                <div>+</div>
                            </div>
                            <div class="money">NT$<input type="text" readonly value="15000"></div>
                            <p>X</p>
                        </div>
                    </div>
                </div>


                <!-- ------------------------------------------------ -->


                <div class="step-3-1 show_mobile">
                    <h6>購物清單</h6>
                    <div class="shop_border">
                        <img src="img/1.png" alt="">
                        <div class="w-100 p-2">
                            <p>商品名稱<br>
                                商品簡介</p>
                            <div class="d-flex justify-content-between ">
                                <p>數量</p>
                                <em>價格00000</em>
                            </div>
                        </div>
                    </div>

                    <div class="shop_border">
                        <img src="img/1.png" alt="">
                        <div class="w-100 p-2">
                            <p>商品名稱<br>
                                商品簡介</p>
                            <div class="d-flex justify-content-between ">
                                <p>數量</p>
                                <em>價格00000</em>
                            </div>
                        </div>
                    </div>

                    <div class="shop_border">
                        <img src="img/1.png" alt="">
                        <div class="w-100 p-2">
                            <p>商品名稱<br>
                                商品簡介</p>
                            <div class="d-flex justify-content-between ">
                                <p>數量</p>
                                <em>價格00000</em>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -------------------------- -->

                <div class="d-flex add_shop_box">
                    <div class="add_shop_only">
                        <div class="add_shop_only_text">加購商品</div>
                        <div class="d-flex justify-content-center flex-wrap detail">
                            <div class="add_shop_only_once">
                                <img src="img/3.png" alt="">
                                <h6>品名</h6>
                                <h6>價格</h6>
                                <a href="#">加購</a>
                            </div>

                            <div class="add_shop_only_once">
                                <img src="img/3.png" alt="">
                                <h6>品名</h6>
                                <h6>價格</h6>
                                <a href="#">加購</a>
                            </div>


                            <div class="add_shop_only_once">
                                <img src="img/3.png" alt="">
                                <h6>品名</h6>
                                <h6>價格</h6>
                                <a href="#">加購</a>
                            </div>


                            <div class="add_shop_only_once">
                                <img src="img/3.png" alt="">
                                <h6>品名</h6>
                                <h6>價格</h6>
                                <a href="#">加購</a>
                            </div>
                        </div>
                    </div>
                    <div class="total_price">
                        <div>
                            <div class="d-flex sm_price">
                                <p class="text">商品小計:</p>
                                <p>NT$</p>
                                <p class="price">22222</p>
                            </div>
                            <div class="d-flex sm_send">
                                <p class="text">運費:</p>
                                <p>NT$</p>
                                <p class="price">0</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex sm_total">
                                <p class="text">總計:</p>
                                <p>NT$</p>
                                <p class="price"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="step-4" class="step-4">
                    <div class="">
                        <div class="d-flex title"><img src="img/icon/物流.svg" alt="">
                            <h5 class="ml-3 pt-3">物流方式</h5>
                        </div>
                        <div class=" delivery-main mt-2">
                            <div class="custom-control custom-radio  radio-text">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline1">宅配</label>
                            </div>
                            <div class="custom-control custom-radio  radio-text">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label " for="customRadioInline2">自取 <em>(10:00am~19:00pm)</em></label>
                            </div>
                            <div class="custom-control custom-radio  radio-text">
                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">超商取貨</label>
                            </div>
                        </div>
                        <div class=" delivery-main p-time mt-2 ">
                            <!-- ------------------------------------------------------------- -->
                            <div class="house">
                                <div class="p-time-title">配送時間</div>
                                <div class="p-time-area">
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline4">9:00~12:00</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline5">14:00~17:00</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline6" name="customRadioInline2" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline6">18:00~20:00</label>
                                    </div>
                                    <div class="">
                                        <em class="send_time">* (宅配需選擇配送時段)</em>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------------------------------ -->
                            <div class="myself">
                                <h5>聯絡資訊</h5>
                                <p>自取地址:台北市大安區和平東路106號3F<br>
                                    大安捷運站六號出口
                                </p>
                                <figure><img src="img/icon/地址.svg" alt=""></figure>

                            </div>
                            <!-- ----------------------------------------- -->
                            <div class="family_711">
                                <h5>選取超商(門市)</h5>
                                <div class="d-flex w-100">
                                    <select class="custom-select city">
                                        <option selected>選擇縣市</option>
                                    </select>
                                    <select class="custom-select city_1">
                                        <option selected>鄉鎮地區</option>
                                    </select>
                                </div>

                                <select class="custom-select city_3">
                                    <option selected>選取門市</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="my-4">
                        <div class="d-flex title_1"><img src="img/icon/付款.svg" alt="">
                            <h5 class="ml-3 pt-3">付款方式</h5>
                        </div>
                        <div class="pay-style ">
                            <div data-toggle="modal" data-target="#exampleModalCenter">
                                <a class="text-center visa">
                                    <p class="mt-3">信用卡<br>
                                        VISA/MasterCard/JCB</p>
                                </a>
                            </div>
                            <!-- ----------------------------------------- -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">信用卡填寫</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form novalidate autocomplete="on" method="POST" data-toggle="popover" class="visa_card">
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label">信用卡卡號</label>
                                                    <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label">信用卡到期日</label>
                                                    <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-cvc" class="control-label">CVC驗證碼</label>
                                                    <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required>
                                                </div>

                                                <button type="submit" class="btn btn-warning ">確認送出</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- -------------------------------------------- -->
                            <div>
                                <a class="text-center visa">
                                    <p class="mt-3">第三方支付<br>
                                        Line pay/Google pay/Apple pay</p>
                                </a>
                            </div>
                        </div>
                        <div class="my-4 ">
                            <div class="d-flex title_1"><img src="img/icon/發票.svg" alt="">
                                <h5 class="ml-3 pt-3">發票類型</h5>
                            </div>
                            <div class="mt-2 pay-style_1">
                                <div class="custom-control custom-radio  radio-text">
                                    <input type="radio" id="customRadioInline7" name="customRadioInline3" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadioInline7">二聯式 </label>
                                </div>
                                <div class="custom-control custom-radio  radio-text">
                                    <div class="d-flex">
                                        <input type="radio" id="customRadioInline8" name="customRadioInline3" class="custom-control-input">

                                        <label class="custom-control-label" for="customRadioInline8">開立統編</label>
                                        <input type="text" class="number" placeholder="輸入統一編號">
                                    </div>
                                </div>
                                <div class="mt-2 ">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex end_btn mt-4">
                    <a href="" class="btn btn-secondary mx-2 px-4">繼續購物</a>
                    <a href="" class="btn btn-danger mx-2 px-4">結 帳</a>
                </div>

                <div class="custom-control custom-checkbox personal">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                    <label class="custom-control-label" for="customCheck2">用上述資料直接註冊會員並同意會員責任規範及個資聲明</label>
                </div>
            </div>





        </div>
    </div>
</div>
</div>

<?php require __DIR__ . '/__footer.php' ?>
<?php require __DIR__ . '/__script.php' ?>
<script src="plugin/jquery.payment.js"></script>
<script>
    // function show(step) {
    //     for(var i = 1; i <= 4; i++) {
    //         $('.step-'+ i).css('display', 'none');    
    //         $('.cart-header li a').removeClass('active');
    //     }

    //     $('.step-'+step).css('display', 'block');
    //     $('.cart-header li a').eq(step-1).addClass('active');

    //     setTimeout(() => {
    //         $('html, body').scrollTop(0);  
    //     }, 10);
    // }

    $("#customRadioInline1").click(function() {
        $(".house").show();
        $(".myself").hide();
        $(".family_711").hide();
    })

    $("#customRadioInline2").click(function() {
        $(".house").hide();
        $(".myself").show();
        $(".family_711").hide();
    })
    $("#customRadioInline3").click(function() {
        $(".house").hide();
        $(".myself").hide();
        $(".family_711").show();
    })

    $("#customRadioInline8").click(function() {
        $(".pay-style_1 .radio-text .number").css("display", "block");
    })
</script>
<script>
    jQuery(function($) {
        $('[data-numeric]').payment('restrictNumeric');
        $('.cc-number').payment('formatCardNumber');
        $('.cc-exp').payment('formatCardExpiry');
        $('.cc-cvc').payment('formatCardCVC');

        $.fn.toggleInputError = function(erred) {
            this.parent('.form-group').toggleClass('has-error', erred);
            return this;
        };

        $('form').submit(function(e) {
            e.preventDefault();

            var cardType = $.payment.cardType($('.cc-number').val());
            $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
            $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
            $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
            $('.cc-brand').text(cardType);

            $('.validation').removeClass('text-danger text-success');
            $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
        });

    });
</script>
<script>
    $(".visa").click(function() {
        $(".visa_card").show();
    });
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>




<?php require __DIR__ . '/__html_end.php' ?>