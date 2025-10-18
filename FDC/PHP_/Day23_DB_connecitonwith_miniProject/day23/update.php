<?php

    require_once("./db_connection.php");

    $query = "update customer set name=?,address=?,phone=? where id=?";
    $res = $pdo->prepare($query);
    $res->execute(['code lab update','address update','007',1]);

    header("Location:read.php");