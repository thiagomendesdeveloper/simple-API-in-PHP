<?php
class User {
    private $db;
    
    public function __construct() {
        require_once 'Database.php';
        $this->db = new Database();
    }

    public function getAllUsers() {
        $conn = $this->db->connect();
        $result = $conn->query("SELECT * FROM users");
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        $conn->close();
        return $users;
    }

    public function getUserById($id) {
        $conn = $this->db->connect();
        $result = $conn->query("SELECT * FROM users WHERE id = $id");
        $user = $result->fetch_assoc();
        $conn->close();
        return $user;
    }
}
?>
