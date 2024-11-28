<?php
session_start();
include 'bd.php';

// Проверка, установлен ли cookie 'id'
if (!isset($_COOKIE['id'])) {
    die('User ID is not set.');
}

$user_id = $_COOKIE['id'];

// Проверка, установлена ли сумма заказа
if (!isset($_POST['total_sum'])) {
    die('Total sum is not set.');
}

$price = $_POST['total_sum'];
$date = date("Y.m.d");

if (!isset($_SESSION['cart-list']) || count($_SESSION['cart-list']) === 0) {
    die('Cart is empty.');
}

$counter = 0;

foreach ($_SESSION['cart-list'] as $product) {
    $goods_id = $product['id'];
    
    // Проверка, передан ли товар и его количество
    if (!isset($_POST[$goods_id])) {
        die("Quantity for product ID $goods_id is not set.");
    }

    $goods_count = $_POST[$goods_id];

    $result2 = $mysql->query("SELECT * FROM `goods` WHERE `id` = '$goods_id'");
    if (!$result2) {
        die('Error in query: ' . $mysql->error);
    }

    $finishresult = $result2->fetch_assoc();
    if (!$finishresult) {
        die('Product not found.');
    }

    $goods_price = $finishresult['price'];
    $goods_price_int = intval(preg_replace('/[^0-9]+/', '', $goods_price), 10);
    $goods_sumprice = $goods_price_int * $goods_count;

    // Вставка данных в таблицу orders
    $query = "INSERT INTO `orders` (`id_user`, `id_goods`, `status`, `price`, `date`) 
              VALUES ('$user_id', '$goods_id', 1, '$goods_sumprice', '$date')";
    if (!$mysql->query($query)) {
        die('Error in insert query: ' . $mysql->error);
    }

    // Обновление количества товара
    $update_query = "UPDATE `goods` SET `count` = `count` - '$goods_count' WHERE `id` = '$goods_id'";
    if (!$mysql->query($update_query)) {
        die('Error in update query: ' . $mysql->error);
    }
}

$mysql->close();
session_destroy();

header('Location: /pages/profil.php');
exit;
?>
