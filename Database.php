<?php  

class Database{
    public $connection;
    public $hostName="localhost";
    public $dbName="ecommers74";
    public $dbUserName="root";
    public $dbPassWord="";

    public function __construct(){
        $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->dbName", $this->dbUserName , $this->dbPassWord);
        if($this->connection){
            //echo 'Connected';
        }else{
            echo 'error';
        }
    }
    //main menu product category
    public function proCategory(){
        $query = "SELECT * FROM `product_category`";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }

    //main menu product sub category
    public function proSubCategory($id){
        $query = "SELECT * FROM `sub_category` WHERE `category_id`=$id";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }

    //main menu product sub category

    public function proSubSubCategory($id){
        $query = "SELECT * FROM `sub_sub_category` WHERE `sub_cat_id`=$id";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }

    //slider
    public function slider(){
        $query = "SELECT * FROM `slider`";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //slider bottom
    public function sliderBottom(){
        $query = "SELECT * FROM `slider-bottom`";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }

    //new producgts
    public function newProCategory(){
        $query = "SELECT * FROM `product_category` LIMIT 2";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //all products
    public function products(){
        $query = "SELECT * FROM `products`";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }

    public function newProducts($id){
        $query = "SELECT * FROM `products` WHERE `category_id`=$id  LIMIT 6";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //new arrivals
    public function newArrivals(){
        $query = "SELECT * FROM `products` ORDER BY `created_at` DESC";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //best seller
    public function bestSeller(){
        $query = "SELECT * FROM `products` ORDER BY RAND()";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //blog post
    public function blogPost(){
        $query = "SELECT * FROM `blog`";
        $satemant = $this->connection->prepare($query);
        $satemant->execute();
        $result = $satemant->fetchAll();
        return $result;
    }
    //single post
    public function viewSinglePost($id){
        $query = "SELECT * FROM `blog` WHERE id=".$id;
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}

?>