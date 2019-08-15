<?php require __DIR__ . '/__db_connect.php';

$camera = isset($_POST['camera_sid']) ? $_POST['camera_sid'] : 0;

$t_sql_camera = "SELECT * FROM `products` WHERE 1 AND `sid` = $camera";
$totalRows_camera = $pdo->query($t_sql_camera)->fetch();
$result['totalRows_camera']=$totalRows_camera;              //取得相機 詳細資訊

$sql_lens = "SELECT * FROM `lens` ";
$totalRows_lens = $pdo->query($sql_lens)->fetch();
$result['totalRows_lens']=$totalRows_lens;               //取得鏡頭 詳細資訊


$result = [
    'totalRows_camera' =>$totalRows_camera,
    'totalRows_lens' => $totalRows_lens,
];




echo json_encode($result, JSON_UNESCAPED_UNICODE);