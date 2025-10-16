<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="name">
        <input type="submit" value="Send" name="btn-create">
    </form>
    

    <?php 
        echo "<pre>" ; 

        session_start(); 

        // session_destroy();

        unset($_SESSION['userData']);

        // $_SESSION['userData'] = 'sithu'; // set 

        if( isset($_SESSION['userData']) ){
            echo $_SESSION['userData'];
        }
        

        // if( isset($_POST['btn-create']) ){
        //     print_r($_POST['name']);
        // }


    ?>
</body>
</html>