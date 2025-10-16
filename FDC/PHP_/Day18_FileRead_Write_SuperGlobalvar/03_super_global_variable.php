<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <!-- get method  -->
        <a href="./04_server_request.php?key=vawsfawfawefawf&status=false" target="_blank">This is link</a>

        <form action="./04_server_request.php" method="post">
            Name : <input type="text" name="name"> <br>
            Address : <input type="text" name="address" > <br>
            <button type="submit">Create</button>
            <button type="reset">Reset</button>
        </form>

        <?php

        // get -> url | data seen 

        // post -> form | data unseen

        // http://localhost/fdc_22/day17/03_super_global_variable.php

        // http://localhost/fdc_22/day17/03_super_global_variable.php?name=fawefaw&address=fawefaw

            // echo "<pre>";

            // print_r($_GET); // URL -> ? key = value & key = value & key = value

            // http://localhost/fdc_22/day17/03_super_global_variable.php

            // http://localhost/fdc_22/day17/03_super_global_variable.php

            // print_r($_POST);






        // button reset submit

     

        // HTTP REQUEST (reqeust and response)

        // $_GLOBAL | $_SERVER | $_REQUEST | $_GET | $_POST (form)

        // $_SESSION | $_COOKIE

        //   print_r($_REQUEST); 

        // print_r($_GET);
        ?>
</body>
</html>