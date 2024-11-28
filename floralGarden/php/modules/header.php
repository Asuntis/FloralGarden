<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <script defer src="/js/main1.js"></script>
    <script defer src="/js/main.js"></script>
    <title>Document</title>
</head>
<body>
<header>
<header>
       
       <nav>
      <a href="/index.php"> <img src="/img/FloralGarden.svg" class = "fon" alt=""></a>
      <a href="/index.php"> <img src="/img/FloralGarden.svg" class = "fon fon1" alt=""></a>
      <a href="/index.php"> <img src="/img/FloralGardenM.svg" class = "fon fon2" alt=""></a>

        <ul class="bur">
           <li><a   href="/pages/catalog.php">Каталог</a></li>
           <li><a  href="/pages/AboutUs.php">О нас</a></li>
           <li><a  href="/pages/blog.php">Блог</a></li>
           
       </ul>

       <ul class="nav-links" id="nav-links">
           <li><a   href="/pages/catalog.php">Каталог</a></li>
           <li><a  href="/pages/AboutUs.php">О нас</a></li>
           <li><a  href="/pages/blog.php">Блог</a></li>
            <li><a href="/pages/otlozh.php"><img src="/img/heart.svg" alt=""></a></li>

           <?php if($_COOKIE['id'] == ''): ?>
           <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="/img/icon.svg" alt=""></li></a>
           <li><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="/img/cart.svg" alt=""></li> </a>
           <?php else: ?>
           <li><a href="/pages/profil.php"><img src="/img/icon.svg" alt=""></li></a>
           <li><a href="/pages/card.php"><img src="/img/cart.svg" alt=""></li> </a>
           <?php endif; ?>

       </ul>
       <div class="burger-menu" id="burger-menu">
       <span></span>
               <span></span>
               <span></span>
           </div>

       <?php if($_COOKIE['id'] == ''): ?>
       <ul class="bur">    
           <li><a href="pages/otlozh.php"><img src="/img/heart.svg" alt=""></a></li>
           <li><a href="/pages/profil.php" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="/img/icon.svg" alt=""></li></a>
           <li><a href="/pages/card.php" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><img src="/img/cart.svg" alt=""></li> </a>
       </ul>
       <?php else: ?>
       <ul class="ee" >    
           <li><a href="pages/otlozh.php"><img src="/img/heart.svg" alt=""></a></li>
           <li><a href="/pages/profil.php"><img src="/img/icon.svg" alt=""></li></a>
           <li><a href="/pages/card.php"><img src="/img/cart.svg" alt=""></li> </a>
       </ul>
       <?php endif; ?>
       </nav>

   
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