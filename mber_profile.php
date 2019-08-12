<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'edit_my';

$sql = "SELECT * FROM `members` WHERE `sid`=" . intval($_SESSION['loginUser']['sid']);
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if (empty($row)) {
    header('Location: ./');
    exit;
}

?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>

<div class="container">
    <div class="bg_mber d-flex">
        <!-- 左側區塊 -->
        <div class="acc_box">
            <div class="my_account">
                <img src="img/account.svg" alt="">
                我的帳戶
            </div>
            <!-- 編輯個人資料寬寬 -->
            <div class="acc_bg">
                <div class="acc_info d-flex">
                    <div class="circle_ckh">
                        <img src="img/CKH.jpg" alt="">
                    </div>
                    <div class="acc_data mx-2 mt-4 mb-3 py-3 d-flex flex-column justify-content-end">
                        <div class="acc_name">Taoyuan GD</div>
                        <div class="acc_mod">
                            <a class="cl1" href="#" id="profile">
                                <img src="img/edit.svg" alt="">編輯個人資料
                            </a>
                        </div>
                    </div>
                </div>
                <div class="acc_list">
                    <ul class="v_menu">
                        <li>
                            <a href="#" class="cl" id="changepwd">
                                <img src="img/password.svg" alt="">
                                更改密碼
                            </a>
                        </li>
                        <li>
                            <a href="#" class="cl" id="order">
                                <img src="img/order.svg" alt="">
                                訂單查詢
                            </a>
                        </li>
                        <li>
                            <a href="#" class="cl" id="favorite">
                                <img src="img/love.svg" alt="">
                                我的收藏
                            </a>
                        </li>
                        <li>
                            <a href="#" class="cl" id="favorite">
                                <img src="img/logout.svg" alt="">
                                登      出
                            </a>
                        </li>
                    </ul>
                    <div class="box_black"></div>
                </div>
            </div>
        </div>
        <!-- --profile page-- -->
        <div class="my_profile">
            <div class="my_profileBackground">
                <div id="alertInfo" class="alert alert-primary" role="alert" style="display: none;"></div>
                <div class="my_profileFont py-3">
                    編輯個人資料 Profile
                    <br>
                    <h6 class="my_fh6 py-2">管理你的檔案以保護你的帳戶</h6>
                    <div class="my_profileBimg circle_ckh">
                        <img src="img/151371.jpg" alt="">
                    </div>
                    <div class="my_profileIcon">
                        <a href="">
                            <img class="pro_icon" src="img/edit_O.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="my_card_body">
                    <form action="" id="myeditform" method="post" onsubmit="return checkForm_my()">
                        <div class="form-group my_proForm">
                            <input type="hidden" name="sid" value="<?= $row['sid'] ?>">
                            <label class="my_label py-1" for="email">信箱</label>
                            <input type="text" class="form-control my_proControl" id="email" name="email" value="<?= htmlentities($row['email']) ?>" disabled>
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group my_proForm">
                            <label class="py-1" for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?= htmlentities($row['mobile']) ?>">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group my_proForm">
                            <label class="py-1" for="nickname">暱稱</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" value="<?= htmlentities($row['nickname']) ?>">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="1" value="<?= htmlentities($row['sex']) ?>">
                            <label class="form-check-label my_sexcheck text-nowrap" for="inlineRadio1">男</label>
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="2" value="<?= htmlentities($row['sex']) ?>">
                            <label class="form-check-label my_sexcheck text-nowrap ml-4" for="inlineRadio2">女</label>
                        </div>
                        <div class="form-group my_proForm">
                            <label class="py-1" for="birthday">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
                        </div>
                        <div class="form-group my_proForm">
                            <label class="py-1" for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= htmlentities($row['address']) ?>">
                            <small class="form-text"></small>
                        </div>
                </div>
            </div>
            <button class="btn_save" id="submitBtn">儲存</button>
            <div class="edit_ok">修改成功</div>
            </form>
        </div>
        <!-- --Password page-- -->
        <div class="my_passWord">
            <div class="my_passBackground">
                <div id="alertInfo" class="alert alert-primary" role="alert" style="display: none;"></div>
                <div class="my_passFont py-3">
                    更改密碼 Change The Password <br>
                    <h6 class="my_fh6 py-2">為了保護您帳號安全，請謹慎保管個人密碼</h6>
                </div>
                <div class="my_passForm">
                    <form action="" id="pwdform" method="post" onsubmit="return checkForm_pwd()">
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="password" id="password" placeholder="請輸入原始密碼">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="newpassword" id="newpassword" placeholder="請輸入新密碼">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="confirmpassword" id="confirmpassword" placeholder="請再次輸入新密碼">
                        </div>
                        <button class="confirmBtn" type="submit" id="confirmBtn">確認</button>
                        <div class="al_password">修改完成</div>
                    </form>
                </div>
                <!-- <button class="confirmBtn" id="confirmBtn">確認</button>
                <div class="al_password">修改完成</div> -->
            </div>
        </div>
        <!-- order -->
        <div class="my_order">
            <div class="my_orderWord py-2">
                訂單查詢 Order Tracking
                <h6 class="my_fh6 py-1 mx-3">訂單編號：000000</h6>
            </div>
            <div class="ordr_icongroup">
                <div class="order_line">
                    <img src="img/order_line.svg" alt="">
                </div>
                <div class="order_icon d-flex">
                    <img src="img/order_list.svg" alt="">
                    <img src="img/order_money.svg" alt="">
                    <img src="img/order_car.svg" alt="">
                    <img src="img/order_gps.svg" alt="">
                    <img src="img/order_done.svg" alt="">
                </div>
            </div>
            <div class="order_userInfo">
                <h4>收件人資訊</h4>
                <div class="userinfomation d-flex">
                    <div class="userinfomation_info">
                        <div>收件人</div>
                        <div>電話</div>
                        <div>地址</div>
                    </div>
                    <div class="userinfomation_label">
                        <label for="">張高華</label>
                        <label for="">0987654321</label>
                        <label for="">台北市XX區XX路XX巷XX弄XX號XX樓</label>
                    </div>
                </div>
            </div>
            <div class="order_listBuy">
                <h4>訂單明細</h4>
                <div class="order_buyList">
                    <figure>
                        <img src="img/EOS5DMarkIV.png" alt="">
                    </figure>
                    <div class="order_infoBuy d-flex">
                        <div class="order_name_spec">
                            <div>Canon EOS 5D Mark IV</div>
                            <div>EF 24-70mm f/4L IS USM</div>
                        </div>
                        <div class="order_count_price">
                            <div>x 1</div>
                            <div>NT$ 169,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order_payInfo">
                <h4>付款資訊</h4>
                <div class="orderpayInformation d-flex">
                    <div class="order_payinfodata">
                        <div>寄送方式</div>
                        <div>訂單日期</div>
                        <div>購買總金額</div>
                    </div>
                    <div class="order_payinfocount">
                        <label for="">宅配-NT $100</label>
                        <label for="">2019-08-20</label>
                        <label for="">NT$ 169,000</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- 收藏 -->
        <div class="my_favorite">
            <div class="my_favWord">我的收藏 Collection</div>
            <div class="my_favList d-flex">
                <div class="my_favImg">
                    <img src="img/EOS5DMarkIV.png" alt="">
                </div>
                <div class="my_favBkg">
                    <div class="my_favItem">
                        Canon EOS 5D Mark IV
                    </div>
                    <div class="my_favSpec">
                        (EF 24-70mm f/4L IS USM)
                    </div>
                    <div class="my_favDate">
                        2019-08-20 09:30
                    </div>
                    <div class="my_favPrice">
                        NT$ 169,000
                    </div>
                    <div class="my_favCart">
                        <a href="" class="cart_icon d-flex">
                            <img src="img/cart.svg" alt="">
                            <div>加入購物車</div>
                        </a>
                    </div>
                    <div class="my_favRemove">
                        <a href="">
                            <i class="fas fa-times" style="font-size: 15px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
    $("#profile").click(function() {
        $(".my_profile").show();
        $(".my_passWord").hide();
        $(".my_order").hide();
        $(".my_favorite").hide();
    });
    $("#changepwd").click(function() {
        $(".my_profile").hide();
        $(".my_passWord").show();
        $(".my_order").hide();
        $(".my_favorite").hide();
    });
    $("#order").click(function() {
        $(".my_profile").hide();
        $(".my_passWord").hide();
        $(".my_order").show();
        $(".my_favorite").hide();
    });
    $("#favorite").click(function() {
        $(".my_profile").hide();
        $(".my_passWord").hide();
        $(".my_order").hide();
        $(".my_favorite").show();

    });



    // $("#confirmBtn").click(function() {
    //     $('.al_password').show();
    //     $('.al_password').delay(2000).hide(0);
    // });
</script>
<script>
    var alertInfo = $('#alertInfo');
    var submitBtn = $('#submitBtn');
    var $nickname = $('#nickname');
    var editOk = $('.edit_ok');
    // var $password = $('#password');

    var fields = [$nickname];

    function checkForm_my() {
        // 先回復到原來的狀態
        fields.forEach(function(val) {
            val.next().text('');
        });

        var isPass = true; // 表單是否有通過檢查

        if ($nickname.val().length < 2) {
            isPass = false;
            $nickname.next().text('請輸入兩個以上的字元');
        }

        if (isPass) {
            $.post('edit_my_api.php', $('#myeditform').serialize(), function(data) {
                console.log(data);

                if (data.success) {
                    alertInfo.removeClass('alert-danger');
                    alertInfo.addClass('alert-success');

                    $('#my_nickname').text($nickname.val());

                    // $('.edit_ok').delay(2000).hide(0);
                } else {
                    alertInfo.removeClass('alert-success');
                    alertInfo.addClass('alert-danger');
                    // submitBtn.show();
                }
                alertInfo.text(data.info);
                // alertInfo.show();
                editOk.show();
                editOk.delay(2000).hide(0);
            }, 'json');
        } else {
            // submitBtn.show();

        }
        return false;
    }
    // ------------------------------------------------------------------

    var al_password = $('.al_password');
    var $password = $('#password');
    var $newpassword = $("#newpassword");
    var $confirmpassword = $("#confirmpassword");

    // var fields = [$password];

    function checkForm_pwd() {
        // 先回復到原來的狀態

        // fields.forEach(function(val){
        //     val.next().text('');
        // });


        var isPass = true; // 表單是否有通過檢查

        if ($password.val().length < 6) {
            isPass = false;
            $password.next().text('請輸入六個以上的字元');
        }

        if ($newpassword !== $confirmpassword) {
            isPass = false;
            $newpassword.next().text('確認密碼錯誤');
        }

        if (isPass) {
            $.post('edit_my_pwd_api.php', $('#pwdform').serialize(), function(data) {
                console.log(data);

                if (data.success) {
                    //location.href = 'data_list.php';
                    alertInfo.removeClass('alert-danger');
                    alertInfo.addClass('alert-success');

                    // $('#my_nickname').text($nickname.val());
                } else {
                    alertInfo.removeClass('alert-success');
                    alertInfo.addClass('alert-danger');
                    // submitBtn.show();
                }
                // alertInfo.text(data.info);
                al_password.show();
                al_password.delay(2000).hide(0);
            }, 'json');
        } else {

            // $('.al_password').delay(2000).hide(0);
        }
        return false;
    }
</script>



<?php include __DIR__ . '/__html_end.php' ?>