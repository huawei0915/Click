<?php include __DIR__ . '/__db_connect.php';


$page_name = 'product-list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page_camera = 4;
$per_page_lens = 4;
$per_page_tools = 4;

// 取得分類資料
// $c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0 ORDER BY `sequence`"; // 排序條件
$c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
$cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `p_products`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];


$p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 ");  //相機分類
$p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 ");  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10)");    //配件分類

$stmt_camera = $pdo->query($p_camera);
$stmt_lens = $pdo->query($p_lens);
$stmt_tool = $pdo->query($p_tool);


$rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
$rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>

<div class="diy_show_desktop">
    <div class="container">
        <div class="table-l">

            <div class="table" id="table">
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
                <div class="camera_Intro">
                    <h5></h5>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="lens_BP">
                    <figure class="text-center">
                        <img id="lens_BP" src="" alt="">
                    </figure>
                </div>
                <div class="lens_Intro">
                    <h6></h6>
                    <p></p>
                </div>
                <div class="tools1_BP">
                    <figure class="text-center">
                        <img id="tools1_BP" src="" alt="">
                    </figure>
                </div>
                <div class="tools1_Intro">
                    <h6></h6>
                    <p></p>
                </div>
                <div class="redo"><i class="fas fa-redo-alt"></i></div>
            </div>
            <div class="table-r">
                <!-- <form action="" method="post" onsubmit="return checkForm()"> -->
                <div class="p-item">


                    <div class="d-flex justify-content-around align-items-center flex-wrap comm">
                    </div>
                    <!-- -------------------- -->
                    <div class="d-flex justify-content-around align-items-center comm1">
                    </div>
                    <div class="d-flex justify-content-around align-items-center comm2">
                    </div>
                    <div class="d-flex totalMoney">
                        <h6>Total : NT $ </h6>
                        <input type="text" class="calcMoney" readonly value="">
                    </div>
                    <div class="d-flex diyBtn">
                        <button type="button" class="enterCar buy-btn">放入購物車</button>
                        <button type="button" class="payMoney">立即結帳</button>
                    </div>
                </div>
                <!-- </form> -->
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
                        <!-- 1.有一個外層包住裡面長度塞四個值 -->

                        <!-- 2.依序取出四個值 直到取完 -->



                        <div class="tab">
                            <?php foreach ($rowsCamera as $k => $r) : ?>
                                <figure data-index="<?= $k ?>">
                                    <img src="img/product/<?= $r['images'] ?>.png" alt="">
                                </figure>

                            <?php endforeach; ?>
                        </div>

                        <div class="tab">

                        </div>
                    </div>
                    <div class=" thumbnail overflow-wrapper-x " id="step2">
                        <div class="tab">
                            <?php foreach ($rowsLens as $k => $r) : ?>
                                <figure data-index="<?= $k ?>">
                                    <img src="img/product/<?= $r['images'] ?>.png" alt="">
                                </figure>

                            <?php endforeach; ?>


                        </div>
                        <div class="tab">

                        </div>
                        <div class="tab">

                        </div>
                    </div>
                    <div class=" thumbnail overflow-wrapper-x " id="step3">
                        <div class="tab">

                            <?php foreach ($rowsTool as $k => $r) : ?>
                                <figure data-index="<?= $k ?>">
                                    <img src="img/product/<?= $r['images'] ?>.png" alt="">
                                </figure>

                            <?php endforeach; ?>

                        </div>
                        <div class="tab">

                            <div class="tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span onclick="showRight();" id="right"><i class="fas fa-chevron-right fa-3x"></i></span>

        </div>
    </section>
</div>



<!-- --------------phone-------------- -->


<div class="diy_show_mobile">
    <div class="container">
        <div class="">
            <h2 class="pt-3 ml-3">首選推薦</h2>
            <ul class="d-flex grade_m">
                <li class="d-flex flex-column align-items-center"><a href="#" id="start_m">入門</a><i class="fas fa-caret-down"></i></li>
                <li class="d-flex flex-column align-items-center"><a href="#" id="intel-m">進階</a><i class="fas fa-caret-down"></i></li>
                <li class="d-flex flex-column align-items-center"><a href="#" id="pro_m">專業</a><i class="fas fa-caret-down"></i></li>
            </ul>
            <div class="choose_m">

                <div id="myDropdown"></div>

                <div id="myDropdown1"></div>

                <div id="myDropdown2"></div>

                <div class="d-flex pt-3 total">
                    <h6 class="">Total </h6>
                    <p class="ml-3"> NT$ 15000</p>

                </div>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script> -->
<script>
    let table = $("#table").offset().left;
    let camera_BP = $("#camera_BP").offset().left;
    let rowsCamera = <?= json_encode($rowsCamera, JSON_UNESCAPED_UNICODE) ?>;//將所有的相機資料撈出來
    let rowsLens = <?= json_encode($rowsLens, JSON_UNESCAPED_UNICODE) ?>;//將所有的鏡頭資料撈出來
    let rowsTool = <?= json_encode($rowsTool, JSON_UNESCAPED_UNICODE) ?>;//將所有的配件資料撈出來
    let my_set = {                                    //設定我一開始沒有選擇時的數值為0
        camera: 0,
        len: 0,
        tool: 0,
    };
    let pre_set = [{                                    //設定我指定的推薦等級
            camera: rowsCamera[2],
            len: rowsLens[70],
            tool: rowsTool[2]
        },
        {
            camera: rowsCamera[13],
            len: rowsLens[30],
            tool: rowsTool[1]
        }, {
            camera: rowsCamera[3],
            len: rowsLens[2],
            tool: rowsTool[3]
        }
    ];


    $("#step1 figure").on('click', function() {                         //第一步的相機選擇
        let index = parseInt($(this).attr('data-index'));
        let dataObj = rowsCamera[index];
        my_set.camera = dataObj;
        showPreSet();
    });

    $("#step2 figure").on('click', function() {                         //第二步的鏡頭選擇
        let index = parseInt($(this).attr('data-index'));
        let dataObj = rowsLens[index];
        my_set.len = dataObj;
        showPreSet();

    });
    $("#step3 figure").on('click', function() {                         //第三步的配件選擇
        let index = parseInt($(this).attr('data-index'));
        let dataObj = rowsTool[index];
        my_set.tool = dataObj;
        showPreSet();
    });





    // --------- 滑動----------------
    // 1. 先初始化，應該第一步和第一頁
    let index = 1;
    let step = 1;
    let $page = <?php echo $page ?>;

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
            $page++;

        }
    }

    function showNext() {
        if (step + 1 <= 3) {

            step++;
            changeStep(step);
        }
    }

    function showPrev() {
        if (step - 1 >= 1) {
            step--;
            changeStep(step);
        }
    }
    // 2. 切換步驟的時候，左右滑動應該要恢復至第一頁，
    function changeStep(step) {
        $('.overflow-wrapper-y').removeClass('show-step1 show-step2 show-step3');
        $('.overflow-wrapper-y').addClass('show-step' + step);
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
        $('#step' + step + '.overflow-wrapper-x').removeClass('show-item1 show-item2 show-item3');
        $('#step' + step + '.overflow-wrapper-x').addClass('show-item' + index);
    }


    $('.table .redo').click(function() {
        $("#camera_BP").attr("src", "");
        $(".camera_Intro h5,.camera_Intro h6,.camera_Intro p").text("");
        $("#lens_BP").attr("src", "");
        $(".lens_Intro h6,.lens_Intro p").text("");
        $("#tools1_BP").attr("src", "");
        $(".tools1_Intro h6,.tools1_Intro p").text("");
        $(".comm").html("");
        $(".comm1").html("");
        $(".comm2").html("");
        $(".calcMoney").val(0);
    })


    function showPreSet() {
        let setObj = my_set;
       
        if (setObj.camera === 0) {      //如果沒有選相機的時候 清單表清空
            $(".comm").html('');
            // $(".calcMoney").val(setObj.camera.price=0);
        } else {
            $("#camera_BP").attr("src", "./img/product/" + setObj.camera.images + ".png");
            $(".camera_Intro h5").text(setObj.camera.model);
            $(".camera_Intro h6").html(setObj.camera.description);
            $(".camera_Intro p").text("NT$" + setObj.camera.price);
            $(".comm").html(`<figure>
                            <img src="./img/product/${setObj.camera.images}.png" alt="">
                        </figure>
                        <h6>${setObj.camera.model}</h6>`);
        }
        if (setObj.len === 0) {
            $(".comm1").html('');       //如果沒有選鏡頭的時候 清單表清空
            // $(".calcMoney").val(setObj.len.price=0);
        } else {
            $("#lens_BP").attr("src", "./img/product/" + setObj.len.images + ".png");
            $(".lens_Intro h6").text(setObj.len.model);
            $(".lens_Intro p").text("NT$" + setObj.len.price);
            $(".comm1").html(`<figure>
            <img src="./img/product/${setObj.len.images}.png" alt="">
            </figure>
        <h6>${setObj.len.model}</h6>`);
        // $(".calcMoney").val(parseInt(setObj.camera.price) + parseInt(setObj.len.price));
        }
        if (setObj.tool === 0) {
            $(".comm2").html('');       //如果沒有選配件的時候 清單表清空
            // $(".calcMoney").val(setObj.tool.price=0);
        } else {
            $("#tools1_BP").attr("src", "./img/product/" + setObj.tool.images + ".png");
            $(".tools1_Intro h6").text(setObj.tool.model);
            $(".tools1_Intro p").text("NT$" + setObj.tool.price);
            $(".comm2").html(`<figure>
                            <img src="./img/product/${setObj.tool.images}.png" alt="">
                        </figure>
                        <h6>${setObj.tool.model}</h6>`);
            
        }
        $(".calcMoney").val(parseInt(setObj.camera.price) + parseInt(setObj.len.price) + parseInt(setObj.tool.price));
    }
    $('#pro,#pro_m').click(function() {
        my_set = {
            camera: pre_set[0].camera,
            len: pre_set[0].len,
            tool: pre_set[0].tool,
        };
        showPreSet();
    })
    $('#intel,#intel_m').click(function() {
        my_set = {
            camera: pre_set[1].camera,
            len: pre_set[1].len,
            tool: pre_set[1].tool,
        };
        showPreSet();
    })
    $('#start,#start_m').click(function() {
        my_set = {
            camera: pre_set[2].camera,
            len: pre_set[2].len,
            tool: pre_set[2].tool,
        };
        showPreSet();
    })

    // console.log($('#step1 .tab').length);
</script>

<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
<script>
    var ddData = [{value:"1",text:"EOS 5D Mark IV",description:"NT$117000",imageSrc: "img/product/CC-01.png"},{value:"2",text:"Nikon Z7",description:"NT$102980",imageSrc: "img/product/CN-11.png"},{value:"3",text:"Leica CL",description:"NT$155000",imageSrc: "img/product/CL-02.png"},{value:"4",text:"Shot G7 X Mark III",description:"NT$16500",imageSrc: "img/product/CC-11.png"},{value:"5",text:"Nikon Coolpix A1000",description:"NT$15900",imageSrc: "img/product/CN-12.png"},{value:"6",text:"Leica Q2",description:"NT$183160",imageSrc: "img/product/CL-05.png"},{value:"7",text:"EOS 1D X Mark II",description:"NT$169000",imageSrc: "img/product/CC-09.png"},{value:"8",text:"Nikon D5",description:"NT$209900",imageSrc: "img/product/CN-13.png"},{value:"9",text:"Leica M-D Typ 262",description:"NT$226000",imageSrc: "img/product/CL-11.png"},{value:"100",text:"EOS 6D Mark II",description:"NT$49900",imageSrc: "img/product/CC-02.png"},{value:"102",text:"EOS 77D",description:"NT$23900",imageSrc: "img/product/CC-04.png"},{value:"103",text:"EOS 80D",description:"NT$31900",imageSrc: "img/product/CC-05.png"},{value:"104",text:"EOS 800D",description:"NT$18900",imageSrc: "img/product/CC-06.png"},{value:"105",text:"EOS R",description:"NT$67000",imageSrc: "img/product/CC-07.png"},{value:"106",text:"EOS RP",description:"NT$42900",imageSrc: "img/product/CC-08.png"},{value:"107",text:"Leica_M10",description:"NT$280000",imageSrc: "img/product/CL-01.png"},{value:"108",text:"Leica-C-Lux",description:"NT$40000",imageSrc: "img/product/CL-03.png"},{value:"109",text:"Leica-D-Lux-7",description:"NT$40000",imageSrc: "img/product/CL-04.png"},{value:"110",text:"Leica-SL-system",description:"NT$218000",imageSrc: "img/product/CL-06.png"},{value:"111",text:"Leica-Sofort",description:"NT$12900",imageSrc: "img/product/CL-07.png"},{value:"112",text:"leica-s-system",description:"NT$505000",imageSrc: "img/product/CL-08.png"},{value:"113",text:"Leica-TL2",description:"NT$70700",imageSrc: "img/product/CL-09.png"},{value:"114",text:"Leica-V-Lux",description:"NT$45900",imageSrc: "img/product/CL-10.png"},{value:"115",text:"nikon- d7200",description:"NT$24900",imageSrc: "img/product/CN-01.png"},{value:"116",text:"nikon-5600",description:"NT$20900",imageSrc: "img/product/CN-02.png"},{value:"117",text:"nikon-d500",description:"NT$69900",imageSrc: "img/product/CN-03.png"},{value:"118",text:"nikon-d750",description:"NT$49000",imageSrc: "img/product/CN-04.png"},{value:"119",text:"nikon-d850",description:"NT$99850",imageSrc: "img/product/CN-05.png"},{value:"120",text:"nikon-d3500",description:"NT$14500",imageSrc: "img/product/CN-06.png"},{value:"121",text:"nikon-d7500",description:"NT$39150",imageSrc: "img/product/CN-07.png"},{value:"122",text:"nikon-z6",description:"NT$61000",imageSrc: "img/product/CN-08.png"}];

    var ddData1 = [{value:"10" ,text:"Nikon AF-S NIKKOR 200-500mm f\/5.6E ED VR", description:"NT$43920",imageSrc: "img/product/LN_01.png"},{value:"11" ,text:"Nikon 1 NIKKOR VR 70-300mm f\/4.5-5.6", description:"NT$29400",imageSrc: "img/product/LN_02.png"},{value:"12" ,text:"Nikon 1 NIKKOR VR 10-100mm f\/4.5-5.6 PD-ZOOM", description:"NT$21900",imageSrc: "img/product/LN_03.png"},{value:"13" ,text:"Nikon AF-S VR Zoom-Nikkor 70-300mm f\/4.5-5.6G IF-ED",description:"NT$20700",imageSrc: "img/product/LN_04.png"},{value:"14" ,text:"Nikon AF-S DX VR Zoom-Nikkor 55-200mm f\/4-5.6G IF-ED",description:"NT$8100",imageSrc: "img/product/LN_05.png"},{value:"15" ,text:"Nikon AF-S Nikkor 300mm f\/4D IF-ED",description:"NT$36250",imageSrc: "img/product/LN_06.png"},{value:"16" ,text:"Nikon AF DC-Nikkor 135mm f\/2D",description:"NT$29800",imageSrc: "img/product/LN_07.png"},{value:"17" ,text:"Nikon AF-S Nikkor 500mm f\/4G ED VR",description:"NT$282700",imageSrc: "img/product/LN_08.png"},{value:"18" ,text:"Nikon AF Nikkor 180mm f\/2.8D IF-ED",description:"NT$30500",imageSrc: "img/product/LN_09.png"},{value:"19" ,text:"Nikon AF-S NIKKOR 200mm f\/2G ED VR II",description:"NT$183900",imageSrc: "img/product/LN_10.png"},{value:"20" ,text:"Nikon AF-S Fisheye NIKKOR 8-15mm f\/3.5-4.5E ED",description:"NT$42300",imageSrc: "img/product/LN_11.png"},{value:"21" ,text:"Nikon AF-P DX NIKKOR 10-20mm F\/4.5-5.6G VR",description:"NT$10700",imageSrc: "img/product/LN_12.png"},{value:"22" ,text:"Nikon 1 NIKKOR VR 6.7-13mm f\/3.5-5.6",description:"NT$16800",imageSrc: "img/product/LN_13.png"},{value:"23" ,text:"Nikon AF-S NIKKOR 16-35mm f\/4G ED VR",description:"NT$43200",imageSrc: "img/product/LN_14.png"},{value:"24" ,text:"Nikon AF-S NIKKOR 14-24mm f\/2.8G ED",description:"NT$68050",imageSrc: "img/product/LN_15.png"},{value:"25" ,text:"Nikon NIKKOR Z 35mm f\/1.8 S",description:"NT$28700",imageSrc: "img/product/LN_16.png"},{value:"26" ,text:"Nikon AF-S Nikkor 20mm f\/1.8G ED",description:"NT$28000",imageSrc: "img/product/LN_17.png"},{value:"27" ,text:"Nikon 1 NIKKOR 10mm f\/2.8",description:"NT$7500",imageSrc: "img/product/LN_18.png"},{value:"28" ,text:"Nikon AF Nikkor 20mm f\/2.8D",description:"NT$17500",imageSrc: "img/product/LN_19.png"},{value:"29" ,text:"Nikon AF DX Fisheye-Nikkor 10.5mm f\/2.8G ED",description:"NT$23600",imageSrc: "img/product/LN_20.png"},{value:"30" ,text:"Nikon AF-S NIKKOR 24-70mm f\/2.8E ED VR",description:"NT$72000",imageSrc: "img/product/LN_21.png"},{value:"31" ,text:"Nikon 1 Nikkor VR 10-30mm f\/3.5-5.6 PD-ZOOM",description:"NT$10500",imageSrc: "img/product/LN_22.png"},{value:"32" ,text:"Nikon AF-S NIKKOR 24-120mm F4 G ED VR",description:"NT$39500",imageSrc: "img/product/LN_23.png"},{value:"33" ,text:"Nikon AF-S DX NIKKOR 18-55mm f\/3.5-5.6G VR",description:"NT$5200",imageSrc: "img/product/LN_24.png"},{value:"34" ,text:"Nikon AF-S DX Zoom-Nikkor 17-55mm f\/2.8G IF-ED",description:"NT$45500",imageSrc: "img/product/LN_25.png"},{value:"35" ,text:"Nikon AF-S DX Micro NIKKOR 40mm f\/2.8G",description:"NT$9100",imageSrc: "img/product/LN_26.png"},{value:"36" ,text:"Nikon AF-S VR Micro-Nikkor 105mm f\/2.8G IF-ED",description:"NT$27900",imageSrc: "img/product/LN_27.png"},{value:"37" ,text:"Nikon AF-S Micro NIKKOR 60mm f\/2.8G ED",description:"NT$21100",imageSrc: "img/product/LN_28.png"},{value:"38" ,text:"Nikon AF Micro-Nikkor 60mm f\/2.8D",description:"NT$12800",imageSrc: "img/product/LN_29.png"},{value:"39" ,text:"Nikon AF Micro-Nikkor 200mm f\/4D IF-ED",description:"NT$41600",imageSrc: "img/product/LN_30.png"},{value:"40",text:"Canon EF 70-300 F4-5.6 IS II USM", description:"NT$16350",imageSrc: "img/product/LC_01.png"},{value:"41",text:"Canon EF 70-300mm f\/4.0-5.6 L IS USM", description:"NT$44000",imageSrc: "img/product/LC_02.png"},{value:"42",text:"Canon EF 70-200mm f\/2.8L IS II USM", description:"NT$71150",imageSrc: "img/product/LC_03.png"},{value:"43",text:"Canon EF-S 55-250mm F4-5.6 IS",description:"NT$8300",imageSrc: "img/product/LC_04.png"},{value:"44",text:"Canon EF 70-200mm f4.0L USM",description:"NT$22000",imageSrc: "img/product/LC_05.png"},{value:"45",text:"Canon EF 300mm f\/2.8 L IS II USM",description:"NT$202000",imageSrc: "img/product/LC_06.png"},{value:"46" ,text:"Canon EF 300mm f4L IS USM",description:"NT$44700",imageSrc: "img/product/LC_07.png"},{value:"47" ,text:"Canon EF 200mm f2.8L II USM", description:"NT$24800",imageSrc: "img/product/LC_08.png"},{value:"48" ,text:"Canon EF 135mm f2.0L USM",description:"NT$33100",imageSrc: "img/product/LC_09.png"},{value:"49" ,text:"Canon EF 500mm f\/4L IS II USM", description:"NT$291100",imageSrc: "img/product/LC_10.png"},{value:"50" ,text:"Canon EF 11-24mm f\/4L USM", description:"NT$94000",imageSrc: "img/product/LC_11.png"},{value:"51" ,text:"Canon EF 16-35mm F4L IS USM",description:"NT$33500",imageSrc: "img/product/LC_12.png"},{value:"52" ,text:"Canon EF-M 11-22mm f\/4-5.6 IS STM", description:"NT$12000",imageSrc: "img/product/LC_13.png"},{value:"53" ,text:"Canon EF 17-40mm f\/4.0L USM", description:"NT$25100",imageSrc: "img/product/LC_14.png"},{value:"54" ,text:"Canon EF-S 10-22mm f\/3.5-4.5 USM",description:"NT$20000",imageSrc: "img/product/LC_15.png"},{value:"55" ,text:"Canon EF 35mm f\/1.4L II USM",description:"NT$58300",imageSrc: "img/product/LC_16.png"},{value:"56" ,text:"Canon EF 35mm f\/2 IS USM",description:"NT$20700",imageSrc: "img/product/LC_17.png"},{value:"57" ,text:"Canon EF-M 22mm f\/2.0 STM", description:"NT$7500",imageSrc: "img/product/LC_18.png"},{value:"58" ,text:"Canon EF 14mm f\/2.8L II USM", description:"NT$69500",imageSrc: "img/product/LC_19.png"},{value:"59" ,text:"Canon EF 28mm f\/1.8 USM", description:"NT$17500",imageSrc: "img/product/LC_20.png"},{value:"60" ,text:"Canon RF 28-70mm f\/2L USM",description:"NT$98700",imageSrc: "img/product/LC_21.png"},{value:"61" ,text:"Canon EF 24-70mm f2.8L II USM",description:"NT$63100",imageSrc: "img/product/LC_22.png"},{value:"62" ,text:" Canon EF 28-300mm f3.5-5.6L IS USM",description:"NT$78000",imageSrc: "img/product/LC_23.png"},{value:"63" ,text:"Canon EF 24-105mm f\/3.5-5.6 IS STM",description:"NT$16300",imageSrc: "img/product/LC_24.png"},{value:"64" ,text:"Canon EF 24-70mm f\/4L IS USM",description:"NT$39100",imageSrc: "img/product/LC_25.png"},{value:"65" ,text:"Canon EF 100mm f\/2.8L Macro IS USM" ,description:"NT$28700",imageSrc: "img/product/LC_26.png"},{value:"66" ,text:"Canon EF 180mm f\/3.5L Macro USM" ,description:"NT$46300",imageSrc: "img/product/LC_27.png"},{value:"67" ,text:" Canon EF-M 28mm f\/3.5 Macro IS STM" ,description:"NT$9900",imageSrc: "img/product/LC_28.png"},{value:"68" ,text:"Canon EF 100mm f2.8 Macro USM",description:"NT$20300",imageSrc: "img/product/LC_29.png"},{value:"69" ,text:" Canon EF-S 60mm f2.8 Macro USM" ,description:"NT$16000",imageSrc: "img/product/LC_30.png"},{value:"70", text:"LEICA APO-VARIO-ELMAR-T 55-135mm f\/3.5-4.5 ASPH.",description:"NT$68000",imageSrc: "img/product/LL_01.png"},{value:"71", text:"LEICA APO Tele Elmar-S 180\/3.5 (CS)",description:"NT$260550",imageSrc: "img/product/LL_02.png"},{value:"72", text:"LEICA APO-TELYT-M 135 mm f\/3.4", description:"NT$125000",imageSrc: "img/product/LL_03.png"},{value:"73", text:"Leica Super-Vario-Elmar-SL 16–35\/3.5–4.5 ASPH.",description:"NT$179800",imageSrc: "img/product/LL_04.png"},{value:"74", text:"LEICA SUPER-VARIO-ELMAR-T 11-23mm f\/3.5-4.5 ASPH.", description:"NT$60750",imageSrc: "img/product/LL_05.png"},{value:"75", text:"LEICA TRI-ELMAR-M 16-18-21 mm f\/4 ASPH",description:"NT$220100",imageSrc: "img/product/LL_06.png"},{value:"76", text:"Leica Super-Elmar-M 21mm f\/3.4 ASPH",description:"NT$104300",imageSrc: "img/product/LL_07.png"},{value:"77", text:"LEICA SUMMICRON-M 35 mm f\/2 ASPH", description:"NT$80000",imageSrc: "img/product/LL_08.png"},{value:"78", text:"LEICA ELMARIT-M 28 mm f\/2.8 ASPH", description:"NT$56800",imageSrc: "img/product/LL_09.png"},{value:"79", text:"LEICA SUMMILUX-M 21 mm f\/1.4 ASPH", description:"NT$178000",imageSrc: "img/product/LL_10.png"},{value:"80", text:"LEICA ELMAR-M 24mm f\/3.8 ASPH", description:"NT$51100",imageSrc: "img/product/LL_11.png"},{value:"81", text:"LEICA VARIO-ELMAR-T 18-56mm f\/3.5-5.6 ASPH.",description:"NT$55200",imageSrc: "img/product/LL_12.png"},{value:"82", text:"Leica APO-Macro-Elmarit-TL 60mm F2.8 ASPH" ,description:"NT$50000",imageSrc: "img/product/LL_13.png"},{value:"83", text:"LEICA APO Macro Summarit-S 120\/2.5 (CS)" ,description:"NT$11800",imageSrc: "img/product/LL_14.png"},{value:"84", text:"LEICA MACRO-ELMAR-M 90 mm f\/4" ,description:"NT$74000",imageSrc: "img/product/LL_15.png"}];

    var ddData2 = [{value:"89",text:"新武士 SAMURAI Outdoor 255B 反折 三腳架",description:"NT$1590",imageSrc: "img/product/FT-01\r\n.png"},{value:"90",text:"KINGJOY 勁捷 K3208腳架+QH20雲台",description:"NT$5390",imageSrc: "img/product/FT-03.png"},{value:"91",text:"BEIKE 北卡 BK-472 碳纖維專家必備扳扣型三腳架",description:"NT$3690",imageSrc: "img/product/FT-04.png"},{value:"92",text:"FOTOPRO MINI PRO 迷你三腳架",description:"NT$2490",imageSrc: "img/product/FT-02.png"},{value:"93",text:"Speedlite 600EX II-RT",description:"NT$19900",imageSrc: "img/product/LG-01.png"},{value:"94",text:"Macro Twin Lite MT-26EX-RT 微距雙邊閃光燈",description:"NT$31600",imageSrc: "img/product/LG-02.png"},{value:"95",text:"Canon MR-14EX II 環形微距閃光燈 ",description:"NT$18870",imageSrc: "img/product/LG-03.png"},{value:"96",text:"Nikon Speedlight SB-5000 閃光燈",description:"NT$13585",imageSrc: "img/product/LG-04.png"},{value:"97",text:"NIKON Speedlight SB-700 閃光燈 平輸",description:"NT$8500",imageSrc: "img/product/LG-05.png"},{value:"98",text:"Godox TT685N 閃光燈",description:"NT$3000",imageSrc: "img/product/LG-06.png"},{value:"99",text:"Leica SF 60 Flash 閃光燈",description:"NT$19100",imageSrc: "img/product/LG-07.png"}];
    // var ddData3 = [{
    //     text: "EOS 800D",
    //     value: 31,
    //     selected: true,
    //     description: "NT$111111",
    //     imageSrc: "img/product/tools/FT-03.png"
    // }];

    $('#myDropdown').ddslick({
        data: ddData,
        width: 300,
        height: 300,
        imagePosition: "left",
        selectText: "選擇相機",
        onSelected: function(selectedData) {
            console.log(selectedData);
        }
    });
    $('#myDropdown1').ddslick({
        data: ddData1,
        width: 300,
        height: 300,
        imagePosition: "left",
        selectText: "選擇鏡頭",
        onSelected: function(selectedData) {
            console.log(selectedData)
        }
    });
    $('#myDropdown2').ddslick({
        data: ddData2,
        width: 300,
        height: 200,
        imagePosition: "left",
        selectText: "選擇配件",
        onSelected: function(selectedData) {
            console.log(selectedData)
        }
    });


    // $('#start_m').on('click', function() {
    //     $('#myDropdown').ddslick({
    //         data: ddData3,
    //     });
    // });
</script>
<script>
    var buy_btn = $('.buy-btn');
        buy_btn.click(function() {
            var p_item = $(this).closest('.p-item');
            var sid = p_item.attr('data-index');
            // var qty = p_item.find('#quantity_number').val();
            console.log({
                sid: sid,
                qty: 1,
            });

            $.get('add_to_cart.php', {
                sid: sid,
                qty: 1
            }, function(data) {
                calcQty(data);
                // alert('感謝加入購物車');

            }, 'json');


        });
</script>
<?php include __DIR__ . '/__html_end.php' ?>