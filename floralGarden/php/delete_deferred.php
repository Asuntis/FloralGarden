<?php

    $id = $_GET['id'];
    $user = $_COOKIE['id'];

    include('bd.php');

    $mysql->query("DELETE FROM deferred WHERE `id_goods` = '$id' AND `id_users` = '$user'"); 

    $mysql->close();

    header('Location: /pages/otlozh.php');
    
?>