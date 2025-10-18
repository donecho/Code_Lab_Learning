<?php

 try{

    $pdo = new PDO("mysql:host=localhost;dbname=blogs_project",'root','root');

 }catch(PDOException $e){
    echo "PDO Errors -> " . $e;
 }