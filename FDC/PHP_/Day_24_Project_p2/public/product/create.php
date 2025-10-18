<?php 
    require_once("../helper/header.php");
    require_once("../../db/connection.php");    
    require_once("./source/categoryList.php");
?>

   <div class="container">
       <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="my-2 d-flex justify-content-center">
                    <img src="" id="output" class="w-50">
                </div>
                <input type="file" name="image" class="form-control w-100 my-2" onchange="loadFile(event)">
                <input type="text" name="name" value="<?php echo $_POST['name'] ?? "" ;?>" class="form-control w-100 my-2" placeholder="Enter Product Name...">
                <?php 
                        if( isset($_POST['create-btn']) ){
                            $nameStatus = $_POST['name'] == "" ? false : true ;
                            echo $nameStatus ? "" : "<small class='text-danger'>Product Name is required!</small>";
                        }
                ?>
                <input type="text" name="price" value="<?php echo $_POST['price'] ?? "" ;?>" class="form-control w-100 my-2" placeholder="Enter Product Price...">
                <?php 
                        if( isset($_POST['create-btn']) ){
                            $priceStatus = $_POST['price'] == "" ? false : true ;
                            echo $priceStatus ? "" : "<small class='text-danger'>Product Price is required!</small>";
                        }
                ?>
                <textarea name="description" value="" rows="10" cols="30" class="form-control w-100 my-2" placeholder="Enter Product Description..."><?php echo $_POST['description'] ?? "" ;?></textarea>
                <?php 
                        if( isset($_POST['create-btn']) ){
                            $descriptionStatus = $_POST['description'] == "" ? false : true ;
                            echo $descriptionStatus ? "" : "<small class='text-danger'>Product Description is required!</small>";
                        }
                ?>
                <select name="categoryId" class="form-select">
                    <option value="">Choose Category Name...</option>
                    <!-- <option value="">AAA</option>
                    <option value="" selected>BBB</option>
                    <option value="">CCC</option> -->

                    <?php 
                        foreach($categories as $item){
                            // 1 2 3 4 -> 3

                            // '..' ".Item."

                            // '.$_POST["categoryId"] == $item["id"]? "seleted" : "".'
                            echo '<option value="'.$item['id'].'" '. ( isset($_POST['categoryId']) && $item['id'] == $_POST['categoryId'] ? 'selected' : '' ) .' >'.$item['name'].'</option>';

                            // echo '<option value="'.$item['id'].'"  >'.$item['name'].'</option>';
                        }
                    ?>
                </select>
                <?php 
                        if( isset($_POST['create-btn']) ){
                            $categoryStatus = $_POST['categoryId'] == "" ? false : true ;
                            echo $categoryStatus ? "" : "<small class='text-danger'>Category Name is required!</small>";
                        }
                ?>
                <input type="submit" value="Create" name="create-btn" class=" my-2 btn bg-dark text-white w-100">
            </form>
        </div>
       </div> 
   </div>

<?php require_once("../helper/footer.php");   ?>

