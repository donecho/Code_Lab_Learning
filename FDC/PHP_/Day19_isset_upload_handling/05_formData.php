<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        Name : <input type="text" name="name" > <br><br>
        Email : <input type="email" name="email" > <br><br>
        Gender : 
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female <br><br>
        Language : 
        <input type="checkbox" name="language[]" value="mm"> Myanmar
        <input type="checkbox" name="language[]" value="eng"> English
        <input type="checkbox" name="language[]" value="jp"> Japanese <br><br>
        Level : 
        <select name="level">
            <option value="lev1">Level 1</option>
            <option value="lev2">Level 2</option>
            <option value="lev3">Level 3</option>
        </select> <br> <br>
        <input type="submit" value="Create" name="btn-create">
    </form>

    <?php
        echo "<pre>";

        if( isset($_POST['btn-create']) ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $language = $_POST['language'];
            $level = $_POST['level'];

            echo "Welcome , $name ! You have successfully login with $email <br>
            Your gender is $gender and level is $level <br>";

            foreach($language as $item){
                echo "Your language skill is $item <br>";
            }
        }
    ?>

</body>
</html>