<?php

require_once("./db_connection.php");

// SELECT * FROM customer

// pdo -> db // create , update , read
// fetch // fetchAll // PDO::FETCH_ASSOC [] // PDO::FETCH_OBJ ->

// $sql_query = "select * from customer where id=2 && name='aung aung'";
// $data = $pdo->query($sql_query)->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($data);


$sqlQuery = "select * from customer";
$res = $pdo->prepare($sqlQuery);
$res->execute();

$data = $res->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($data);



