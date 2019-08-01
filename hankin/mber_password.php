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
                            <a class="cl" href="">
                                <img src="img/edit.svg" alt="">編輯個人資料
                            </a>
                        </div>
                    </div>
                </div>
                <div class="acc_list">
                    <ul class="v_menu">
                        <li>
                            <a href="" class="cl">
                                <img src="img/password.svg" alt="">
                                更改密碼
                            </a>
                        </li>
                        <li>
                            <a href="" class="cl">
                                <img src="img/order.svg" alt="">
                                訂單查詢
                            </a>
                        </li>
                        <li>
                            <a href="" class="cl">
                                <img src="img/love.svg" alt="">
                                我的收藏
                            </a>
                        </li>
                    </ul>
                    <div class="box_black"></div>
                </div>
            </div>
        </div>
        <!-- --Password page-- -->
        <div class="my_passWord">
            <div class="my_passBackground">
                <div class="my_passFont py-5">
                    更改密碼 Change The Password <br>
                    <h6 class="my_fh6">為了保護您帳號安全，請謹慎保管個人密碼</h6>
                </div>
                <div class="my_passForm">
                    <form action="" method="post" id="form1" name="form1">
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="password" placeholder="請輸入原始密碼">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="newpassword" placeholder="請輸入新密碼">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control my_form" name="confirmpassword" placeholder="請再次輸入新密碼">
                        </div>
                    </form>
                </div>
                <a href="" class="btn success confirmBtn" data-btn="success">確認</a>
                <div class="alert">修改完成</div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    function validateBtn() {
        var $this = $(this);
        var value = $this.data("btn");
        $(".alert").addClass("active" + value).text(value);

        setTimeout(function() {
            $(".alert").removeClass("active" + value);
        }, 2000);
    };
    $(function() {
        $(".btn").click(validateBtn);
    });
</script> -->

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>