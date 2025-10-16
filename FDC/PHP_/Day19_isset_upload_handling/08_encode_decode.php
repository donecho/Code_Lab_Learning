<?php 

    echo "<pre>";

    $userData = [
        'name' => 'kyaw kyaw' ,
        'job' => 'programmer'
    ];

    print_r($userData);

    $json_encode_data = json_encode($userData);

    print_r($json_encode_data);

    $json_decode_data = json_decode($json_encode_data);

    print_r($json_decode_data);