<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
<main class="personal_main">
    <?php if($_COOKIE['role'] == 1): ?>
        <div class="container">
<p class="zagl1">ЛИЧНЫЙ КАБИНЕТ</p>
    <hr class="zagl1">
    

   
    <p>Личная информация</p>
    <?php
        $id = $_COOKIE['id'];
        $link = mysqli_connect("localhost", "root", "root", "flora");
        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
        $result = mysqli_query($link, $sql); 
    ?>
    <?php while ($row = mysqli_fetch_array($result)):?>
    <form action="/php/redact_user_info.php" method="POST">
        <input type="text" id="fname" name="surname" placeholder="Фамилия" value="<?=$row['surname']?>">
        <input type="date" id="fname" name="born" value="<?=$row['born']?>"><br>
        <input type="text" id="fname" name="name" placeholder="Имя" value="<?=$row['name']?>">
        <input type="email" id="fname" name="email" placeholder="Почта"  value="<?=$row['email']?>"><br>
        <input type="text" id="fname" name="patronymic" placeholder="Отчество" value="<?=$row['patronymic']?>">
        
        
        <input type="tel" id="fname" name="phone" placeholder="номер"  value="<?=$row['phone']?>"><br>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    <?php endwhile; ?>
    <hr class="zagl1">
    <p>Адрес</p>
    <?php

        $mysql = new mysqli('localhost', 'root', 'root', 'flora');
                                        
        $id = $_COOKIE['id'];
        $result = $mysql->query("SELECT * FROM `address` WHERE `id_user` = '$id'");
        $user_address = $result->fetch_assoc();

        if($user_address == ''):
    ?>
    <form action="/php/address.php" method="POST">
        <input type="text" id= "fname" name="city" placeholder="Город">
        <input type="number" id= "fname" name="entrance" placeholder="Подъезд" ><br>
        <input type="text" id= "fname" name="street" placeholder="Улица">
        <input type="number" id= "fname" name="floor" placeholder="Этаж" ><br>
        <input type="text" id= "fname" name="home" placeholder="Дом" >
        <input type="number" id= "fname" name="room" placeholder="Квартира" ><br>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    <?php else: ?>
    <form action="/php/redact_address.php" method="POST">
        <input type="text" id= "fname" name="city" placeholder="Город" value="<?=$user_address['city']?>"><br>
        <input type="text" id= "fname" name="street" placeholder="Улица" value="<?=$user_address['street']?>"><br>
        <input type="text" id= "fname" name="home" placeholder="Дом" value="<?=$user_address['home']?>"><br>
        <input type="number" id= "fname" name="entrance" placeholder="Подъезд" value="<?=$user_address['entrance']?>"><br>
        <input type="number" id= "fname" name="floor" placeholder="Этаж" value="<?=$user_address['floor']?>"><br>
        <input type="number" id= "fname" name="room" placeholder="Квартира" value="<?=$user_address['room']?>"><br>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form> </div>
    <?php endif; ?>
    <br>
    <!-- отредактируй -->
    <h2>Заказы</h2>
    <?php
        $user = $_COOKIE['id'];
        $link = mysqli_connect("localhost", "root", "root", "flora");
        $sql = "SELECT * FROM `orders` WHERE `id_user` = '$user'";
        $result = mysqli_query($link, $sql); 
    ?>
    <?php while ($row = mysqli_fetch_array($result)):?>
        <p>Номер заказа - <?=$row['id']?></p>
        <p>Цена - <?=$row['price']?></p>
        <p>Дата - <?=$row['date']?></p>
        <?php if($row['status'] == 1): ?>
        <p>Статус: Создан</p>
        <?php elseif($row['status'] == 2): ?>
        <p>Статус: Отправлен</p>
        <?php elseif($row['status'] == 3): ?>
        <p>Статус: Доставлен</p>
        <?php elseif($row['status'] == 4): ?>
        <p>Статус: Отменён</p>
        <?php endif; ?>
    <?php endwhile; ?>
    <a href="/php/exit.php"><button>Выйти из профиля</button></a>
    <?php else: ?>
        <section class="container">
            <h2 class="my-5 text-center">Админ панель</h2>
            <div class="table_admin my-5">      
                <table class="table">
                    <?php
                        $link = mysqli_connect("localhost", "root", "root", "flora");
                        $sql = "SELECT * FROM `goods`";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Удалить</th>
                        <th scope="col">Изменить</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <tbody>
                        <tr>
                        <th scope="row"><?=$row['id']?></th>
                        <td><?=$row['name']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['img']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['category']?></td>
                        <td><a href="/php/delete.php?id=<?=$row['id']?>" style="color: red;">Удалить</a></td>
                        <td><a href="/pages/update.php?id=<?=$row['id']?>">Изменить</a></td>
                        </tr>
                    </tbody>
                    <?php endwhile; ?>
                </table>
                <a href="/php/add.php"><button type="button" class="btn btn-success">Добавить товар</button></a>
                <!-- заказы -->
                <h2>Заказы</h2>
                <table class="table_order">
                    <?php
                        $link = mysqli_connect("localhost", "root", "root", "flora");
                        $sql = "SELECT * FROM `orders`";
                        
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <thead>
                        <tr>
                        <th scope="col">Номер заказа</th>
                        <th scope="col">Уникальный индификатор пользователя</th>
                        <th scope="col">Уникальный индификатор товара</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Изменить</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <tbody>
                        <tr>
                        <th scope="row"><?=$row['id']?></th>
                        <td><?=$row['id_user']?></td>
                        <td><?=$row['id_goods']?></td>
                        <td><?php if($row['status'] == 1): ?>
                        <p>Статус: Создан</p>
                        <?php elseif($row['status'] == 2): ?>
                        <p>Статус: Отправлен</p>
                        <?php elseif($row['status'] == 3): ?>
                        <p>Статус: Доставлен</p>
                        <?php elseif($row['status'] == 4): ?>
                        <p>Статус: Отменён</p>
                        <?php endif; ?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['date']?></td>
                        <td><a href="/pages/upd_status.php?id=<?=$row['id']?>">Изменить</a></td>
                        </tr>
                    </tbody>
                    <?php endwhile; ?>
                </table>
            </div>
        </section>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>