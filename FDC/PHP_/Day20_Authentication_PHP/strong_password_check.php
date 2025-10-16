
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Strong Password check</h3>

    <small>
        Password must contain
        <ul>
            <li>At least once A - Z </li>
            <li>At least once a - z </li>
            <li>At least once 0 - 9 </li>
            <li>At least once special character </li>
            <li>Length must be at least 6</li>
        </ul>
    </small>

    <form action="" method="post">
        <input type="text" name="password">
        <input type="submit" value="Check" name="btn-check">
    </form>

    <?php 

        if( isset($_POST['btn-check']) ){
            $password = $_POST['password'];

            $upperCaseStatus = preg_match('/[A-Z]/',$password);
            $lowerCaseStatus = preg_match('/[a-z]/',$password);
            $digitStatus = preg_match('/[0-9]/',$password);
            $specialStatus = preg_match('/[!@#$%^&*()]/',$password);
            $lengthStatus = strlen($password) >= 6 ? true : false ;

            if( $upperCaseStatus && $lowerCaseStatus && $digitStatus && $specialStatus && $lengthStatus){
                echo "<h1 style='color : green'>This is strong password...</h1>";
            }else{
                echo "<h1 style='color : red'>This is not strong password! Try Again...</h1>";
            }
            
        }
    
    ?>
</body>
</html>