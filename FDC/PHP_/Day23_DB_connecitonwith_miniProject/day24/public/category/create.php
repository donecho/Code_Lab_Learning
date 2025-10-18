<?php 
    require_once("../helper/header.php");
    require_once("../../db/connection.php");
?>

   <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="" method="post">
                    <input type="text" name="categoryName" placeholder="Enter Category Name..." class="form-control w-100">
                    <input type="submit" name="create-btn" value="Create" class="mt-3 form-control btn bg-dark text-white rounted shadow-sm">
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="p-1">
                                Hello World
                                </div>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-sm rounded btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-sm rounded btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>

<?php 
    require_once("../helper/footer.php");

    if( isset( $_POST['create-btn'] ) ){
        $categoryName = $_POST['categoryName'];

        if($categoryName != ""){
            $query = "insert into category (name) values (?)";
            $res = $pdo->prepare($query);
            $res->execute([$categoryName]);
        }
    }
?>

