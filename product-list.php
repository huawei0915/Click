<?php include __DIR__ . '/__db_connect.php';

$page_name = 'product-list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page_camera = 8;  //相機顯示數量
$per_page_lens = 8;  //鏡頭顯示數量
$per_page_tools = 0;    //配件顯示數量

$c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
// $c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=1";
$cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `p_products`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 LIMIT %s, %s ", ($page - 1) * $per_page_camera, $per_page_camera);  //鏡頭分類
$p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 LIMIT %s, %s ", ($page - 1) * $per_page_lens, $per_page_lens);  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10) LIMIT %s, %s ", ($page - 1) * $per_page_tools, $per_page_tools);   //配件分類

$stmt_camera = $pdo->query($p_camera);
$stmt_lens = $pdo->query($p_lens);
$stmt_tool = $pdo->query($p_tool);

$rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
$rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);


$brand = isset($_GET['brand']) ? intval($_GET['brand']) : 0; //廠牌
$category = isset($_GET['category']) ? intval($_GET['category']) : 0; //次分類
$price = isset($_GET['price']) ? intval($_GET['price']) : 0; //價格

// $cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

$where = " WHERE 1 ";

if (!empty($brand)) {
    $where .= " AND `category_sid`=$brand ";
}
if (!empty($category)) {
    $where .= " AND `category_sid`=$category ";
}


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
                    <!-- <input type="range" class="form-control-range prbar" id="formControlRange"> -->
                </div>
                <div>
                    <div class="form-group">
                        <section class="range-slider">
                            <span class="output outputOne"></span>
                            <span class="output outputTwo"></span>
                            <span class="full-range"></span>
                            <span class="incl-range"></span>
                            <input name="rangeOne" value="1000" min="0" max="400000" step="1" type="range">
                            <input name="rangeTwo" value="400000" min="0" max="400000" step="1" type="range">
                        </section>
                    </div>
                </div>
            </div>

            <div class="pl_brand">
                <div class="custom-control custom-checkbox">

                    <input type="checkbox" class="custom-control-input" id="br_canon" value="1">
                    <label class="custom-control-label" for="br_canon">CANON</label>

                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_nikon" value="2">
                    <label class="custom-control-label" for="br_nikon">NIKON</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_leica" value="3">
                    <label class="custom-control-label" for="br_leica">LEICA</label>
                </div>
            </div>

            <div class="pl_camera">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="5">
                    <label class="custom-control-label" for="customCheck1">微單眼相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" value="4">
                    <label class="custom-control-label" for="customCheck2">全片幅相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" value="6">
                    <label class="custom-control-label" for="customCheck3">數位攝影機</label>
                </div>
            </div>

            <div class="pl_lens">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4" value="14">
                    <label class="custom-control-label" for="customCheck4">廣角定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5" value="13">
                    <label class="custom-control-label" for="customCheck5">廣角變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6" value="15">
                    <label class="custom-control-label" for="customCheck6">標準變焦鏡頭</label>
                </div>
            </div>
            <div class="pl_lens">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7" value="18">
                    <label class="custom-control-label" for="customCheck7">遠攝定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck8" value="17">
                    <label class="custom-control-label" for="customCheck8">遠攝變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck9" value="16">
                    <label class="custom-control-label" for="customCheck9">微距鏡頭</label>
                </div>
            </div>

            <div class="pl_parts">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck10" value="10">
                    <label class="custom-control-label" for="customCheck10">閃光燈</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck11" value="8">
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

        <!-- PRODUCT LIST CAMERA -->
        <div class="plt d-flex flex-wrap">
            <?php foreach ($rowsCamera as $r) : ?>
                <div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="img/product/camera/<?= $r['images'] ?>.png" alt=""></figure>
                    <h6><?= $r['model'] ?></h6>
                    <ul>
                        <li><?= $r['description'] ?></li>
                    </ul>
                    <!-- <hr> -->
                    <p>NT$<?= $r['price'] ?></p>
                    <div class="compare">比較</div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="prd_list" style="background-color: #F1F1F1;">
       
        <!-- PRODUCT LIST LENS -->
        <div class="plt d-flex flex-wrap">
            <?php foreach ($rowsLens as $r) : ?>
                <div class="prd_cards" style="background-color: #fff;">
                    <figure class="prd_pic"><img src="./img/product/lens/<?= $r['images'] ?>.png" alt=""></figure>
                    <h6><?= $r['model'] ?></h6>
                    <ul>
                        <li>焦距 : <?= $r['description'] ?></li>
                    </ul>
                    <!-- <hr> -->
                    <p>NT$<?= $r['price'] ?></p>
                    <div class="compare">比較</div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>


<script src="plugin/json2.js"></script>
<script>
var rangeOne = document.querySelector('input[name="rangeOne"]'),
		rangeTwo = document.querySelector('input[name="rangeTwo"]'),
		outputOne = document.querySelector('.outputOne'),
		outputTwo = document.querySelector('.outputTwo'),
		inclRange = document.querySelector('.incl-range'),
		updateView = function () {
			if (this.getAttribute('name') === 'rangeOne') {
				outputOne.innerHTML = this.value;
				outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
			} else {
				outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
				outputTwo.innerHTML = this.value
			}
			if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
				inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
				inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
			} else {
				inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
				inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
			}
		};

	document.addEventListener('DOMContentLoaded', function () {
		updateView.call(rangeOne);
		updateView.call(rangeTwo);
		$('input[type="range"]').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			updateView.call(this);
		});
	});
</script>





<?php include __DIR__ . '/__html_end.php' ?>