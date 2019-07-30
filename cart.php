<?php require __DIR__. '/__db_connect.php' ;


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

<?php require __DIR__.'/__html_head.php' ?>
<?php require __DIR__.'/__nav.php' ?>
<div style="background-color:white; height:20px;" ></div>
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
                            <h2 class=""><img src="img/icon/會員圈.svg" alt="">  個人資料(訂購人)</h2>
                            <div class="wrapper">
                                <form class="text-right"　>
                                    <div class="form-group row ">
                                        <label for="name" class="col-sm-2 col-form-label ">姓名</label>
                                            <div class="col-sm-4">
                                        <input type="text" class="form-control" id="name" value="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobile" class="col-sm-2 col-form-label">電話</label>
                                            <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile" value="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">住址</label>
                                            <div class="col-sm-4">
                                                <select class="custom-select" id="address0">
                                                    <option selected>選縣市</option>
                                                    <option value="1">台北市</option>
                                                    <option value="2">新北市</option>
                                                    <option value="3">桃園市</option>
                                                </select>
                                                </div>
                                                <div class="col-sm-4">
                                                <select class="custom-select" id="address1">
                                                    <option selected>鄉鎮區</option>
                                                    <option value="1">大安區</option>
                                                    <option value="2">文山區</option>
                                                    <option value="3">中山區</option>
                                                </select> 
                                                </div> 
                                                <input type="text" class="form-control col-sm-2" id="" placeholder="郵遞區號">
                                            
                                            <label for="address" class="col-sm-2 col-form-label" disable></label>
                                            <div class="col-sm-10 pr-0 pt-3">
                                            <input type="text" class="form-control" id="address" value="">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="pwd" class="col-sm-2 col-form-label">密碼</label>
                                            <div class="col-sm-4">
                                        <input type="password" class="form-control" id="pwd" placeholder="">
                                        
                                            </div>
                                            <em class="col-sm-5 pt-2" style="font-size:0.75rem;">(密碼需8碼以上，英文或數字，英文請區分大小寫)</em>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pwd_check" class="col-sm-2 col-form-label">密碼確認</label>
                                            <div class="col-sm-4">
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
                                <h2 class=""><img src="img/icon/會員圈.svg" alt="">  收件人資料</h2>
                                <div class="custom-control custom-radio custom-control-inline radio-text">
                                    <input type="radio" id="customRadioInline0" name="customRadioInline0" class="custom-control-input">
                                    <label class="custom-control-label people" for="customRadioInline0">同訂購人</label>
                                </div>
                            </div>
                            <div class="wrapper">
                                <form class="text-right"　>
                                    <div class="form-group row ">
                                        <label for="name" class="col-sm-2 col-form-label ">姓名</label>
                                            <div class="col-sm-4">
                                        <input type="text" class="form-control" id="name" value="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobile" class="col-sm-2 col-form-label">電話</label>
                                            <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile" value="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">住址</label>
                                            <div class="col-sm-4">
                                                <select class="custom-select" id="address0">
                                                    <option selected>選縣市</option>
                                                    <option value="1">台北市</option>
                                                    <option value="2">新北市</option>
                                                    <option value="3">桃園市</option>
                                                </select>
                                                </div>
                                                <div class="col-sm-4">
                                                <select class="custom-select" id="address1">
                                                    <option selected>鄉鎮區</option>
                                                    <option value="1">大安區</option>
                                                    <option value="2">文山區</option>
                                                    <option value="3">中山區</option>
                                                </select> 
                                                </div> 
                                                <input type="text" class="form-control col-sm-2" id="" placeholder="郵遞區號">
                                            
                                            <label for="address" class="col-sm-2 col-form-label" disable></label>
                                            <div class="col-sm-10 pr-0 pt-3">
                                            <input type="text" class="form-control" id="address" value="">
                                            </div> 
                                    </div>
                                </form>   
                            </div> 
                        </div>
                    </div>
                    <div id="step-3" class="step-3">
                        <div class="shap_list">
                            <ul>
                                <!-- <li></li> -->
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
                                        <input class="count" type="text" readonly  value="1">
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
                                        <input class="count" type="text" readonly  value="1">
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
                                        <input class="count" type="text" readonly  value="1">
                                        <div>+</div>
                                    </div>
                                    <div class="money">NT$<input type="text" readonly value="15000"></div>
                                    <p>X</p>
                                </div>
                            </div>
                        </div>
                        <div class="add_shop">加購商品</div>
                        <div class="shap_list_border">
                                <div class="shap_list_main">
                                    <img src="img/1.png" alt="">
                                    <h4>產品名稱</h4>
                                    <h5>產品單價</h5>
                                    <div class="d-flex count_box">
                                        <div>-</div>
                                        <input class="count" type="text" readonly  value="1">
                                        <div>+</div>
                                    </div>
                                    <div class="money">NT$<input type="text" readonly value="15000"></div>
                                    <p>X</p>
                                </div>
                            </div>
                    </div>
                    <div class="d-flex">
                        <div class="add_shop_only">
                            <div class="add_shop_only_text">加購商品</div>
                                <div class="d-flex">
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
                                <p>商品小計:</p>
                                <p>運費:</p>
                            </div>
                            <div>
                                <p>總計:</p>
                            </div>
                        </div>    
                    </div>
                    <div id="step-4" class="step-4">
                        <div class="" >
                            <h2>物流方式</h2>
                                <div class="wrapper delivery-main mt-2">
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">宅配</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">自取 <em>(10:00am~19:00pm)</em></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline3">超商取貨</label>
                                    </div>
                                </div>
                                <div class="wrapper delivery-main p-time mt-2">
                                    <div class="p-time-title">配送時間 : </div>
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
                                        </div>
                                    </div>
                                <div class="wrapper delivery-main"><em>* (宅配需選擇配送時段)</em></div>
                            <div class="my-4">
                            <h2>付款方式</h2>
                                <div class="pay-style d-flex ">
                                    <div>
                                    <a href="" class="text-center visa" >
                                        <p class="mt-3">信用卡</p>
                                        <p>VISA<br>
                                            asterCard<br>
                                            JCB</p>
                                    </a>
                                    </div>
                                    <div>
                                    <a href="" class="text-center visa" >
                                        <p class="mt-3">第三方支付</p>
                                        <p>Line pay<br>
                                            Google pay<br>
                                            Apple pay</p>
                                    </a>
                                    </div>
                                </div>
                                <div class="my-4 ">
                                    <h3>發票類型</h3>
                                    <div class="mt-2 pay-style">
                                        <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline7" name="customRadioInline3" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline7">二聯式 </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline radio-text">
                                        <input type="radio" id="customRadioInline8" name="customRadioInline3" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline8">開立統編</label>
                                    </div>
                                    <div class="mt-2 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1">取件人與購買人相同</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                            <label class="custom-control-label" for="customCheck2">用上述資料直接註冊會員並同意會員責任規範及個資聲明</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4"><a href="" class="btn btn-secondary mx-2 px-4">繼續購物</a><a href="" class="btn btn-danger mx-2 px-4">結   帳</a></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require __DIR__.'/__footer.php' ?>
<?php require __DIR__.'/__script.php' ?>

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


</script>

<?php require __DIR__.'/__html_end.php' ?>