<?php

// sid // product id
// qty // quantity

session_start();

if(! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_GET['sid'])) {
    $sid = intval($_GET['sid']);
    if(!empty($_GET['qty'])){
        // 加入或修改
        // TODO: 檢查有沒有這個產品

        $_SESSION['cart'][$sid] = intval($_GET['qty']);
    } else {
        // 刪除
        unset($_SESSION['cart'][$sid]);
    }
}

// 呈現購物車的狀態
echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
