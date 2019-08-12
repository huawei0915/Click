<body>
    <header>
        <div class="container">
            <div class="row justify-content-between align-items-end  mobile-style">
                <div class="d-flex head_mobile">

                    <div class="logo px-2 show_destop"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
                    <div class="logo px-2 show_mobile "><a href="index.php"><img src="img/logo_m.svg" alt=""></a></div>
                </div>


                <div class="features pb-2">
                    <form method="post" action="">
                        <div class="serbox">
                            <input id="mag" type="search" placeholder="    Search..." name="search">
                            <div id="arm"></div>
                    </form>
                    <a href="cart.php" class="cart"><img src="img/icon/shop.svg" alt="購物車" class="px-3 ml-2 shop">
                        <span class="badge badge-pill badge-warning cart-qty"></span>
                    </a>

                    <?php if (isset($_SESSION['loginUser'])) : ?>
                        <div style="width:43px;" class="mber">
                            <a id="my_nickname" href="mber_profile.php"><?= $_SESSION['loginUser']['nickname'] ?></a>
                        </div>

                    <?php else : ?>

                        <a href="A_login.php"><img src="img/icon/會員.svg" alt="會員中心" class="px-2"></a>

                    <?php endif ?>


                    <!-- <a href="A_login.php"><img src="img/icon/會員.svg" alt="會員中心" class="px-2"></a> -->
                    <div class="menu transition show_mobile ">
                        <div class="bar bar1 transition"></div>
                        <div class="bar bar2 transition"></div>
                        <div class="bar bar3 transition"></div>
                        <ul class="transition">
                            <li><a href="" class="transition"></a></li>
                            <li><a href="canon.php" class="transition">CANON</a></li>
                            <li><a href="nikon.php" class="transition">NIKON</a></li>
                            <li><a href="leica.php" class="transition">LEICA</a></li>
                            <li><a href="product-list.php" class="transition">產品列表</a></li>
                            <li><a href="diy.php" class="transition">首選推薦</a></li>
                            <li><a href="profile_share.php" class="transition">攝影分享</a></li>
                            <li><a href="A_aboutus.php" class="transition">關於我們</a></li>
                            <li><a href="A_service.php" class="transition">客服支援</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="d-flex justify-content-between">
                <ul class="d-flex nav-l">
                    <li><a href="index.php">首頁</a></li>
                    <li><a href="canon.php" class="deskshow">CANON</a></li>
                    <li><a href="nikon.php" class="deskshow">NIKON</a></li>
                    <li><a href="leica.php" class="deskshow" style="letter-spacing:1px;">LEICA</a></li>
                    <li><a href="product-list.php">產品列表</a></li>
                    <li><a href="diy.php">首選推薦</a></li>
                    <li><a href="profile_share.php">攝影分享</a></li>
                </ul>
                <ul class="d-flex nav-r">
                    <li><a href="A_aboutus.php">關於我們</a></li>
                    <li><a href="A_service.php">客服支援</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="space"></div>



    <script>
        function calcQty(cart_data) {
            var sum = 0;
            for (let s in cart_data) {
                sum += cart_data[s];
            }
      
            $('.cart-qty').text(sum);

        }


        $.get('add_to_cart.php', function(data) {
            calcQty(data);
        }, 'json');


        // // $(".cart-qty").hide();
        // var cartNum= $(".cart-qty");
        // // $(".cart-qty").hide();

        // if(cartNum.innerText =0){
        //     $(".cart-qty").hide();
        // }
       
       
    </script>