<?php
session_start();

unset($_SESSION['loginUser']);
unset($_SESSION['cart']);

header('Location: ./product-list.php');

