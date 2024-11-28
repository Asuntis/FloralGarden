<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script defer src="/js/main.js"></script>
    <script defer src="/js/main1.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
       
        <nav>
        <img src="img/FloralGarden.svg" class = "fon" alt="">
        <img src="img/FloralGarden.svg" class = "fon fon1" alt="">
        <img src="img/FloralGardenM.svg" class = "fon fon2" alt="">

         <ul class="bur">
            <li><a   href="pages/catalog.php">Каталог</a></li>
            <li><a  href="pages/AboutUs.php">О нас</a></li>
            <li><a  href="pages/blog.php">Блог</a></li>
            
        </ul>

        <ul class="nav-links" id="nav-links">
            <li><a   href="pages/catalog.php">Каталог</a></li>
            <li><a  href="pages/AboutUs.php">О нас</a></li>
            <li><a  href="pages/blog.php">Блог</a></li>
             <li><a href="pages/otlozh.php"><img src="img/heart.svg" alt=""></a></li>

            <?php if($_COOKIE['id'] == ''): ?>
            <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="img/icon.svg" alt=""></li></a>
            <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="img/cart.svg" alt=""></li> </a>
            <?php else: ?>
            <li><a href="/pages/profil.php"><img src="img/icon.svg" alt=""></li></a>
            <li><a href="/pages/card.php"><img src="img/cart.svg" alt=""></li> </a>
            <?php endif; ?>

        </ul>
        <div class="burger-menu" id="burger-menu">
        <span></span>
                <span></span>
                <span></span>
            </div>

        <?php if($_COOKIE['id'] == ''): ?>
        <ul class="bur">    
            <li><a href="pages/otlozh.php"><img src="img/heart.svg" alt=""></a></li>
            <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="img/icon.svg" alt=""></li></a>
            <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="img/cart.svg" alt=""></li> </a>
        </ul>
        <?php else: ?>
        <ul >    
            <li><a href="pages/otlozh.php"><img src="img/heart.svg" alt=""></a></li>
            <li><a href="/pages/profil.php"><img src="img/icon.svg" alt=""></li></a>
            <li><a href="/pages/card.php"><img src="img/cart.svg" alt=""></li> </a>
        </ul>
        <?php endif; ?>
        </nav>

    <header2>
        <p class="slo">ПУСТЬ ДОМ <br> БУДЕТ <b class="slo green">ЗЕЛЕНЫМ</b></p>
        <p class="slo2">Красота в каждом горшке, уют в каждом доме!</p>
        <a href="pages/catalog.php"></a><button class="button">в каталог</button>
    </header2>
    </header>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- reg form -->
        <form class="row g-3 needs-validation" method="POST" action="/php/reg.php" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Фамилия</label>
                <input type="text" name="surname" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Отчество</label>
                <input type="text" name="patronymic" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Дата рождения</label>
                <input type="date" name="born" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Номер телефона</label>
                <input type="number" name="phone" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Принимаю правила
                </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Авторизация</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- auth form -->
        <form class="row g-3 needs-validation" method="POST" action="/php/auth.php" novalidate>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Войти</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Регистрация</button>
      </div>
    </div>
  </div>
</div>

    <main>
        <p class= "zag">ПОКУПАЙТЕ ПО КАТЕГОРИЯМ</p>
        <div class="container container1">
            <img src="img/plant.png" alt="">
            <div class="min-con">
                <img src="img/gorschki.png" alt="">
            <img  src="img/decor.png" alt="">
            </div>
             </div> 

         <div class="container2">
            <img src="img/plantS.jpg" alt="">
            <img src="img/gorshkiS.png" alt="">
            <img  src="img/decorS.png" alt="">
            </div> 
        <p class= "zag">НАШИ РАСТЕНИЯ</p>
        <!-- <div class="cardhold">
            <div class="col-3">
                <img class ="card1 " src="imgF/antrium.jpeg" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="imgF/cardBuy.svg" alt=""> <a href="pages/cardMirt.php">Купить</a></button>
            </div>
            <div class="col-3">
                <img class ="card1" src="imgF/drazena.jpeg" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="imgF/cardBuy.svg" alt="">Купить</button>
            </div>
            <div class="col-3">
                <img class ="card1" src="imgF/dendrobium.jpeg" alt="">
                <p class="name">Мирт - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="imgF/cardBuy.svg" alt="">Купить</button>
            </div>
            <div class="col-3">
                <img class ="card1" src="imgF/iukka.jpeg" alt="">
                <p class="name">Юкка - комнатное растение</p>
                <p class="price">4 600 руб.</p>
                <button><img src="imgF/cardBuy.svg" alt="">Купить</button>
            </div>

        </div> -->
        <?php
            $link = mysqli_connect("localhost", "root", "root", "flora");
            $sql = "SELECT * FROM `goods` LIMIT 4";
            $result = mysqli_query($link, $sql); 
        ?>
        <div class="cardhold d-flex">
            
        <?php while ($row = mysqli_fetch_array($result)):?>
        <div class="card col-6 col-md-3 col-lg-3 mx-2">
                <img class = "zvet w-100" src="<?=$row['img']?>" alt="">
                <p class="name"><?=$row['name']?></p>
                <p class="price"><?=$row['price']?> руб.</p>
                <a href="pages/cardMirt.php?id=<?=$row['id']?>"><button><img src="imgF/cardBuy.svg" alt=""> Купить</button></a>
            </div>
            <?php endwhile; ?>
            
        </div>
        <div class="cat">
            <button><a href="pages/catalog.php">Перейти к каталогу</a></button>
        </div>
        
        <img  class="bann" src="img/bann.png" class="bann" alt="">
        
        <img class="bann1" src="img/bannS.png" class="bann" alt="">
        
       
    </main> <footer>
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

