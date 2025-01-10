<?php
session_start();
require '../../db.php';
require '../../Class/Authentication.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $auth = new Authentication($conn);
        $result = $auth->login($email, $password);
        
        if ($result === true) {
            header('location: ../blog.php');
            // echo 'login successful';
            exit();
        } else {
            echo "<script>alert('$result');</script>";
        }
    }
}