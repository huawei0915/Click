<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>

<div class="container" style="padding:0px;">
    <div class="bg_mber d-flex">  
        <div class="left_sec">
            <div class="circle_sec d-flex">
                <div class="circle_ckh">
                <img src="img/CKH.jpg" alt="">
                </div>
            <ul class="cirle_edit">
                 <li class="circle_name">CKH</li>
                <li>
                    <a class="cl" href=""><i class="far fa-edit">
                    </i>編輯個人簡介</a>
                </li>
            </ul>
            </div>
            <div class="left_list">
                <ul>
                    <li>
                        <a class="cl" href="">
                            <i class="fas fa-user"></i>我的帳戶</a>
                        <ul class="drop_menu">
                            <li><a class="cl" href="">個人檔案</a></li>
                            <li><a class="cl" href="">銀行帳號/信用卡</a></li>
                            <li><a class="cl" href="">更改密碼</a></li>
                        </ul>
                    </li>
                    <li><a class="cl" href=""><i class="far fa-list-alt"></i>購買清單</a></li>
                    <li><a class="cl" href=""><i class="far fa-heart"></i>我的收藏</a></li>
                </ul>
                </div>    
            </div>
        <div class="right_sec">
            <div class="row row_p">
                <div class="col-3"><a class="cl" href="">待付款</a></div>
                <div class="col-3"><a class="cl" href="">待出貨</a></div>
                <div class="col-3"><a class="cl" href="">待收貨</a></div>
                <div class="col-3"><a class="cl" href="">完成</a></div>
            </div>
             <div class="box_buy">
                 <div class="box_img"></div>
                 <div class="product_name"></div>
                 <div class="product_info"></div>
                 <div class="product_count"></div>
                 <div class="product_delete"><i class="far fa-trash-alt del"></i></div> 
                 <div class="product_price"></div>  
                 <a class="product_pay" href="">前往付款</a>
             </div>
             <div class="box_buy">
                 <div class="box_img"></div>
                 <div class="product_name"></div>
                 <div class="product_info"></div>
                 <div class="product_count"></div>
                 <div class="product_delete"><i class="far fa-trash-alt del"></i></div> 
                 <div class="product_price"></div>  
                 <a class="product_pay" href="">前往付款</a>
             </div>
             <div class="box_buy">
                 <div class="box_img"></div>
                 <div class="product_name"></div>
                 <div class="product_info"></div>
                 <div class="product_count"></div>
                 <div class="product_delete"><i class="far fa-trash-alt del"></i></div> 
                 <div class="product_price"></div>  
                 <a class="product_pay" href="">前往付款</a>
             </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>