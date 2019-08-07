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
                    <div class="acc_data mx-3 mt-3 mb-3 py-3 d-flex flex-column justify-content-end">
                        <div class="acc_name">Taoyuan GD</div>
                        <div class="acc_mod">
                            <a class="cl1" href="mber_profile.php">
                                <img src="img/edit.svg" alt="">編輯個人資料
                            </a>
                        </div>
                    </div>
                </div>
                <div class="acc_list">
                    <ul class="v_menu">
                        <li>
                            <a href="mber_password.php" class="cl">
                                <img src="img/password.svg" alt="">
                                更改密碼
                            </a>
                        </li>
                        <li>
                            <a href="mber_order.php" class="cl">
                                <img src="img/order.svg" alt="">
                                訂單查詢
                            </a>
                        </li>
                        <li>
                            <a href="mber_favorite.php" class="cl">
                                <img src="img/love.svg" alt="">
                                我的收藏
                            </a>
                        </li>
                    </ul>
                    <div class="box_black"></div>
                </div>
            </div>
        </div>
        <!-- 右側區塊 -->
        <div class="my_order">
            <div class="my_orderWord py-3">
                訂單查詢 Order Tracking
                <h6 class="my_fh6 mx-3">訂單編號：000000</h6>
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
                <div class="userinfomation">
                    <div class="userinfo_user d-flex">
                        收件人
                        <label for="">張高華</label>
                    </div>
                    <div class="userinfo_mobile d-flex">
                        電話
                        <label for="">0987654321</label>
                    </div>
                    <div class="userinfo_address d-flex">
                        地址
                        <label for="">台北市XX區XX路XX巷XX弄XX號XX樓 </label>
                    </div>
                </div>
            </div>
            <div class="order_listBuy">
                <h4>訂單明細</h4>
                <div class="order_buyList py-1">
                    <figure>
                        <img src="img/EOS5DMarkIV.png" alt="">
                    </figure>
                    <div class="order_infoBuy d-flex">
                        <div class="order_name_spec">
                            Canon EOS 5D Mark IV
                            <br>
                            EF 24-70mm f/4L IS USM
                        </div>
                        <div class="order_count_price">
                            x 1
                            <br>
                            NT$ 169,000
                        </div>
                    </div>
                </div>
            </div>
            <div class="order_payInfo">
                <h4>付款資訊</h4>
                <div class="order_send">
                    寄送方式
                    <label for="">宅配-NT $100</label>
                </div>
                <div class="order_date">
                    訂單日期
                    <label for="">2019-08-20</label>
                </div>
                <div class="odrder_total">
                    購買總金額
                    <label for="">NT$ 169,000</label>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>