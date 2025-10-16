<?php

    function division($num1 , $num2){
        if( $num2 == 0 ){
            throw new Exception("divided by zero (code lab)");
        }else{
            echo $num1 / $num2 ;
        }  
    }

    try{
        division(10,0);
    }catch(Exception $error){
        echo $error;
    }

    echo "<p style='color:red'>hello php</p>";