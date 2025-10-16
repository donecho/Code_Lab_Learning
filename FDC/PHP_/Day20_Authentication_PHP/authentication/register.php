<?php require_once("./header.php")  ?>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                
                <form action="" method="post">
                    <div class="my-2">
                        <input type="text" class="form-control shadow-sm w-100" placeholder="Enter Name..." name="name" value="<?php if(isset($_POST['btn-create'])){ echo $_POST['name']; } ?>">
                        <?php 
                            if( isset($_POST['btn-create']) ){
                                $nameStatus = $_POST['name'] == "" ? false : true ;
                                echo $nameStatus ? "" : "<small class='text-danger'>Name field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="email" class="form-control shadow-sm w-100" placeholder="Enter Email..." name="email" value="<?php if(isset($_POST['btn-create'])){ echo $_POST['email']; } ?>">
                        <?php 
                            if( isset($_POST['btn-create']) ){
                                $emailStatus = $_POST['email'] == "" ? false : true ;
                                echo $emailStatus ? "" : "<small class='text-danger'>Email field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="text" class="form-control shadow-sm w-100" placeholder="Enter Password..." name="password" value="<?php if(isset($_POST['btn-create'])){ echo $_POST['password']; } ?>">
                        <?php 
                            if( isset($_POST['btn-create']) ){
                                $passwordStatus = $_POST['password'] == "" ? false : true ;
                                echo $passwordStatus ? "" : "<small class='text-danger'>Password field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="text" class="form-control shadow-sm w-100" placeholder="Enter Confrim Password..." name="confirm_password" value="<?php if(isset($_POST['btn-create'])){ echo $_POST['confirm_password']; } ?>">
                        <?php 
                            if( isset($_POST['btn-create']) ){
                                $confirmPasswordStatus = $_POST['confirm_password'] == "" ? false : true ;
                                echo $confirmPasswordStatus ? "" : "<small class='text-danger'>Name field is required...</small>";
                            }
                        ?>
                    </div>

                    <div class="my-2">
                        <input type="submit" class=" btn bg-dark text-white w-100 shadow-sm " name="btn-create" value="Create Account">
                    </div>
                </form>

                <?php
                    require_once("./registrationProcess.php");
                ?>



            </div>
        </div>
    </div>

<?php require_once("./footer.php")  ?>
