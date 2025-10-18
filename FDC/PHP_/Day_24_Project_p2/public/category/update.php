<?php 
    
    require_once("../helper/header.php");
    require_once("../../db/connection.php");

    $query = "select * from category where id=?";
    $res = $pdo->prepare($query);
    $res->execute([$_GET['id']]);

    $data = $res->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post">
                <input type="text" name="categoryName"  class="form-control" value=" <?php echo $_POST['categoryName'] ?? $data['name'] ; ?> ">
                <?php 
                        if( isset($_POST['update-btn']) ){
                            $categoryStatus = $_POST['categoryName'] == "" ? false : true ;
                            echo $categoryStatus ? "" : "<small class='text-danger'>Category is required!</small>";
                        }
                ?>
                <br>
                <input type="submit" class="btn btn-secondary w-25 m-3 rounded shadow-sm" value="Update" name="update-btn">
            </form>
        </div>
    </div>
</div>


<?php 
     if( isset( $_POST['update-btn'] ) ){
        $categoryName = $_POST['categoryName'];

        if($categoryStatus){
            $query = "update category set name=? where id=?";
            $res = $pdo->prepare($query);
            $res->execute([$categoryName,$_GET['id']]);

            header("Location:create.php");
        }
    } 

    require_once("../helper/footer.php");
   
?>