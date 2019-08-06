<?php include __DIR__ . '/__db_connect.php';


$page_name = 'product-list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page_camera = 4;
$per_page_lens = 4;
$per_page_tools = 4;


// 用來產生 query string
// $my_qs = [
//     'page' => $page,
//     'cate' => $cate,
// ];

// 取得分類資料
// $c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0 ORDER BY `sequence`"; // 排序條件
$c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
$cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// $where = " WHERE 1 ";

// if(! empty($cate)){
//     $where .= " AND `category_sid`=$cate ";



// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `p_products`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// $totalPages = ceil($totalRows / $per_page); // 總頁數

// 取得產品資料
// $p_sql = sprintf("SELECT * FROM `p_products`  LIMIT %s, %s ", ($page-1)*$per_page, $per_page );
$p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 ");  //相機分類

$p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 ");  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10)");    //配件分類

$stmt_camera = $pdo->query($p_camera);
$stmt_lens = $pdo->query($p_lens);
$stmt_tool = $pdo->query($p_tool);



// var_dump($stmt_camera);
// echo " <br> ";
// exit();
$rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
$rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);



// var_dump($rowsCamera);
// exit();

// var_dump($rows[0]['images']);
// echo($rows[0]['images']);
// exit();



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
                        <h6>Total : NT $ </h6>
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
                    <!-- 1.有一個外層包住裡面長度塞四個值 -->

                    <!-- 2.依序取出四個值 直到取完 -->

                        
                        
                            <div class="tab">
                                <?php foreach ($rowsCamera as $r) : ?>
                                    <figure>
                                        <img src="img/product/camera/<?= $r['images'] ?>.png" alt="">
                                    </figure>
                                    <h5 style="display:none;"><?= $r['model'] ?></h5>
                                    <h6 style="display:none;"><?= $r['description'] ?></h6>
                                    <p style="display:none;"><?= $r['price'] ?></p>
                                <?php endforeach; ?>
                            </div>
                     
                           <div class="tab">
                            <!-- <figure>
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
                            </figure> -->
                        </div>
                    </div>
                    <div class=" thumbnail overflow-wrapper-x " id="step2">
                        <div class="tab">
                            <?php foreach ($rowsLens as $r) : ?>
                                <figure>
                                    <img src="img/product/lens/<?= $r['images'] ?>.png" alt="">
                                </figure>
                                <h6 style="display:none;"><?= $r['model'] ?></h6>
                                <p style="display:none;"><?= $r['price'] ?></p>
                            <?php endforeach; ?>

                       
                        </div>
                        <div class="tab">
                            <!-- <figure>
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
                            </figure> -->
                        </div>
                        <div class="tab">
                            <!-- <figure>
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
                            </figure> -->
                        </div>
                    </div>
                    <div class=" thumbnail overflow-wrapper-x " id="step3">
                        <div class="tab">

                            <?php foreach ($rowsTool as $r) : ?>
                                <figure>
                                    <img src="img/product/tools/<?= $r['images'] ?>.png" alt="">
                                </figure>
                                <h6 style="display:none;"><?= $r['model'] ?></h6>
                                <p style="display:none;"><?= $r['price'] ?></p>
                            <?php endforeach; ?>
                            <!-- <figure>
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
                            </figure> -->
                        </div>
                        <div class="tab">
                            <!-- <figure>
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
                        </div> -->
                            <div class="tab">
                                <!-- <figure>
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
                            </figure> -->
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


    console.log(table);
    console.log(camera_BP);
    $("#step1 figure").on('click', function() {
        let img = $(this).find("img").attr("src");
        let text_h5 = $(this).next().text();
        let text_h6 = $(this).next().next().text();
        let text_p = $(this).next().next().next().text();
        $("#camera_BP").attr("src", img);
        $(".camera_Intro h5").text(text_h5);
        $(".camera_Intro h6").text(text_h6);
        $(".camera_Intro p").text('NT$' + text_p);
        $(this).siblings();
    });

    $("#step2 figure").on('click', function() {
        let img = $(this).find("img").attr("src");
        let text_h6 = $(this).next().text();
        let text_p = $(this).next().next().text();
        $("#lens_BP").attr("src", img);
        $(".lens_Intro h6").text(text_h6);
        $(".lens_Intro p").text('NT$' + text_p);
        $(this).addClass("active").siblings().removeClass("active");
    });
    $("#step3 figure").on('click', function() {

        let img = $(this).find("img").attr("src");
        let text_h6 = $(this).next().text();
        let text_p = $(this).next().next().text();
        $("#tools1_BP").attr("src", img);
        $(".tools1_Intro h6").text(text_h6);
        $(".tools1_Intro p").text('NT$' + text_p);
        $(this).addClass("active").siblings().removeClass("active");
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
    })
    $('#pro,#pro_m').click(function() {
        $("#camera_BP").attr("src", "./img/product/camera/<?= $rowsCamera[2]['images'] ?>.png");
        $(".camera_Intro h5").text("<?= $rowsCamera[2]['model'] ?>");
        $(".camera_Intro h6").text("APS-C 尺寸 2,400 萬像 CMOS、4K 拍片、內置 EVF 取景、採用 Leica T 鏡頭系統\r\n2,400 萬像素\r\n視鏡頭而定x 光學變焦\r\nBP-DC 13 專用鋰電池\r\n連電池 403 Gram");
        $(".camera_Intro p").text("NT$<?= $rowsCamera[2]['price'] ?>");
        $("#lens_BP").attr("src", "./img/product/lens/<?= $rowsLens[70]['images'] ?>.png");
        $(".lens_Intro h6").text("<?= $rowsLens[70]['model'] ?>");
        $(".lens_Intro p").text("NT$<?= $rowsLens[70]['price'] ?>");
        $("#tools1_BP").attr("src", "./img/product/tools/<?= $rowsTool[2]['images'] ?>.png");
        $(".tools1_Intro h6").text("<?= $rowsTool[2]['model'] ?>");
        $(".tools1_Intro p").text("NT$<?= $rowsTool[2]['price'] ?>");
    })
    $('#intel,#intel_m').click(function() {
        $("#camera_BP").attr("src", "./img/product/camera/<?= $rowsCamera[13]['images'] ?>.png");
        $(".camera_Intro h5").text("<?= $rowsCamera[13]['model'] ?>");
        $(".camera_Intro h6").text("1 吋背照層疊式 CMOS、Digic 8 影像處理技術、30fps RAW 連拍、24-100mm 等效焦段、最高 ISO 25600、4K 拍片、支援 YouTube 直播服務\r\n2,010 萬像素\r\n4.2x 光學變焦\r\nCanon NB-13L 鋰充電池\r\n機身 235 Gram");
        $(".camera_Intro p").text("NT$<?= $rowsCamera[13]['price'] ?>");
        $("#lens_BP").attr("src", "./img/product/lens/<?= $rowsLens[30]['images'] ?>.png");
        $(".lens_Intro h6").text("<?= $rowsLens[30]['model'] ?>");
        $(".lens_Intro p").text("NT$<?= $rowsLens[30]['price'] ?>");
        $("#tools1_BP").attr("src", "./img/product/tools/<?= $rowsTool[1]['images'] ?>.png");
        $(".tools1_Intro h6").text("<?= $rowsTool[1]['model'] ?>");
        $(".tools1_Intro p").text("NT$<?= $rowsTool[1]['price'] ?>");
    })
    $('#start,#start_m').click(function() {
        $("#camera_BP").attr("src", "./img/product/camera/<?= $rowsCamera[3]['images'] ?>.png");
        $(".camera_Intro h5").text("<?= $rowsCamera[3]['model'] ?>");
        $(".camera_Intro h6").text("COOLPIX A1000 配備 35 倍光學變焦及 70 倍動態細緻變焦，於小巧緊湊的機身中提供了最高變焦率。相機備有約 1600 萬有效像素及 ISO 6400 最高感光度，於解像度及高感光度雜訊之間取得最佳平衡，於昏暗環境下仍能呈現優異影像品質。相機機身輕盈，卻支援 4K UHD/30p 格式短片攝錄兼備降低風聲雜音功能，更可在攝錄短片期間儲存靜態影像！\r\n\r\n相機的預先自動對焦 (Pre-AF) 及目標尋找 AF 功能令拍攝特寫或昏暗場景時自動對焦更精準。此外，相機配備的減震 (VR) 功能可於拍");
        $(".camera_Intro p").text("NT$<?= $rowsCamera[3]['price'] ?>");
        $("#lens_BP").attr("src", "img/product/lens/<?= $rowsLens[2]['images'] ?>.png");
        $(".lens_Intro h6").text("<?= $rowsLens[2]['model'] ?>");
        $(".lens_Intro p").text("NT$<?= $rowsLens[2]['price'] ?>");
        $("#tools1_BP").attr("src", "./img/product/tools/<?= $rowsTool[3]['images'] ?>.png");
        $(".tools1_Intro h6").text("<?= $rowsTool[3]['model'] ?>");
        $(".tools1_Intro p").text("NT$<?= $rowsTool[3]['price'] ?>");
    })

    console.log($('#step1 .tab').length);





</script>

<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
<script>
    var ddData = [{
            text: "EOS 800D",
            value: 1,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/product/camera/EOS 800D.png"
        },
        {
            text: "EOS 800D",
            value: 2,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/2.png"
        },
        {
            text: "EOS 800D",
            value: 3,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/3.png"
        },
        {
            text: "Foursquare",
            value: 7,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/product/camera/EOS 800D.png"
        },
        {
            text: "Foursquare",
            value: 8,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/product/camera/EOS 800D.png"
        }
    ];
    var ddData1 = [{
            text: "EOS 800D",
            value: 11,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/product/lens/LC_01.png"
        },
        {
            text: "EOS 800D",
            value: 12,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/2.png"
        }
    ];
    var ddData2 = [{
            text: "EOS 800D",
            value: 21,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/product/tools/FT-03.png"
        },
        {
            text: "EOS 800D",
            value: 22,
            selected: false,
            description: "NT$111111",
            imageSrc: "img/2.png"
        }
    ];
    var ddData3 = [{
        text: "EOS 800D",
        value: 31,
        selected: true,
        description: "NT$111111",
        imageSrc: "img/product/tools/FT-03.png"
    }];

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


    $('#start_m').on('click', function() {
        $('#myDropdown').ddslick({
            data: ddData3,
        });
    });
</script>




<?php include __DIR__ . '/__html_end.php' ?>