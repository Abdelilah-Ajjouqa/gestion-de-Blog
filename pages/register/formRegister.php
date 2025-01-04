<?php
session_start();
require './db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name']) && isset($_post['email']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "insert into user (name, email, password) values ('$name', '$email', '$hashed_password')";

        if ($conn->query($sql) === true){
            // $_SESSION ['name'] = $name;
            $_SESSION ['email'] = $email;
            $_SESSION ['password'] = $hashed_password; 
        } else {
            echo "Error: ". $conn->connect_error;
        }
        header('location: ./register.php');
        exit();
    }
}