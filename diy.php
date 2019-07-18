<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>


<div class="container">
            <div class="table-l">
                
                <div  class="table">
                    <img src="img/table_bg.jpg" alt="">
                    <ul class="grade">
                            <li><a href="">專業<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a href="">進階<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a href="">入門<i class="fas fa-caret-right fa-sm"></i></a></li>
                    </ul>
                    <div class="camera_BP" >
                    <figure class="text-center">
                            <img id="camera_BP" src="" alt="">
                    </figure>

                    </div>
                    <div class="camera_Intro" >


                    </div>
                    <div class="lens_Intro">



                    </div>
                    <div class="lens_BP" >

                    <figure class="text-center">
                            <img id="lens_BP" src="" alt="">
                    </figure>

                    </div>
                    <div class="tools1_BP" >
                    <figure class="text-center">
                            <img id="tools1_BP" src="" alt="">
                    </figure>

                    </div>
                    <div class="tools1_Intro">

                        
                    </div>
                    <!-- <div class="tools2_BP">


                    </div>
                    <div class="tools2_Intro">

                        
                    </div> -->
                    <div class="redo"><i class="fas fa-redo-alt"></i></div>
                    
                </div>

                <div class="table-r">
                    <div>



                    <div class="d-flex totalMoney">
                        <h5>總金額 : NT $ </h5>
                        <input type="text" readonly value="150000">
                    </div>
                        <div class="d-flex diyBtn">
                        <a href="" class="enterCar">放入購物車</a>
                        <a href="" class="payMoney">立即結帳</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    <section class="container">
        <div class="choose">
            <h4>第一步 : 選擇相機</h4>
            <div class="d-flex step">
            <a class="px-2"><i class="fas fa-caret-left px-1"></i>上一步</a>
            <a class="px-2">下一步<i class="fas fa-caret-right px-1"></i></a>
            </div>
        </div>
        <div class="arrow">
        <span><i class="fas fa-chevron-left fa-3x"></i></span>
        <div class="d-flex justify-content-center thumbnail" id="thumbnail">
            <figure>
                <img src="./img/1.png" alt="">
            </figure>
            <figure>
                <img src="./img/1.png" alt="">
            </figure>
            <figure>
                <img src="./img/1.png" alt="">
            </figure>
            <figure>
                <img src="./img/1.png" alt="">
            </figure>
        </div>



        <span><i class="fas fa-chevron-right fa-3x"></i></span>
        </div>
    </section>   

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
            $("#thumbnail figure").click(function(){
                let img=$(this).find("img").attr("src");
                // console.log(picture);
                $("#camera_BP").attr("src",img);
                // ---------------------
                $(this).addClass("active").siblings().removeClass("active");

            });
        </script>
<?php include __DIR__ . '/__html_end.php' ?>