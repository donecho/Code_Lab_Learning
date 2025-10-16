<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userPhoto" > <br> <br>
        <input type="submit" value="Upload" name="btn-upload">
    </form>

    <?php 
        echo "<pre>";

        if( isset($_POST['btn-upload']) ){
            print_r($_FILES);

            $sizeStatus =  $_FILES['userPhoto']['size'] / 1000 >= 10 ? false : true ;

            if($sizeStatus){
                $image_name = $_FILES['userPhoto']['name'];
                $tmp_name = $_FILES['userPhoto']['tmp_name'];

                $target_file = "image/" . $image_name; 

                if(move_uploaded_file( $tmp_name , $target_file )){
                    echo "success";
                }else{
                    echo "error!";
                }
            }else{
                echo "error photo size";
            }
    
        }
    ?> 
</body>
</html>