<?php

require_once("./db_connection.php");

$query = "insert into customer (name,address,phone) values (?,?,?)";
$res = $pdo->prepare($query);
$res->execute(['code lab','yangon','09123123']);

echo "insert success";

// [
//     [] , 
//     [] , 
//     []
// ]

