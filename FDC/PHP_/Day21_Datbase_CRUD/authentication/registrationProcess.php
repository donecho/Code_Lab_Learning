<?php

    function strongPasswordCheck($password){
        $upperCaseStatus = preg_match('/[A-Z]/',$password);
        $lowerCaseStatus = preg_match('/[a-z]/',$password);
        $digitStatus = preg_match('/[0-9]/',$password);
        $specialStatus = preg_match('/[!@#$%^&*()]/',$password);
        $lengthStatus = strlen($password) >= 6 ? true : false ;

        return ( $upperCaseStatus && $lowerCaseStatus && $digitStatus && $specialStatus && $lengthStatus) ? true : false ;
    }


    if( isset($_POST['btn-create']) ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if( $nameStatus && $emailStatus && $passwordStatus && $confirmPasswordStatus ){ // all field must have value 
            if( $password == $confirm_password ){ 
                $checkStatus = strongPasswordCheck($password);
                
                if($checkStatus){
                    $data = [
                        'name' => $name , 
                        'email' => $email ,  
                        'password' => password_hash($password , PASSWORD_BCRYPT) 
                    ];

                    session_start();

                    $_SESSION['registrationData'] = $data;

                    header("Location:home.php");
                }else{
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                            <strong>Password is not strong password</strong> Try again!.
                            <small>
                                Password must contain
                                <ul>
                                    <li>At least one capital letter </li>
                                    <li>At least one small letter </li>
                                    <li>At least one digit </li>
                                    <li>At least one special character </li>
                                    <li>Password length must be at least 6</li>
                                </ul>
                            </small>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                }
            }else{
                echo '
                        <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                            <strong>Password Not Same </strong> Try again!.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
            }
        }
    }

    