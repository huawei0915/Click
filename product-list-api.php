<?php require __DIR__. '/__db_connect.php';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要看哪個分類
$per_page_camera = 8;  //相機顯示數量
$per_page_lens = 4 ;  //鏡頭顯示數量
$per_page_tools=0;    //配件顯示數量

// 用來產生 query string
$my_qs = [
    'page' => $page,
    'cate' => $cate,
];

// 回傳資料的格式
$result = [
    'page' => $page,
    'cate' => $cate,
    'per_page' => $per_page,
    'totalRows' => 0,
    'totalPages' => 0,
    'qs' => $my_qs,
    'rows' => [],
];

$where = " WHERE 1 ";

if(! empty($cate)){
    $where .= " AND `category_sid`=$cate ";
}


// 取得總筆數
$t_sql = "SELECT COUNT(1) FROM `products` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$result['totalRows'] = $totalRows;

$totalPages = ceil($totalRows/$per_page); // 總頁數
$result['totalPages'] = $totalPages;

// 取得產品資料
$p_sql = sprintf("SELECT * FROM `products` $where LIMIT %s, %s ", ($page-1)*$per_page, $per_page );
$stmt = $pdo->query($p_sql);

$p_camera = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6 LIMIT %s, %s ", ($page-1)*$per_page_camera,$per_page_camera );  //鏡頭分類
$p_lens = sprintf("SELECT * FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16 LIMIT %s, %s ", ($page-1)*$per_page_lens, $per_page_lens);  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products` WHERE `category_sid` IN (8,10) LIMIT %s, %s ", ($page-1)*$per_page_tools, $per_page_tools);   //配件分類


$search = sprintf ("SELECT * FROM `p_products` WHERE `model` LIKE 'canon%' OR `model` LIKE 'leica%' OR `model` LIKE 'nikon%'"); //收尋



$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result['rows'] = $rows;

echo json_encode($result, JSON_UNESCAPED_UNICODE);


