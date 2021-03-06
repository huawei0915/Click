<?php
require __DIR__. '/__db_connect.php';

$result = [
    'success' => false,
    'code' => 0,
    'info' => '資料欄位不足',
    'post' => $_POST,
];


// echo json_encode($_SESSION['loginUser']);
// exit;

// TODO: 檢查欄位

if(empty($_SESSION['loginUser']) or empty($_POST['password'])){
    // 欄位只要有一個沒填, 就結束
    echo json_encode($result);
    exit;
}

// 判斷密碼正不正確
$sql = "SELECT * FROM `members` WHERE `sid`=? AND `password`=SHA1(?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_SESSION['loginUser']['sid'],
    $_POST['password'],
]);

// if( $stmt->rowCount()<1 ){
//     $result['code'] = 430;
//     $result['info'] = '密碼錯誤';

//     echo json_encode($result);
//     exit;
// }


$sql = "UPDATE `members` SET `password`=SHA1(?) WHERE `sid`=?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['newpassword'],    
    $_SESSION['loginUser']['sid'],
]);

if($stmt->rowCount()==1){
    $result['success'] = true;
    $result['info'] = '資料修改成功';

    // $_SESSION['loginUser']['nickname'] = $_POST['nickname'];
} else {
    $result['info'] = '資料修改失敗';
    $result['code'] = 400;
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);


