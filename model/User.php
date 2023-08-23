<?php

class User {

    private String $name = '';
    private String $email = '';
    private String $password = '';
    private String $password_confurm = '';
    private $db;
    public function __construct($data = [], $db) {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->password_confurm = $data['password_confurm'];
        $this->db = $db;
    }

    public function create() {
        $sql = "INSERT INTO users (name, email, password, password_confirm) VALUES ('$this->name', '$this->email', '$this->password', '$this->password_confurm')";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function show(){
        $sql = "SELECT * FROM users";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function show_by_id($id){
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}

?>