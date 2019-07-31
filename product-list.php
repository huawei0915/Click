<?php include __DIR__ . '/__db_connect.php' ;

$page_name='product-list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page = 4;

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
// }


// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `products` ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// $totalPages = ceil($totalRows/$per_page); // 總頁數

// 取得產品資料
$p_sql = sprintf("SELECT * FROM `products` LIMIT %s, %s ", ($page-1)*$per_page, $per_page );
$stmt = $pdo->query($p_sql);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


var_dump($rows);

exit();

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

    <!-- PRODUCT CAMERA -->
    <div class="prd_cam" style="background-color: #F1F1F1;">

        <!-- PRODUCT CAMERA TOP -->
        <div class="prd_camtop d-flex">
            <div class="cards_cam" style="background-color: #fff;">
            <?php foreach($row as $r): ?>
                <div class="cam_pic"><img src="img/product/lens<?= $r['images'] ?>.png" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>

            <?php endforeach; ?>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
        </div>

        <!-- PRODUCT CAMERA DOWN -->
        <div class="prd_camdown d-flex">
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
            <div class="cards_cam" style="background-color: #fff;">
                <div class="cam_pic"><img src="" alt=""></div>
                <h6>EOS-1D X Mark II</h6>
                <ul>
                    <li> 全新2,020萬像素全片幅CMOS影像感應器</li>
                    <li> 突破性每秒14張高速連續拍攝</li>
                    <li> 高精確度61點高密度網型結構自動對焦感應器</li>
                </ul>
                <hr>
                <p>NT$ 169,000</p>
            </div>
        </div>
       
    </div>

    <!-- PRODUCT LENS -->
    <div class="prd_lens" style="background-color: #F1F1F1;">
        <!-- PRODUCT LENS TOP -->
        <div class="prd_lenstop d-flex">
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
        </div>

        <!-- PRODUCT LENS DOWN -->
        <div class="prd_lensdown d-flex">
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
            <div class="cards_lens" style="background-color: #fff;">
                <div class="lens_pic"><img src="" alt=""></div>
                <h6>EF-S18-200mm<br>f/3.5-5.6 IS</h6>
                <hr>
                <p>NT$ 24,400.00</p>
            </div>
        </div>
        
    </div>


</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>