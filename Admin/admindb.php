<?php  
    $conn = mysqli_connect("localhost", "root", "", "ecommers74");

    if (isset($_GET['allProducts'])) {
       $allProducts =  $conn->query("SELECT * FROM `products`");
       
       echo json_encode($allProducts->fetch_all(MYSQLI_ASSOC));
    }
    
    if (isset($_GET['allcats'])) {
       $allCats =  $conn->query("SELECT * FROM `product_category`");
       
       echo json_encode($allCats->fetch_all(MYSQLI_ASSOC));
    }

    if (isset($_GET['addCat'])) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $addCat = $_POST['addCat'];
            $addCatIcon = $_POST['addCatIcon'];
            $msg = [];
            $addNerCats =  $conn->query("INSERT INTO `product_category` (`name`, `icon`) VALUES ('$addCat', '$addCatIcon')");
            if(!$addNerCats){
                $msg["err"] = "Something went wrong";
            }else{
                $msg["success"] = "Category added successfully";
            }
            echo json_encode($msg);
        }
    }
?>