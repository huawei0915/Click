<?php require __DIR__. '/__db_connect.php';

$camera_page = isset($_POST['camera_page']) ? intval($_POST['camera_page']) : 1; // 用戶要看第幾頁
$lens_page = isset($_POST['lens_page']) ? intval($_POST['lens_page']) : 1;
$tools_page = isset($_POST['tools_page']) ? intval($_POST['tools_page']) : 1;
$per_page_camera = 8;  //相機顯示數量
$per_page_lens = 8;  //鏡頭顯示數量
$per_page_tools=4;


$min = intval($_POST['min']);
$max = intval($_POST['max']);

$cate = !empty($_POST['cate']) ? $_POST['cate'] : 0;
$brand = !empty($_POST['brand']) ? $_POST['brand'] : 0;
$cateVal=is_array($cate) ? implode("','",$cate) : $cate;
$brandVal=is_array($brand) ? implode("','",$brand) : $brand;


// 回傳資料的格式
$result = [
    'camera_page' => $camera_page,
    'per_page_camera' => $per_page_camera,
    'lens_page' =>$lens_page,
    'per_page_lens' => $per_page_lens,
    'tools_page' =>$tools_page,
    'per_page_tools' => $per_page_tools,
    'totalRows' => 0,
    'totalPages' => 0,
    'min' => $min,
    'max' => $max,
    'rows' => [],
];

$where = " WHERE 1 ";
if(!empty($min)){
    $where .= " AND `price`>$min ";
};
if(!empty($min)){
    $where .= " AND `price`<$max ";
}
if (!empty($brand)) {
    $where .= " AND `brand_sid` IN ('$brandVal') ";
}
if (!empty($cate)) {
    $where .= " AND `category_sid` IN ('$cateVal')";
}
$result['where']=$where;

$c_sql = "SELECT * FROM `p_products` ORDER BY `category_sid` ASC";
// $c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=1";
$cates = $pdo->query($c_sql)->fetchAll(PDO::FETCH_ASSOC);

// 取得總筆數
$t_sql_camera = "SELECT COUNT(1) FROM `p_products` WHERE `category_sid` BETWEEN 4 AND 6";
$totalRows_camera = $pdo->query($t_sql_camera)->fetch(PDO::FETCH_NUM)[0];
$result['totalRows_camera']=$totalRows_camera;

$t_sql_lens = "SELECT COUNT(1) FROM `p_products` WHERE `category_sid` BETWEEN 11 AND 16";
$totalRows_lens = $pdo->query($t_sql_lens)->fetch(PDO::FETCH_NUM)[0];
$result['totalRows_lens']=$totalRows_lens;

$t_sql_tools = "SELECT COUNT(1) FROM `p_products` WHERE `category_sid` IN (8,10)";
$totalRows_tools = $pdo->query($t_sql_camera)->fetch(PDO::FETCH_NUM)[0];
$result['totalRows_tools']=$totalRows_tools;

$totalPage_camera = ceil($totalRows_camera/$per_page_camera);
$result['totalPage_camera']=$totalPage_camera;
$totalPage_lens = ceil($totalRows_lens/$per_page_lens);
$result['totalPage_lens']=$totalPage_lens;
$totalPage_tools = ceil($totalRows_tools/$per_page_tools);
$result['totalPage_tools']=$totalPage_tools;


$p_camera = sprintf("SELECT * FROM `p_products`".$where."AND `category_sid` BETWEEN 4 AND 6 LIMIT %s, %s ", ($camera_page - 1) * $per_page_camera, $per_page_camera);  //鏡頭分類
$p_lens = sprintf("SELECT * FROM `p_products`".$where."AND `category_sid` BETWEEN 11 AND 16 LIMIT %s, %s ", ($lens_page - 1) * $per_page_lens, $per_page_lens);  //鏡頭分類
$p_tool = sprintf("SELECT * FROM `p_products`".$where."AND `category_sid` IN (8,10) LIMIT %s, %s ", ($tools_page - 1) * $per_page_tools, $per_page_tools);   //配件分類

$stmt_camera = $pdo->query($p_camera);
$stmt_lens = $pdo->query($p_lens);
$stmt_tool = $pdo->query($p_tool);

$rowsCamera = $stmt_camera->fetchAll(PDO::FETCH_ASSOC);
$result['rowsCamera']=$rowsCamera;
$rowsLens = $stmt_lens->fetchAll(PDO::FETCH_ASSOC);
$result['rowsLens']=$rowsLens;
$rowsTools = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);
$result['rowsTools']=$rowsTools;

echo json_encode($result, JSON_UNESCAPED_UNICODE);


