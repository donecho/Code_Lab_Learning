
<?php

#fdc22_db 
// localhost = 127.0.0.1 
// mySql = 3306 -> other port (mamp 8889)

    // $pdo = new PDO( "mysql:hostName , portName , dbName" , "userName" , "password"  )

    #$pdo = new PDO("mysql:host=localhost;dbname=fdc22_db","root",""); // window 

try{
    $server = 'localhost'; 
    $dbName = 'fdc22_db' ; 
    $userName = 'root' ; 
    $password = 'root';

    $pdo = new PDO("mysql:host=$server;dbname=$dbName","$userName","$password"); // mamp 

    // echo "connection success";

}catch(PDOException $err){
    echo "Connection Error " . $err ;
}