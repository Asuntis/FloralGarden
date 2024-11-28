<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
   <main class="container">
    <p class="zagl">КАТАЛОГ</p>
    <hr>
    <div class="filtr">
        <form>
            <select id="plant-type" name="type">
                <option value="">Тип растения</option>
                <option value="flowering">Цветущие</option>
                <option value="foliage">Декоративно-лиственные</option>
                <option value="succulents">Суккуленты</option>
            </select>
        </form>
        <form>
            <select id="care-requirements" name="country">
                <option value="">Требования к уходу</option>
                <option value="easy">Неприхотливые</option>
                <option value="special">Особый уход</option>
            </select>
        </form>
        <form>
            <select id="size" name="country">
                <option value="">Размер</option>
                <option value="large">Крупные</option>
                <option value="small">Мелкие</option>
                <option value="creeping">Ползучие и вьющиеся</option>
            </select>
        </form>
        <button class="button but2" onclick="applyFilter()">Применить</button>
    </div>

    <div id="plant-list">
        <div class="plant" data-type="flowering" data-care="easy" data-size="large">
            <div class="row">
                <?php
                    $link = mysqli_connect("localhost", "root", "root", "flora");
                    $sql = "SELECT * FROM `goods` WHERE `category` = 1";
                    $result = mysqli_query($link, $sql); 
                ?>
                <?php while ($row = mysqli_fetch_array($result)):?>
                <div class="col-6 col-md-3 col-lg-3 mx-2">
                    <div class="card_cat">
                        <img class="zvet w-100" src="<?=$row['img']?>" alt="#">
                        <p class="name"><?=$row['name']?></p>
                        <p class="price"><?=$row['price']?> руб.</p>
                        <a href="/pages/cardMirt.php?id=<?=$row['id']?>"><button><img src="imgF/cardBuy.svg" alt="">Купить</button></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="plant" data-type="foliage" data-care="special" data-size="small">
            <div class="row">
                <?php
                    $link = mysqli_connect("localhost", "root", "root", "flora");
                    $sql = "SELECT * FROM `goods` WHERE `category` = 2";
                    $result = mysqli_query($link, $sql); 
                ?>
                <?php while ($row = mysqli_fetch_array($result)):?>
                <div class="col-6 col-md-3 col-lg-3 mx-2">
                    <div class="card_cat">
                        <img class="zvet w-100" src="<?=$row['img']?>" alt="#">
                        <p class="name"><?=$row['name']?></p>
                        <p class="price"><?=$row['price']?> руб.</p>
                        <a href="/pages/cardMirt.php?id=<?=$row['id']?>"><button><img src="imgF/cardBuy.svg" alt="">Купить</button></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="plant" data-type="succulents" data-care="easy" data-size="creeping">
            <div class="row">
                <?php
                    $link = mysqli_connect("localhost", "root", "root", "flora");
                    $sql = "SELECT * FROM `goods` WHERE `category` = 3";
                    $result = mysqli_query($link, $sql); 
                ?>
                <?php while ($row = mysqli_fetch_array($result)):?>
                <div class="col-6 col-md-3 col-lg-3 mx-2">
                    <div class="card_cat">
                        <img class="zvet w-100"  src="<?=$row['img']?>" alt="#">
                        <p class="name"><?=$row['name']?></p>
                        <p class="price"><?=$row['price']?> руб.</p>
                        <a href="/pages/cardMirt.php?id=<?=$row['id']?>"><button><img src="imgF/cardBuy.svg" alt="">Купить</button></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
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
    <script src="/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>