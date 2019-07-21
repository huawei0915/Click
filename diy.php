<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>


<div class="container">
            <div class="table-l">
                
                <div  class="table">
                    <img src="img/table_bg.jpg" alt="">
                    <ul class="grade">
                            <li><a id="pro">專業<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a id="intel">進階<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a id="start">入門<i class="fas fa-caret-right fa-sm"></i></a></li>
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
                    <div class="redo" ><i class="fas fa-redo-alt"></i></div>
                    
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
                <span class="px-2" id="prev" onclick="showPrev();"><i class="fas fa-caret-left px-1"></i>上一步</span>
                <span class="px-2" id="next" onclick="showNext();">下一步<i class="fas fa-caret-right px-1"></i></span>
            </div>
        </div>
        <div class="arrow">
        <span onclick="showLeft();" id="left"><i class="fas fa-chevron-left fa-3x"></i></span>
        <div class="flow">
            <div class=" thumbnail overflow-wrapper show-step1 show-item1" id="step1">
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                </div>
            </div>
            <div class=" thumbnail overflow-wrapper " id="step2">
                <div class="tab">
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                </div>
            </div>
            <div class=" thumbnail overflow-wrapper " id="step3">
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/2.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                </div>
                <div class="tab">
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/1.png" alt="">
                    </figure>
                    <figure>
                        <img src="./img/3.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <span  onclick="showRight();" id="right"><i class="fas fa-chevron-right fa-3x"></i></span>
        </div>
    </section>   
    <!-- <div class="action">
                    <p onclick="showLeft();">left</p>
                    <p onclick="showRight();">right</p>
                    <p onclick="showPrev();">prev</p>
                    <p onclick="showNext();">next</p>
                </div>
            <div class="flow">
                
                <div id="step1" class="overflow-wrapper show-item1">
                    <div class="tab">
          
                    </div>
                </div>
                <div id="step2" class="overflow-wrapper show-item1">
                    <div class="tab">
                    
                    </div>
                </div>
            </div>
        
    </div>    -->



<?php //include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
            $("#step1 figure").click(function(){
                let img=$(this).find("img").attr("src");
                $("#camera_BP").attr("src",img);
                $(this).addClass("active").siblings().removeClass("active");
            });
            $("#step2 figure").click(function(){
                let img=$(this).find("img").attr("src");
                $("#lens_BP").attr("src",img);
                $(this).addClass("active").siblings().removeClass("active");
            });
            $("#step3 figure").click(function(){
                let img=$(this).find("img").attr("src");
                $("#tools1_BP").attr("src",img);
                $(this).addClass("active").siblings().removeClass("active");
            });
          
             // --------- 滑動----------------
             let index = 1;
             let step = 1 ; 
            function showLeft() {
                if (index - 1 >= 1) {
                    index--;
                    $('#step1.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step2.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step3.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step1.overflow-wrapper').addClass('show-item'+ index );
                    $('#step2.overflow-wrapper').addClass('show-item'+ index );
                    $('#step3.overflow-wrapper').addClass('show-item'+ index );
                }
            }

            function showRight() {
                if (index + 1 <= 3) {
                    index++;
                    $('#step1.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step2.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step3.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step1.overflow-wrapper').addClass('show-item'+ index );
                    $('#step2.overflow-wrapper').addClass('show-item'+ index );
                    $('#step3.overflow-wrapper').addClass('show-item'+ index );
                   
                }
            }
            function showNext(){
               
                if (step + 1 <= 3) {
                    step++;      
                if (step==1){
                    $('#step1.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step1.overflow-wrapper').removeClass('show-step1 show-step2 show-step3');
                    $('.choose h4').html('第一步 : 選擇相機');
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                }
                if (step==2){
                    $('#step2.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step2.overflow-wrapper').removeClass('show-step1 show-step2 show-step3');
                    $('.choose h4').html('第二步 : 選擇鏡頭');
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                    $('#step2.overflow-wrapper').addClass('show-step'+ step );
                    $('#step3.overflow-wrapper').addClass('show-step'+ step );
                }
                if (step==3){
                    $('#step3.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                    $('#step3.overflow-wrapper').removeClass('show-step1 show-step2 show-step3');
                    $('.choose h4').html('第三步 : 選擇配件');
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                    $('#step2.overflow-wrapper').addClass('show-step'+ step );
                    $('#step3.overflow-wrapper').addClass('show-step'+ step );
                }
                }
            }
            function showPrev(){
                $('#step1.overflow-wrapper,#step2.overflow-wrapper,#step3.overflow-wrapper').removeClass('show-item1 show-item2 show-item3');
                $('#step1.overflow-wrapper,#step2.overflow-wrapper,#step3.overflow-wrapper').removeClass('show-step1 show-step2 show-step3');
                if  (step - 1 >= 1) {
                    step--;
                    
                if (step==1){
                    $('.choose h4').html('第一步 : 選擇相機');
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                }
                if (step==2){
                    $('.choose h4').html('第二步 : 選擇鏡頭');
                    
                    $('#step2.overflow-wrapper').removeClass('show-step'+ step-1 );
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                    $('#step2.overflow-wrapper').addClass('show-step'+ step );
                }
                if (step==3){
                    $('.choose h4').html('第三步 : 選擇配件');
              
                    $('#step3.overflow-wrapper').removeClass('show-step'+ step-1 );
                    $('#step1.overflow-wrapper').addClass('show-step'+ step );
                    $('#step3.overflow-wrapper').addClass('show-step'+ step );
                }
                }
            }
            
            $('.table .redo').click(function(){
                    $("#camera_BP").attr("src","");
                    $("#lens_BP").attr("src","");
                    $("#tools1_BP").attr("src","");
                })
                $('#pro').click(function(){
                    $("#camera_BP").attr("src","img/2.png");
                    $("#lens_BP").attr("src","img/3.png");
                    $("#tools1_BP").attr("src","img/2.png");
                })
                $('#intel').click(function(){
                    $("#camera_BP").attr("src","img/3.png");
                    $("#lens_BP").attr("src","img/2.png");
                    $("#tools1_BP").attr("src","img/1.png");
                })
                $('#start').click(function(){
                    $("#camera_BP").attr("src","img/1.png");
                    $("#lens_BP").attr("src","img/2.png");
                    $("#tools1_BP").attr("src","img/2.png");
                })
        </script>
<?php include __DIR__ . '/__html_end.php' ?>