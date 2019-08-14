<?php include __DIR__ . '/__html_head.php' ?>
<link rel="stylesheet" href="plugin/drag/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="css/lightbox.css">
<style>
    body {
        height: calc(100% - 100px) !important;
    }

    .serbox {
        padding-left: 160px;

    }

    #arm {
        right: 118px;
        top: 71%;
    }

    @media screen and (max-width:1030px) {
        .index_nav {
            width: 90%;
            margin: 0 auto;
        }

        .index_nav ul li:nth-child(5) {
            margin-left: 0px;
        }

        .index_nav ul li {
            margin-left: 15px;
        }

        .index_nav ul li .eng {
            display: none;
        }
    }

    @media screen and (max-width:992px) {
        .index_nav {
            width: 100%;
            margin: 0 auto;
        }

        .nar_right ul li {
            margin-left: 10px;
        }
    }

    @media screen and (max-width:400px) {
        .serbox {
            padding-left: 120px;
        }
    }
</style>

<body>
    <div class="show_desk">

        <div class="index_view1">
            <div class="main_big_pic">
                <figure>
                    <img id="BigPic" src="img/風景-大.png" alt="">
                    <!-- <img class="none" src="img/動態-大.png" alt="">
            <img class="none" src="img/鳥-大.png" alt="">
            <img class="none" src="img/人像-大.png" alt=""> -->
                </figure>
            </div>
            <div class="orange_border_box"></div>
            <div class="mondel_text">
                <ul class="text_ul">
                    <li id="txt1" class="active">LONG SHOT</li>
                    <li id="txt2">ACTION SHOT</li>
                    <li id="txt3">CLOSE UP</li>
                    <li id="txt4">CHEST SHOT</li>
                </ul>

            </div>
            <div class="small-pic">
                <figure data-pic="0">
                    <img src="img/風景.jpg" alt="">
                    <img class="none" src="img/風景-大.png" alt="">
                </figure>
                <figure data-pic="1">
                    <img src="img/動態.jpg" alt="">
                    <img class="none" src="img/動態-大.png" alt="">
                </figure>
                <figure data-pic="2">
                    <img src="img/鳥-小.jpg" alt="">
                    <img class="none" src="img/鳥-大.png" alt="">
                </figure>
                <figure data-pic="3">
                    <img src="img/人像.jpg" alt="">
                    <img class="none" src="img/人像-大.png" alt="">
                </figure>
            </div>

        </div>
        <div class="header ">
            <div class="container">
                <div class="row index_nav align-items-end">
                    <div class="col-9 ">
                        <ul class="row align-items-end">
                            <li class="logo"><a href="index.php"><img src="img/icon/logo_s.svg" alt=""></a></li>
                            <li><a href="" class="eng">CANON</a></li>
                            <li><a href="" class="eng">NIKON</a></li>
                            <li><a href="" class="eng" style="letter-spacing:1px;">LEICA</a></li>
                            <li><a href="product-list.php">產品列表</a></li>
                            <li><a href="diy.php">首選推薦</a></li>
                            <li><a href="">攝影分享</a></li>
                        </ul>
                    </div>
                    <div class="col-3 ">
                        <div class="right_top ">
                            <form method="post" action="">
                                <div class="serbox" style="margin-right:-25px;">
                                    <input id="mag" type="search" placeholder="  Search..." name="search">
                                    <div id="arm"></div>
                            </form>
                            <a href=""><img src="img/icon/shop.svg" alt="" class="px-3 ml-2" style="height: 28px;"></a>
                            <a href="A_login.php"><img src="img/icon/會員.svg" alt="" style="height: 26px;" class="px-2"></a>
                        </div>
                        <div class="nar_right">
                            <ul class="row">
                                <li><a href="A_aboutus.php">關於我們</a></li>
                                <li><a href="A_service.php">客服支援</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <h2>Click 首選推薦</h2>
        <h3>快速選配符合自己所需</h3>
        <div class="main_bg">

            <div class="corner">
                <a href="diy.php">
                    <figure>
                        <img src="img/corner-l.png" alt="" class="wow slideInLeft slow">
                    </figure>
                    <figure>
                        <img src="img/corner-r.png" alt="" class="wow slideInRight slow">
                    </figure>
                    <!-- <figure>
                        <img src="img/corner.png" alt="" class="wow slideInLeft slow">
                    </figure>
                    <figure>
                        <img src="img/corner.png" alt="" class="wow slideInLeft slow">
                    </figure> -->
                    <figure class="diy_map">
                        <img src="img/DIY-table.png" alt="" class="wow fadeIn" data-wow-delay="1s">
                        <img src="img/DIY-line.png" alt="" class="wow fadeIn" data-wow-delay="1.5s">
                        <img src="img/DIY-camera.png" alt="" class="wow fadeIn" data-wow-delay="2.2s">
                    </figure>
                </a>
            </div>


        </div>
    </main>
    <div class="brand_map_bg">
        <div class="brand_map">
            <figure>
                <img src="img/第三區塊_canon.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(-150px);" data-end="transform: translateX(10px);">
                <img src="img/canon.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(-500px);" data-end="transform: translateX(120px);">
            </figure>
            <figure>
                <img src="img/第三區塊_leica.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(158px);" data-end="transform: translateX(-10px);">
                <img src="img/Leica.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(550px);" data-end="transform: translateX(-20px);">
            </figure>
            <figure>
                <img src="img/第三區塊_nikon.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(-158px);" data-end="transform: translateX(10px);">
                <img src="img/nikon.png" alt="" class="wow fadeIn" data-wow-delay=".5s" data-100="transform: translateX(-550px);" data-end="transform: translateX(5px);">
            </figure>
        </div>
        <div class="line_yellow"></div>
    </div>
    <div class="four_bg">
        <div class="container">

            <div>
                <a href="img/日月潭朝霧碼頭-大.jpg" class="example-image-link" data-lightbox="example-set" data-title="日月潭-朝霧馬頭.jpg">
                    <img class="example-image" src="img/日月潭-朝霧馬頭.jpg" alt="">
                </a>

                <p>日月潭<br>
                    朝霧馬頭</p>
            </div>
            <div>
                <a href="img/極北冬雪幻境-大.jpg" class="example-image-link" data-lightbox="example-set" data-title="極北冬雪幻境-羅浮敦群島">
                    <img class="example-image" src="img/極北冬雪幻境-羅浮敦群島.jpg" alt="">
                </a>
                <p>極北冬雪幻境<br>
                    羅浮敦群島</p>
            </div>
            <div>
                <a href="img/小鬚鳳頭樹燕-大.jpg" class="example-image-link" data-lightbox="example-set" data-title="小鬚鳳頭樹燕">
                    <img class="example-image" src="img/小鬚鳳頭樹燕.jpg" alt="">
                </a>
                <p>小鬚鳳頭樹燕</p>
            </div>
            <div>
                <a href="img/螢火蟲微光-大.jpg" class="example-image-link" data-lightbox="example-set" data-title="螢火蟲微光">
                    <img class="example-image" src="img/螢火蟲微光.jpg" alt="">
                </a>
                <p>螢火蟲微光</p>
            </div>

        </div>
    </div>
    <div class="botton_bg">
        <img src="img/FOURBG.jpg" alt="">
    </div>
    </div>
    <!-- ------------------------------------ -->
    <div class="show_phone">
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
                        <a href="cart.php"><img src="img/icon/shop.svg" alt="購物車" class="px-3 ml-2 shop"></a>
                        <a href="A_login.php"><img src="img/icon/會員.svg" alt="會員中心" class="px-2"></a>
                        <div class="menu transition show_mobile ">
                            <div class="bar bar1 transition"></div>
                            <div class="bar bar2 transition"></div>
                            <div class="bar bar3 transition"></div>
                            <ul class="transition">
                                <li><a href="#" class="transition"></a></li>
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
                        <li><a href="">首頁</a></li>
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
        <div class="right_text">
            <ul class="text_ul">
                <li class="active">LONG SHOT</li>
                <li>ACTION SHOT</li>
                <li>CLOSE UP</li>
                <li>CHEST SHOT</li>
            </ul>
        </div>
        <div class="owl-carousel owl-theme ">
            <div>
                <img src="img/風景-大.png" alt="">
            </div>
            <div>
                <img src="img/動態-大.png" alt="">
            </div>
            <div>
                <img src="img/鳥-大.png" alt="">
            </div>
            <div>
                <img src="img/人像-大.png" alt="">
            </div>
        </div>
        <div class="second">
            <a href="diy.php">
                <figure>
                    <img src="img/第二區.png" alt="">
                </figure>
            </a>
        </div>
        <div class="three">
            <a href="product-list.php">
                <figure>
                    <img src="img/第三區.png" alt="">
                </figure>
            </a>
        </div>
        <div class="four">
            <div class="container">
                <div>
                    <a href="img/日月潭朝霧碼頭-大.jpg" class="example-image-link" data-lightbox="example-set1" data-title="日月潭-朝霧馬頭.jpg">
                        <img class="example-image" src="img/日月潭-朝霧馬頭.jpg" alt="">
                    </a>
                    <p>日月潭<br>
                        朝霧馬頭</p>
                </div>
                <div>
                    <a href="img/極北冬雪幻境-大.jpg" class="example-image-link" data-lightbox="example-set1" data-title="極北冬雪幻境-羅浮敦群島">
                        <img class="example-image" src="img/極北冬雪幻境-羅浮敦群島.jpg" alt="">
                    </a>
                    <p>極北冬雪幻境<br>
                        羅浮敦群島</p>
                </div>
                <div>
                    <a href="img/小鬚鳳頭樹燕-大.jpg" class="example-image-link" data-lightbox="example-set1" data-title="小鬚鳳頭樹燕">
                        <img class="example-image" src="img/小鬚鳳頭樹燕.jpg" alt="">
                    </a>
                    <p>小鬚鳳頭樹燕</p>
                </div>
                <div>
                    <a href="img/螢火蟲微光-大.jpg" class="example-image-link" data-lightbox="example-set1" data-title="螢火蟲微光">
                        <img class="example-image" src="img/螢火蟲微光.jpg" alt="">
                    </a>
                    <p>螢火蟲微光</p>
                </div>
            </div>
        </div>
        <div class="botton_bg">
            <img src="img/FOURBG.jpg" alt="">
        </div>


    </div>






    <?php include __DIR__ . '/__footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- <script src="plugin/drag/dist/jquery.js"></script> -->
  
    <script src="plugin/skrollr.min.js"></script>
    
    <script src="plugin/drag/dist/owl.carousel.min.js"></script>
    
    <script src="plugin/wow.min.js"></script>
    <script src="plugin/lightbox/lightbox.js"></script>



    <script>
        $(window).width(function() {
            var x = $(window).width();
            console.log(x);
            if (x > 960) {
                var s = skrollr.init();
            }
        });
       
        new WOW().init();
    </script>

    <script>
        $(".menu").click(function() {
            $(this).toggleClass('active');
        });

        var headerTop = $(".header").offset().top;

        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            if (scrollTop >= headerTop) {
                $(".header").addClass("fixed");
            } else {
                $(".header").removeClass("fixed");
            }
        });

        // console.log(item)    ;   
        let pic = $(".small-pic figure");
        let B_pic = $(".main_big_pic figure");
        var item = $(".text_ul li");

        $(".small-pic figure").on('mouseenter', function() {
            let img = $(this).find("img").next().attr("src");
            $("#BigPic").attr("src", img);
            // $(B_pic).eq(2).css("opacity","1");
            // console.log($(B_pic));
            var as = $(this).attr("data-pic");
            $(item[as]).addClass("active")
            $(item[as]).siblings().removeClass("active");
           

        });
var item_s=$(".right_text .text_ul li")
            $('.owl-carousel').owlCarousel({
                items: 1,
                margin: 10,
                autoHeight: true,
                // autoplay: true,
                loop: true,
                autoplayTimeout: 500,
            });

            $('.owl-carousel').on('changed.owl.carousel', function(event) {
                var page =event.page.index;
                // console.log(page)
                $(item_s.eq([page])).addClass("active")
                $(item_s.eq([page])).siblings().removeClass("active");


            })

        $(window).width(function() {
            var x = $(window).width();
            console.log(x);
            if (x < 960) {
             
            }
        });
    </script>

    <?php include __DIR__ . '/__html_end.php' ?>