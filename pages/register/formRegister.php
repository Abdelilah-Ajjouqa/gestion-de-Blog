<?php
session_start();
require '../../db.php';
require '../../Class/Authentication.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $role = 'user';
        
        $auth = new Authentication($conn);
        $result = $auth->register($name, $email, $password, $confirmPassword, $role);
        
        if ($result === true) {
            header('location: ../login/login.php');
            echo 'connect true';
            exit();
        } else {
            echo "<script>alert('$result');</script>";
        }
    }
}