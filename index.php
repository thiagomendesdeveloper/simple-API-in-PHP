<?php
header('Content-Type: application/json');

require_once 'User.php';

$userApi = new User();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $userData = $userApi->getUserById($userId);
        echo json_encode($userData);
    } else {
        $allUsers = $userApi->getAllUsers();
        echo json_encode($allUsers);
    }
}
?>
