<?php

require __DIR__. '/__db_connect.php';

// 先確認是否已登入
if(! isset($_SESSION['loginUser'])) {
    header('Location: ./');
    exit;
}

// 購物車內是否有產品
if(empty($_SESSION['cart'])) {
    header('Location: product-list.php');
    exit;
}

$keys = array_keys($_SESSION['cart']);

$sql = sprintf("SELECT * FROM `products` WHERE `sid` IN (%s)",
    implode(',', $keys));
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$dict = array();
$totalPrice = 0;
foreach($rows as $r){
    $r['qty'] = $_SESSION['cart'][$r['sid']]; // 把數量放進去
    $dict[$r['sid']] = $r;
    $totalPrice += $r['qty'] * $r['price'];
}

//header('Content-Type: text/plain');
//print_r($dict);


// 寫入 orders 資料表
$o_sql = "INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ?, NOW())";

$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['loginUser']['sid'],
    $totalPrice
]);

$order_sid = $pdo->lastInsertId(); // 拿到最近新增一筆的 PK


//echo $order_sid;

// 寫入 order_details 資料表
$od_sql = "INSERT INTO `order_details`(
    `order_sid`, `product_sid`, `price`, `quantity`
    ) VALUES (?, ?, ?, ?)";
$od_stmt = $pdo->prepare($od_sql);

foreach($keys as $k){
    $od_stmt->execute([
        $order_sid,
        $k,
        $dict[$k]['price'],
        $dict[$k]['qty'],
    ]);
}

unset($_SESSION['cart']); // 清除購物車內容
?>
<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__nav.php' ?>

<div class="container">
    <div class="alert alert-success" role="alert">
        感謝訂購
    </div>
</div>
<?php include __DIR__. '/__footer.php' ?>
<?php include __DIR__. '/__script.php' ?>
<?php include __DIR__. '/__html_end.php' ?>

