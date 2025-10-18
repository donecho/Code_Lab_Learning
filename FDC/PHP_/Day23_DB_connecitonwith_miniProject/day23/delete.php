<?php

    require_once("./db_connection.php");

    $query = 'delete from customer where id=?';
    $res = $pdo->prepare($query);
    $res->execute([5]);

    header("Location:read.php");