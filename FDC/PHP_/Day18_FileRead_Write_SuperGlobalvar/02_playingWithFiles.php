<?php

    // read | write 

    // $file = fopen("testing.txt","w");

    // fwrite($file , "this is testing message for file write");

    $file = fopen("testing.txt","r");

    $data = fread($file , filesize("testing.txt"));

    echo $data ;

    