<?php require __DIR__. '/__db_connect.php' ?>

<?php require __DIR__.'/__html_head.php' ?>
<?php require __DIR__.'/__nav.php' ?>

<div class="container" style="background-color:white;">
<div id="smartwizard">
    
    <ul>
    <h1>購物車結帳流程</h1>
        <li><a href="#step-1">1. Choose<br /><small>放入購物車</small></a></li>
        <li><a href="#step-2">2. LogIn<br /><small>登入會員</small></a></li>
        <li><a href="#step-3">3. Data<br /><small>填寫資料</small></a></li>
        <li><a href="#step-4">4. Finished<br /><small>完成結帳</small></a></li>
    </ul>

    <div>
        <div id="step-1" class="">
            Step Content
        </div>
        <div id="step-2" class="step-2">
            <div class="wrapper">
            <h2>會員流程</h2>
            <h4>會員登入</h4>
                <a>會員登入</a>
            <h4>非會員登入</h4>
                <a>填寫基本資料</a>
            </div>
        </div>
        <div id="step-3" class="">
            Step Content
        </div>
        <div id="step-4" class="">
            Step Content
        </div>
    </div>
</div>
</div>



<?php require __DIR__.'/__footer.php' ?>
<?php require __DIR__.'/__script.php' ?>
<script type="text/javascript">

    $('#smartwizard').smartWizard();

</script>
<?php require __DIR__.'/__html_end.php' ?>