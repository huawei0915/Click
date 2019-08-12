<?php require __DIR__ . '/__db_connect.php';

$p_tool = sprintf("SELECT * FROM `p_products` WHERE `model` LIKE 'canon%' OR `model` LIKE 'nikon%' OR `model` LIKE 'leica%'" );
$stmt_tool = $pdo->query($p_tool);
$rowsTool = $stmt_tool->fetchAll(PDO::FETCH_ASSOC);
?>