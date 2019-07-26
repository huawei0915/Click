<?php include __DIR__ . '/__html_head.php' ?>
<style>
    /* header{
        background:transparent;
        position:absolute;
        top:100vh;
        z-index:999;
    } */
.serbox {
    padding-left: 160px;
    
  }
  #arm {
    right: 118px;
    top: 71%;
  }

</style>
<body>

<div class="index_view1">
    <div class="main_big_pic">
        <figure>
            <img id="BigPic" src="img/風景-大.png" alt="">
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
            <img src="img/風景.jpg" alt=""  >
            <img class="none" src="img/風景-大.png" alt="">
        </figure>
        <figure data-pic="1">
            <img src="img/動態.jpg" alt="" >
            <img class="none" src="img/動態-大.png" alt="">
        </figure>
        <figure  data-pic="2">
            <img src="img/鳥-小.jpg" alt="">
            <img class="none" src="img/鳥-大.png" alt="">
        </figure>
        <figure  data-pic="3">
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
                    <li><a href="">CANON</a></li>
                    <li><a href="">NIKON</a></li>
                    <li><a href="" style="letter-spacing:1px;">LEICA</a></li>
                    <li><a href="">產品列表</a></li>
                    <li><a href="diy.php">首選推薦</a></li>
                    <li><a href="">攝影分享</a></li>
                </ul>
            </div>
            <div class="col-3">
                <div class="right_top ">
                    <form method="post" action="">
                        <div class="serbox" style="margin-right:-25px;">                              
                            <input id="mag" type="search" placeholder="    Search..." name="search">
                        <div id="arm"></div>
                    </form>
                    <a href=""><img src="img/icon/shop.svg" alt="" class="px-3 ml-2" style="height: 28px;"></a>
                    <a href=""><img src="img/icon/會員.svg" alt="" style="height: 26px;"class="px-2"></a>
                </div>
                <div class="nar_right">
                    <ul class="row">
                    <li><a href="">關於我們</a></li>
                    <li><a href="">客服支援</a></li>
                    </ul>
                </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<div style="height:200vh;"></div>

<?php // include __DIR__ . '/__footer.php' ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
    <script>
        var form = document.querySelector(".form");
        var signIn = document.getElementById("signIn");
        var signUp = document.getElementById("signUp");

        signUp.addEventListener("click", function() {
            form.classList.add("translate");
        });
        signIn.addEventListener("click", function() {
            form.classList.remove("translate");
        });
//登入切換動畫
    </script> 
    <script>
        $(".menu").click(function(){
          $(this).toggleClass('active');
        });

        var headerTop=$(".header").offset().top;

        $(window).scroll(function(){
        var scrollTop=$(this).scrollTop();
        if(scrollTop>=headerTop){
            $(".header").addClass("fixed");
        }else{
            $(".header").removeClass("fixed");
        }
        });
    </script>
    <script>
    // console.log(item)    ;   
                let pic= $(".small-pic figure");
                var item = $(".text_ul li");
    
                
            $(".small-pic figure").on('click', function () {
         

            let img=$(this).find("img").next().attr("src");
            $("#BigPic").attr("src",img);

                var as=$(this).attr("data-pic");

                $(item[as]).addClass("active")
                $(item[as]).siblings().removeClass("active");

        });
   

    </script>
<?php include __DIR__ . '/__html_end.php' ?>