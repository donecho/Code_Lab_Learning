<?php require_once("./header.php")  ?>

    <h1 class="p-5 bg-dark text-white text-center ">Welcome From Home Page  </h1>

    <div class="text-end">
        <a href="logout.php">
            <button class="btn btn-danger btn-sm text-white shadow-sm px-4 me-5"> <i class="fa-solid fa-right-from-bracket"></i> Logout</button>
        </a>
    </div>

    <?php
        session_start();

        echo "<pre>";

        if( !isset($_SESSION['registrationData']) ){
            header("Location:login.php");
        }
    ?>

<?php require_once("./footer.php")  ?>
