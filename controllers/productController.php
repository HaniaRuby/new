<?php

include_once "DBController.php";

class ProductController {

    protected $db;

    
    public function __construct() {
        $this->db = new DBControllers();
        $this->db->connectDB(); // Ensure the connection is established
    }

    public function getAllProducts() {
        $query = "SELECT * FROM products"; 
        $data = $this->db->select($query);
    
        $products = [];
    
        if ($data !== false && !empty($data)) {
            foreach ($data as $row) {
                $product = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'price' => $row['price'],
                    'image' => $row['img'] 
                ];
                $products[] = $product;
            }
        }
    
        return $products;
    }
    

    public function getProduct($productId) {
        $query = "SELECT * FROM products WHERE id = $productId"; 
        $result = $this->db->select($query);
    
        if ($result && count($result) > 0) {
            return $result[0]; 
        } else {
            return null; 
        }
    }
    
}
?>
