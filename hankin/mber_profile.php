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
                            <a class="cl" href="mber_profile.php">
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
        <!-- --profile page-- -->
        <div class="my_profile">
            <div class="my_profileBackground">
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
                    <form action="">
                        <div class="form-group my_proForm">
                            <label class="my_label" for="email">Email</label>
                            <input type="text" class="form-control my_proControl" id="email" name="email" placeholder="請輸入E-mail">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group my_proForm">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="請輸入手機號碼">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group my_proForm">
                            <label for="nickname">暱稱</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="請輸入暱稱">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-check form-check-inline active py-1">
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="1">
                            <label class="form-check-label my_sexcheck" for="inlineRadio1">男</label>
                        </div>
                        <div class="form-check form-check-inline py-1">
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="2">
                            <label class="form-check-label my_sexcheck" for="inlineRadio2">女</label>
                        </div>
                        <div class="form-group my_proForm">
                            <label for="birthday">生日</label>
                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="form-group my_proForm">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="輸入詳細地址">
                            <small class="form-text"></small>
                        </div>
                </div>
            </div>
            <button class="btn">儲存</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>