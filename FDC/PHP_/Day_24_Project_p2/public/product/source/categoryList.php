<?php

    $query = "select * from category";
    $res = $pdo->prepare($query);
    $res->execute();

    $categories = $res->fetchAll(PDO::FETCH_ASSOC);