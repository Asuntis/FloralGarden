<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/bd.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/modules/header.php";
?>
<main class="personal_main">
    <section class="container my-5">
        <h2 class="text-center">Добавить товар</h2>
        <form class="row g-3 needs-validation" method="POST" action="/php/add_good.php" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Уникальный индификатор</label>
                <input type="number" name="id" class="form-control" id="validationCustom01" readonly required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Наименование</label>
                <input type="text" name="name" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Описание</label>
                <input type="text" name="description" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Изображение</label>
                <input type="text" name="img" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Цена</label>
                <input type="number" name="price" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Категория</label>
                <input type="number" name="category" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Изменить</button>
            </div>
        </form>
    </section>
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