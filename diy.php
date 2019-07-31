<?php require __DIR__. '/__db_connect.php' ;

$page_name='diy';
// 取得分類
$c_sql="SELECT * FORM `categories` WHERE `parent_sid`=1";
// $cates=$pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);


// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 1;


// $where ="WHERE 1";

if(!empty($cate)){
    // $where .="AND `category_sid`=$cate";
}

// 取得總筆數
// $t_sql="SELECT COUNT(1) FROM `products` $where";
// $totalRows=$pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];



// $p_sql=sprintf("SELECT * FROM `products` $where LIMIT %s ,%s ", ($page-1)*$per_page,$per_page);
// $stmt=$pdo->query($p_sql);

// $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $camera = $pdo->query("SELECT * FROM `products` WHERE 1");
//拿到了 categories 值為 products_sid=1  拿到了三大類的相機

// $lens = $pdo->query("SELECT * FROM `lens` WHERE 1");
//拿到了 categories 值為 products_sid=1  拿到了三大類的鏡頭

// $tools = $pdo->query("SELECT * FROM `categories` WHERE parent_sid=3");
//拿到了 categories 值為 products_sid=1  拿到了三大類的配件


?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>

<div class="diy_show_desktop">
<div class="container">
            <div class="table-l">
                
                <div  class="table" id="table">
                    <img src="img/table_bg.jpg" alt="">
                    <ul class="grade">
                            <li><a id="pro">專業<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a id="intel">進階<i class="fas fa-caret-right fa-sm"></i></a></li>
                            <li><a id="start">入門<i class="fas fa-caret-right fa-sm"></i></a></li>
                    </ul>
                    <div class="camera_BP" id="camera_BP_box">
                        <figure class="text-center">
                                <img id="camera_BP" src="" alt="">
                        </figure>

                    </div>
                    <div class="camera_Intro" >


                    </div>
                  
                    <div class="lens_BP" >

                        <figure class="text-center">
                                <img id="lens_BP" src="" alt="">
                        </figure>

                    </div>
                    <div class="lens_Intro">



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
                        <div class="d-flex justify-content-around align-items-center comm">
                            <figure>
                                <img src="img/2.png" alt="">
                            </figure>
                            <h6>EOS 5DZZZZZZZZ</h6>

                            <a href="" class="remove"><img src="img/icon/X.svg" alt=""></a>
                        </div>
                        <!-- -------------------- -->
                        <div class="d-flex justify-content-around align-items-center comm">
                            <figure>
                                <img src="img/2.png" alt="">
                            </figure>
                            <h6>EOS 5DZZZZZZZZ</h6>
                            
                            <a href="" class="remove"><img src="img/icon/X.svg" alt=""></a>
                        </div>

                        <div class="d-flex justify-content-around align-items-center comm">
                            <figure>
                                <img src="img/2.png" alt="">
                            </figure>
                            <h6>EOS 5DZZZZZZZZ</h6>
                            
                            <a href="" class="remove"><img src="img/icon/X.svg" alt=""></a>
                        </div>


                    <div class="d-flex totalMoney">
                        <h5>總金額 : NT $ </h5>
                        <input type="text" readonly value="150000">
                    </div>
                        <div class="d-flex diyBtn">
                        <button type="button" class="enterCar">放入購物車</button>
                        <button type="button" class="payMoney">立即結帳</button>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    <section class="container">
        <div class="choose">
            <h4>第一步 : 選擇相機</h4>
            <div class="d-flex step">
                <span class="px-2 display" id="prev" onclick="showPrev();"><i class="fas fa-caret-left px-1"></i>上一步</span>
                <span class="px-2" id="next" onclick="showNext();">下一步<i class="fas fa-caret-right px-1"></i></span>
            </div>
        </div>
        <div class="arrow">
        <span onclick="showLeft();" id="left"><i class="fas fa-chevron-left fa-3x"></i></span>
        <div class="flow">
            <div class="overflow-wrapper-y">
                <div class=" thumbnail overflow-wrapper-x show-step1 show-item1" id="step1">
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
                <div class=" thumbnail overflow-wrapper-x " id="step2">
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
                <div class=" thumbnail overflow-wrapper-x " id="step3">
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
        </div>
        <span  onclick="showRight();" id="right"><i class="fas fa-chevron-right fa-3x"></i></span>
        </div>
    </section>   
</div>



    <!-- --------------phone-------------- -->


<div class="diy_show_mobile">
    <div class="container">
        <div class="">
            <h2 class="pt-3 ml-3">首選推薦</h2>
            <ul class="d-flex grade_m">
                <li class="d-flex flex-column align-items-center"><a href="" id="start_m">入門</a><i class="fas fa-caret-down"></i></li>
                <li class="d-flex flex-column align-items-center"><a href="" id="intel-m">進階</a><i class="fas fa-caret-down"></i></li>
                <li class="d-flex flex-column align-items-center"><a href="" id="pro_m">專業</a><i class="fas fa-caret-down"></i></li>
            </ul>
            <div class="choose_m">
            <div class="choose_camera_m">
                <ul>
                    <li><span></span>選擇相機<i class="fas fa-chevron-down"></i></li>
                    <li><a href=""></a></li>
                </ul>   
            </div>
            <div class="choose_lens_m">
                <ul>
                    <li><span></span>選擇鏡頭<i class="fas fa-chevron-down"></i></li>
                    <li><a href=""></a></li>
                </ul>  
            </div>
            <div class="choose_tools_m">
                <ul>
                    <li><span></span>選擇配件<i class="fas fa-chevron-down"></i></li>
                    <li><a href=""></a></li>
                </ul> 
            </div>
            </div>
            <div class="d-flex">
                <h5 class="pt-3 ml-5">總金額 : NT $ </h5>
                <input type="text"  readonly value="150000">

            </div>
            <div class="text-center">
            <button class="enterCar_m">放入購物車</button>
            <button class="payMoney_m">立即結帳</button>
            </div>
        </div>
            
    </div>
</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script>
            let table=$("#table").offset().left;
            let camera_BP=$("#camera_BP").offset().left;
            console.log(table);
                console.log(camera_BP);
            $("#step1 figure").on('click', function () {
                let itemX=$(this).offset().left-table;
                let itemY=$(this).offset().top;
                console.log(itemX);
                console.log(itemY);
                // $("#camera_BP_box")
                //     .css({
                //     left: itemX,
                //     top: itemY,
                //     width: 200,
                //     opacity: 1
                //     })
                //     .find("img").attr("src", img)
                
                
                // TweenMax.to("#camera_BP_box", 0.8, {left:table-camera_BP, top: 10, width: 20});
                // TweenMax.to("#camera_BP_box", .3, {
                //     css:{
                //     opacity: 0
                //     }, delay:0.5})



                    // ------------------
                let img=$(this).find("img").attr("src");
                $("#camera_BP").attr("src",img);
                $(this).siblings();
                

            });
            
            $("#step2 figure").on('click', function () {
                let smallPicLeft=this.offsetLeft;
                let smallPicTop=this.offsetTop;
                let img=$(this).find("img").attr("src");
                $("#lens_BP").attr("src",img);
                $(this).addClass("active").siblings().removeClass("active");

                console.log(smallPicLeft);
                console.log(smallPicTop);
            });
            $("#step3 figure").on('click', function () {
                let smallPicLeft=this.offsetLeft;
                let smallPicTop=this.offsetTop;
                let img=$(this).find("img").attr("src");
                $("#tools1_BP").attr("src",img);
                $(this).addClass("active").siblings().removeClass("active");

                console.log(smallPicLeft);
                console.log(smallPicTop);
            });
          
             // --------- 滑動----------------
             // 1. 先初始化，應該第一步和第一頁
            let index = 1;
            let step = 1 ; 
        
            function showLeft() {
                if (index - 1 >= 1) {
                    index--;
                    changeItem(index);
                }
            }
            function showRight() {
                if (index + 1 <= 3) {
                    index++;
                    changeItem(index);                
                }
            }
            function showNext() {
                if (step + 1 <= 3) {
                    
                    step++;      
                    changeStep(step);
                }
            }
            function showPrev(){
                if  (step - 1 >= 1) {
                    step--;
                    changeStep(step);
                }
            }
            // 2. 切換步驟的時候，左右滑動應該要恢復至第一頁，
            function changeStep(step) {
                $('.overflow-wrapper-y').removeClass('show-step1 show-step2 show-step3');
                $('.overflow-wrapper-y').addClass('show-step'+ step);
                index = 1;
                changeItem(1);
                switch (step) {
                    case 1:
                        $('.choose h4').html('第一步 : 選擇相機');
                        $("#prev").addClass("display");
                        $("#next").removeClass("display");
                        break;
                    case 2:
                        $('.choose h4').html('第二步 : 選擇鏡頭');
                        $("#prev").removeClass("display");
                        $("#next").removeClass("display");
                        break;
                    case 3:
                        $('.choose h4').html('第三步 : 選擇配件');
                        $("#prev").removeClass("display");
                        $("#next").addClass("display");
                        break;
                    default:
                }
            }
            // 3. 如果是左右滑動的畫，應為步驟不動，然後更換頁碼
            function changeItem(index) {
                // clean
                $('#step'+ step +'.overflow-wrapper-x').removeClass('show-item1 show-item2 show-item3');
                $('#step'+ step +'.overflow-wrapper-x').addClass('show-item'+ index );
            }

            
            $('.table .redo').click(function(){
                    $("#camera_BP").attr("src","");
                    $("#lens_BP").attr("src","");
                    $("#tools1_BP").attr("src","");
                })
                $('#pro,#pro_m').click(function(){
                    $("#camera_BP").attr("src","img/2.png");
                    $("#lens_BP").attr("src","img/3.png");
                    $("#tools1_BP").attr("src","img/2.png");
                })
                $('#intel,#intel_m').click(function(){
                    $("#camera_BP").attr("src","img/3.png");
                    $("#lens_BP").attr("src","img/2.png");
                    $("#tools1_BP").attr("src","img/1.png");
                })
                $('#start,#start_m').click(function(){
                    $("#camera_BP").attr("src","img/1.png");
                    $("#lens_BP").attr("src","img/2.png");
                    $("#tools1_BP").attr("src","img/2.png");
                })

                console.log($('#step1 .tab').length);
        </script>
<?php include __DIR__ . '/__html_end.php' ?>