<?php

    $city = filter_var(trim($_POST['city']),
    FILTER_SANITIZE_STRING);
    $street = filter_var(trim($_POST['street']),
    FILTER_SANITIZE_STRING);
    $home = filter_var(trim($_POST['home']),
    FILTER_SANITIZE_STRING);
    $entrance = filter_var(trim($_POST['entrance']),
    FILTER_SANITIZE_STRING);
    $floor = filter_var(trim($_POST['floor']),
    FILTER_SANITIZE_STRING);
    $room = filter_var(trim($_POST['room']),
    FILTER_SANITIZE_STRING);
    $id = $_COOKIE['id'];

    include('bd.php');

    $mysql->query("INSERT INTO `address` (`city`, `street`, `home`, `entrance`, `floor`, `room`, `id_user`) VALUES ('$city', '$street', '$home', '$entrance', '$floor', '$room', '$id')"); 

    $mysql->close();

    header('Location: /pages/profil.php');
    
?>