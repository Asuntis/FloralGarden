<?php

    $id = $_GET['id'];
    $user = $_COOKIE['id'];

    include('bd.php');

    $mysql->query("INSERT INTO `deferred` (`id_goods`, `id_users`) VALUES ('$id', '$user');"); 

    $mysql->close();

    header('Location: /pages/otlozh.php');
    
?>