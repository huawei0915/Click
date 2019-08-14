<?php require __DIR__ . '/__db_connect.php';




if(empty($_POST['product']) or empty($_SESSION['loginUser']) or empty($_POST['like'])){
    // echo 'ERROR';
    exit;
}

$member = isset($_SESSION['loginUser']) ? intval($_SESSION['loginUser']['sid']) :0 ;
$product=$_POST['product'];
$like=$_POST['like'];

if($like=='like'){
$stmt=$pdo->prepare("INSERT INTO `collection`( `member_sid`, `p_products_sid`) VALUES (?,?)");
$stmt->execute([
    $member,
    $product
]);
echo json_encode("add to like");
}else if($like='dislike'){

$sql="DELETE FROM `collection` WHERE  `member_sid`=$member AND `p_products_sid`=$product ";
$pdo->query($sql);
echo json_encode("remove from like");
}




// echo json_encode($result, JSON_UNESCAPED_UNICODE);