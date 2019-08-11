<?php require __DIR__ . '/__db_connect.php';

$sql_camera = "SELECT `product_name` FROM `products`";
$totalRows_camera_model = $pdo->query($sql_camera)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_camera_model']=$totalRows_camera_model;   //取得相機型號

$sql_lens = "SELECT `model` FROM `lens` ";
$totalRows_lens_model = $pdo->query($sql_lens)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_lens_model']=$totalRows_lens_model;      //取得鏡頭型號

$t_sql_camera = "SELECT * FROM `products`";
$totalRows_camera = $pdo->query($t_sql_camera)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_camera']=$totalRows_camera;              //取得相機 詳細資訊

$sql_lens = "SELECT * FROM `lens` ";
$totalRows_lens = $pdo->query($sql_lens)->fetchAll(PDO::FETCH_NUM);
$result['totalRows_lens']=$totalRows_lens;                  //取得鏡頭 詳細資訊


$result = [
    'totalRows_camera_model' => $totalRows_camera_model,
    'totalRows_lens_model' => $totalRows_lens_model,
    'totalRows_camera' =>$totalRows_camera,
    'totalRows_lens' => $totalRows_lens,
  
];




echo json_encode($result, JSON_UNESCAPED_UNICODE);