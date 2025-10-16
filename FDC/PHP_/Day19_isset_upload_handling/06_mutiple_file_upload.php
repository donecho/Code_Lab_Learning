<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Multiple File Upload...</h3>
 
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userPhoto[]" multiple> <br> <br>
        <input type="submit" value="Upload" name="btn-upload">
    </form>

    <?php 

        if( isset( $_POST['btn-upload'] ) ){

            $file = $_FILES;

            foreach($file as $img){

                foreach($img['name'] as $index => $imgName){
                    $img_name = $imgName ; //  photo name 
                    $tmp_name = $img['tmp_name'][$index]; // temp name
                    
                    $target_file = "image/" . $img_name ;

                    move_uploaded_file($tmp_name , $target_file);
                }
            }

            echo "storage success";
        }

        
        
    ?> 
</body>
</html>