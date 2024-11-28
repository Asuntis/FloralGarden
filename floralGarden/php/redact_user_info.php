<?php

    include('bd.php');

    $id = $_COOKIE['id'];

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
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);

    // echo $id;
    // echo $name;
    // echo $surname;
    // echo $patronymic;
    // echo $born;
    // echo $email;
    // echo $pass;
    // echo $phone;


    $mysql->query("UPDATE `users` SET `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `born` = '$born', `email` = '$email', `phone` = '$phone' WHERE `users`.`id` = '$id';");
    
    header('Location: /pages/profil.php');
?>
