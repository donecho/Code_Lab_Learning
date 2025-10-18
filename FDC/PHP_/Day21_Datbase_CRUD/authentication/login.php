<?php require_once("./header.php")  ?>

<?php 
    session_start();
?>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                
                <form action="" method="post">
                    <div class="my-2">
                        <input type="email" class="form-control shadow-sm w-100" placeholder="Enter Email" name="email" value="<?php if(isset($_POST['btn-login'])){ echo $_POST['email']; } ?>">
                        <?php 
                            if( isset($_POST['btn-login']) ){
                                $emailStatus = $_POST['email'] == "" ? false : true ;
                                echo $emailStatus ? "" : "<small class='text-danger'>Email field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="text" class="form-control shadow-sm w-100" placeholder="Enter Password" name="password" value="<?php if(isset($_POST['btn-login'])){ echo $_POST['password']; } ?>">
                        <?php 
                            if( isset($_POST['btn-login']) ){
                                $passwordStatus = $_POST['password'] == "" ? false : true ;
                                echo $passwordStatus ? "" : "<small class='text-danger'>Password field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="submit" class=" btn bg-dark text-white w-100 shadow-sm " name="btn-login" value="Login">
                    </div>
                </form>

                <?php
                    if( isset( $_POST['btn-login'] ) ){
                        $userEmail = $_POST['email']; // user data 
                        $userPassword = $_POST['password'];

                        if( $emailStatus && $passwordStatus ){

                            if( isset($_SESSION['registrationData']) ){

                                $registerEmail = $_SESSION['registrationData']['email'];
                                $registerPassword = $_SESSION['registrationData']['password']; // hash
                               
                                if( $userEmail == $registerEmail && password_verify($userPassword , $registerPassword) ){
                                    header("Location:home.php");
                                }else{
                                    echo "<p class='bg-danger text-white p-3 text-center w-100'>Credential Do Not Match... Try Again !</p>"; 
                                }

                            }else{
                                echo "<p class='bg-danger text-white p-3 text-center w-100'>you need to register first <a href='./register.php' >Register Here !</a></p>";
                            }
                        }
                    }
                ?>



            </div>
        </div>
    </div>

<?php require_once("./footer.php")  ?>
