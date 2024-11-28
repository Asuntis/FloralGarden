<?php
    session_start(); 
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/bd.php";
    
    $result = $mysql->query("SELECT * FROM `goods`");
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
  <main class="container">
    <?php

        $goods_id = $_GET['id'];
        $cards = $mysql->query("SELECT * FROM `goods` WHERE `id` = '$goods_id'");
        $card = mysqli_fetch_assoc($cards);
        
    ?>
   <p class="zagl"><?=$card['name']?></p>
    <hr>
    <div class="container">
        <!-- tovar -->
        <div class="tovar">
            <img class="tovarImg" src="<?=$card['img']?>" alt="">
            <div class="dis">
            <p class="name1"><?=$card['name']?></p>
            <p class = "name2"><?=$card['description']?></p>
            <hr class="line">
            <p class="name3">Диаметр</p>
            <button class= "but">17</button> <button class= "but">15</button>
            <p class="name3">Высота</p>
            <button class= "but">40</button>
            <hr class="line">
            <p class="price"><?=$card['price']?> руб.</p>
            <?php if($_COOKIE['id'] == ''): ?>
                <h4>Для покупки требуется авторизироваться</h4>
            <?php else: ?>
                <?php 
                    if (isset($_SESSION['cart-list'])):
                        $checked = false;

                        foreach($_SESSION['cart-list'] as $value):
                            if ($value['id'] == $card['id']){
                                $checked = true;
                            }
                        endforeach;
                                
                        if ($checked): ?>
                            <a href="/pages/card.php"><button class="button but2 ">Добавлено</button></a>                          
                        <?php else: ?>
                            <div class="qw">
                            <a href="/pages/card.php?goods_add_id=<?=$card['id']?>"><button class="button but2 ">Добавить в корзину</button></a>
                            <a href="/php/create_deferred.php?id=<?=$card['id']?>"><img class="ww" src="/img/heart.svg" alt=""></a>
                        </div>
                        <?php endif;
                        else: ?>
                        <div class="qw">
                            <a href="/pages/card.php?goods_add_id=<?=$card['id']?>"><button class="button but2 ">Добавить в корзину</button></a>
                            <a href="/php/create_deferred.php?id=<?=$card['id']?>"><img class="ww" src="/img/heart.svg" alt=""></a>
                        </div>
                <?php endif; ?>
            <!-- <button class="button but2 ">Добавить в корзину</button> <button class="but3"><img class="dislike" src="../imgF/dislike.svg" alt=""></button> -->
            <?php endif; ?>
            </div>
        </div>  
      <p class= "zag">Может заинтересовать</p>
      <?php
            $link = mysqli_connect("localhost", "root", "root", "flora");
            $sql = "SELECT * FROM `goods` LIMIT 3";
            $result = mysqli_query($link, $sql); 
        ?>
        <div class="cardhold d-flex">
            
        <?php while ($row = mysqli_fetch_array($result)):?>
        <div class="card col-12 col-md-6 col-lg-4 mx-2">
                <img class= "zvet w-100" src="<?=$row['img']?>" alt="">
                <p class="name"><?=$row['name']?></p>
                <p class="price"><?=$row['price']?> руб.</p>
                <a href="/pages/cardMirt.php?id=<?=$row['id']?>"><button><img src="imgF/cardBuy.svg" alt=""> Купить</button></a>
            </div>
            <?php endwhile; ?>
            

        </div>
    </div>

    
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>