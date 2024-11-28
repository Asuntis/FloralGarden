<?php

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']),
    FILTER_SANITIZE_STRING);
    $patronymic = filter_var(trim($_POST['patronymic']),
    FILTER_SANITIZE_STRING);
    $born = filter_var(trim($_POST['born']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."flora");

    include('bd.php');

    $mysql->query("INSERT INTO `users` (`name`, `surname`, `patronymic`, `born`, `email`, `pass`, `phone`, `role`) VALUES ('$name', '$surname', '$patronymic', '$born', '$email', '$pass', '$phone', 1)"); 

    $mysql->close();

    header('Location: /');
    
?>