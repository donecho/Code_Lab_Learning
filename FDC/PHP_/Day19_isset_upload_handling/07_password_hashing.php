<?php

    $user_password = "admin123";

    // $hash_password = password_hash( $user_password , PASSWORD_BCRYPT );
    $hash_password = '$2y$10$EOYlA2gD1fuYeoJiK5y0eujzcgTdxJ9PbH500d6Nu/rbrstJZH/te';

    // echo $user_password . "<br>";
    // echo $hash_password . "<br>";

    // password_verify( plainText , hashValue  )

    if( password_verify( $user_password , $hash_password ) ){
        echo "You are login...";
    }else{
        echo "Incorrect password ! Try again...";
    }