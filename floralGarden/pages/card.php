<?php
    session_start(); 
    $mysql = new mysqli('localhost','root','root','flora');

    require('../php/function.php');

    if(isset($_GET['goods_add_id']) && !empty($_GET['goods_add_id'])) {
        $current_added_product = get_product_by_id($_GET['goods_add_id']);
        if (!empty($current_added_product)) {
            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
                
            }

            $product_check = false;
            if  (isset($_SESSION['cart-list'])) {
                foreach($_SESSION['cart-list'] as $value) {
                    if ($value['id'] == $current_added_product['id']) {
                        $product_check = true;
                        
                    } 
                }
            }
            
            if(!$product_check) {
                $_SESSION['cart-list'][] = $current_added_product;
                
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
            }

        } else {
            header("Location: /");
        }
    } 

    if (isset($_GET['delete_id']) && isset($_SESSION['cart-list'])) {
        foreach ($_SESSION['cart-list'] as $key => $value) {
            if ($value['id'] == $_GET['delete_id']) {
                unset($_SESSION['cart-list'][$key]);
                $price_number = intval(preg_replace('/[^0-9]+/', '', $value['price']), 10);
                $_SESSION['sum-price'] -= $price_number;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
<main>
    <?php if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
   <p class="zagl">КОРЗИНА</p>
   <form action="/php/create_order.php" method="POST">
    <hr>
    <?php foreach( $_SESSION['cart-list'] as $product): ?>
    <div class="otlozh">
        <img class="img_cart_php" src="<?=$product['img']?>" alt="">
        <p><input hidden type="text" name="id" value="<?=$product['id']?>"><?=$product['name']?></p>
        <p class="product_price"><?=$product['price']?> руб.</p>
        <input type="number" class="product_counter" id="count" name="<?=$product['id']?>" min="1" max="<?=$product['count']?>" value="1">
        <!-- <div class="count">
            <button class= "counter">
                -
            </button>
            <p>0</p>
            <button class= "counter2">
                +
            </button>
        </div> -->
        <a href="/pages/card.php?delete_id=<?=$product['id']?>">
            <img src="../imgF/trash.svg" alt="">
            Удалить</a>
    </div>
    <?php endforeach; ?>
    
    <div class="itog">
        <p>ИТОГО: <input class="total" readonly id="total_sum" name="total_sum" type="text" value="<?=$_SESSION['sum-price']?> руб."></p>
    <button class="button">Оформить заказ</button>
    </div>
    <p class= "zag">Может заинтересовать</p>
        <div class="cardhold">
            <div class="card">
                <img src="../imgF/Mirt.png" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="../imgF/cardBuy.svg" alt=""> <a href="pages/cardMirt.php">Купить</a></button>
            </div>
            <div class="card">
                <img src="../imgF/Mirt.png" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="../imgF/cardBuy.svg" alt="">Купить</button>
            </div>
            <div class="card">
                <img src="../imgF/Mirt.png" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="../imgF/cardBuy.svg" alt="">Купить</button>
            </div>
            <div class="card">
                <img src="../imgF/Mirt.png" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="../imgF/cardBuy.svg" alt="">Купить</button>
            </div>

        </div>
    <?php else: ?>
    <p class="zagl">Корзина пуста</p>
    <?php endif; ?>
</main>
<footer>
        <ul>
            <li class="fl"><img src="img/FloralGardenFooter.svg" alt="">
            
            <li class="flS"><img src="img/FloralGardenS.svg" alt="">
        </li>
            <li>+7 999-999-99-99</li>
            <li>® 2024, FloralGarden</li>
            <li>Все права защищены</li>
        </ul>
        <ul>
            <li><b>Страницы</b></li>
            <li>Каталог</li>
            <li>О нас</li>
            <li>Блог</li>
        </ul>
        <ul class="foor4">
            <li><b>Аккаунт</b></li>
            <li>Личный кабинет</li>
            <li>Избранное</li>
            <li>Корзина</li>
        </ul>
        <ul class="footRas">
            <li><b>Подпишитесь на рассылку</b></li>
            <li><input type="text" placeholder="имя" ></li>
            <li><input type="text" placeholder="почта"></li>
            <li><button class="button">Подписаться</button></li>
        </ul>
        </footer>
        <div class="ff">
        <ul class="foor3">
            <li><b>Аккаунт</b></li>
            <li>Личный кабинет</li>
            <li>Избранное</li>
            <li>Корзина</li>
        </ul>

        <ul class="footRas2">
            <li><b>Подпишитесь на рассылку</b></li>
            <li><input type="text" placeholder="имя" ></li>
            <li><input type="text" placeholder="почта"></li>
            <li><button class="button buttonF">Подписаться</button></li>
        </ul>
        </div>
        <script src="/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>