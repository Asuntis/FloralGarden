<?php

    include('bd.php');

    $user_id = $_COOKIE['id'];
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

    $mysql->query("UPDATE `address` SET `city` = '$city', `street` = '$street', `home` = '$home', `entrance` = '$entrance', `floor` = '$floor', `room` = '$room' WHERE `id_user` = '$user_id'");
    
    header('Location: /pages/profil.php');
?>
