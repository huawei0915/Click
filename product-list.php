<?php   include __DIR__ . '/__db_connect.php';

$page_name = 'product-list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page_camera = 8;
$per_page_lens = 4;

$c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
$cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `p_products`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 LIMIT %s, %s ", ($page-1)*$per_page_camera,$per_page_camera );  //鏡頭分類
$p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 LIMIT %s, %s ", ($page-1)*$per_page_lens, $per_page_lens);  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10)");   //配件分類

$stmt_camera = $pdo->query($p_camera);
$stmt_lens = $pdo->query($p_lens);
$stmt_tool = $pdo->query($p_tool);

$rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
$rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);
// var_dump($rows[0]['images']);
// echo($rows[0]['images']);
// exit();


?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>
    
<!-- PRODUCT FILTER -->
<div class="prd_filter">
    <div class="container">
        <div class="filte">

            <div class="prd_price">
                <div class="form-group">
                    <label for="formControlRange">篩選列表</label>
                    <input type="range" class="form-control-range prbar" id="formControlRange">
                </div>
                <div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="pl_brand">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_canon">
                    <label class="custom-control-label" for="br_canon">CANON</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_nikon">
                    <label class="custom-control-label" for="br_nikon">NIKON</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_leica">
                    <label class="custom-control-label" for="br_leica">LEICA</label>
                </div>
            </div>

            <div class="pl_camera">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">微單眼相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">全片幅相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">數位攝影機</label>
                </div>                
            </div>

            <div class="pl_lens">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">廣角定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">廣角變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">標準變焦鏡頭</label>
                </div>
            </div>   
            <div class="pl_lens">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">遠攝定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">遠攝變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">微距鏡頭</label>
                </div>
            </div>

            <div class="pl_parts">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">閃光燈</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                    <label class="custom-control-label" for="customCheck11">腳架</label>
                </div>
            </div>

            <div class="filter_btn">
                <button type="button" class="btn btn-secondary ftbn">篩選</button>
            </div>

        </div>
    </div>
</div>

<!-- BANNER -->
<div class="pl-ban">
    <img src="img\canon-banner.jpg" alt="">
</div>

<!-- PRODUCT LIST -->
<div class="container">


    <div class="prd_list" style="background-color: #F1F1F1;">

        <!-- PRODUCT LIST TOP -->
        <div class="plt d-flex flex-wrap">
        <?php foreach($rowsCamera as $r): ?>
            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img  src="img/product/camera/<?= $r['images'] ?>.png" alt=""></figure>
                <h6><?= $r['model']?></h6>
                <ul>
                    <li><?= $r['description'] ?></li>
                </ul>
                <!-- <hr> -->
                <p>NT$<?= $r['price']?></p>
                <div class="compare">比較</div>               
            </div>
            <?php endforeach; ?>
            
            

        </div>

        <!-- PRODUCT LIST MID -->
        <div class="plt d-flex flex-wrap">
        <?php foreach($rowsLens as $r): ?>
            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="./img/product/lens/<?= $r['images'] ?>.png" alt=""></figure>
                <h6><?= $r['model']?></h6>
                <ul>
                    <li>焦距 : <?= $r['description'] ?></li>
                </ul>
                <!-- <hr> -->
                <p>NT$<?= $r['price']?></p>
                <div class="compare">比較</div>               
            </div>
            <?php endforeach; ?>
        <!-- <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div> -->

        </div>

        <span id="dots"></span>
        
        <span id="more">

        <!-- PRODUCT LIST DOWN -->
        <div class="pld d-flex">

        <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

            <div class="prd_cards" style="background-color: #fff;">
                <figure class="prd_pic"><img src="" alt=""></figure>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
                <div class="compare">比較</div>               
            </div>

        </div>

        </span>

        <div onclick="myFunction()" id="morebtn">More</div>

    </div>

</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("morebtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "More"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Less"; 
    moreText.style.display = "inline";
  }
}
</script>

<?php include __DIR__ . '/__html_end.php' ?>