<?php 
    
    require_once("../helper/header.php");
    require_once("../../db/connection.php");

    $categoryQuery = "select id,name from category order by created_at desc";
    $categroyRes = $pdo->prepare($categoryQuery);
    $categroyRes->execute();

    $categories = $categroyRes->fetchAll(PDO::FETCH_ASSOC);

    
?>

   <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="" method="post">
                    <input type="text" name="categoryName" placeholder="Enter Category Name..." class="form-control w-100">
                    <?php 
                        if( isset($_POST['create-btn']) ){
                            $categoryStatus = $_POST['categoryName'] == "" ? false : true ;
                            echo $categoryStatus ? "" : "<small class='text-danger'>Category is required!</small>";
                        }
                    ?>
                    <input type="submit" name="create-btn" value="Create" class="mt-3 form-control btn bg-dark text-white rounted shadow-sm">
                </form>
            </div>
            <div class="col">

                <?php 

                    if( isset( $_POST['create-btn'] ) ){
                        $categoryName = $_POST['categoryName'];

                        if($categoryStatus){
                            $query = "insert into category (name) values (?)";
                            $res = $pdo->prepare($query);
                            $res->execute([$categoryName]);

                            header("Location:create.php");
                        }
                    } 

                    $name = 'code lab';

                    foreach($categories as $item){
                        $category = $item['name'];
                        $id = $item['id'];
                        echo "<div class='card my-2'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-10'>
                                            <div class='p-1'>
                                                 $category 
                                            </div>
                                        </div>
                                        <div class='col'>
                                            <a href='update.php?id=$id' class='btn btn-sm rounded btn-secondary'><i class='fa-solid fa-pen-to-square'></i></a>
                                            <a href='delete.php?id=$id' class='btn btn-sm rounded btn-danger'><i class='fa-solid fa-trash'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                ?>
                
            </div>
        </div>
   </div>
<?php 
    require_once("../helper/footer.php");
?>

