<?php 

class Product {
    private String $name = '';
    private String $price = '';
    private $db;
    public function __construct($data = [], $db){
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->db = $db;
    }

    public function create(){
        $sql = "INSERT INTO product (name, price) VALUES (:name, :price)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':price', $this->price);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $sql = "DELETE FROM product WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function show(){
        $sql = "SELECT * FROM product";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function show_by_id($id){
        $sql = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt;
    }
}

?>