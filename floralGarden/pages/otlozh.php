<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
<main>
   <p class="zagl">ОТЛОЖЕННОЕ</p>
    <hr>
    <?php
$user = $_COOKIE['id'];
$link = mysqli_connect("localhost", "root", "root", "flora");

if (!$link) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM `deferred` INNER JOIN `goods` ON deferred.id_goods = goods.id WHERE deferred.id_users = '$user'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) == 0):
?>
    <p>Товаров нет</p>
<?php else: ?>
    <?php while ($product = mysqli_fetch_assoc($result)): ?>
        <div class="otlozh">
            <img class="otlozh_image" src="<?= $product['img'] ?>" alt="">
            <p><?= $product['name'] ?></p>
            <p><?= $product['price'] ?> руб.</p>
            <a href="/pages/cardMirt.php?id=<?= $product['id'] ?>"><button>
                <img src="../imgF/cardBuy.svg" alt="">
                Купить
            </button></a>
            <a href="/php/delete_deferred.php?id=<?= $product['id'] ?>"><button>
                <img src="../imgF/trash.svg" alt="">
                Удалить
            </button></a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
mysqli_close($link);
?>

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