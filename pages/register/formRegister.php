<?php
session_start();
require '../../db.php';
require '../../Class/Authentication.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//         $sql = "insert into user (name, email, password) values ('$name', '$email', '$hashed_password')";

//         if ($conn->query($sql) === true){
//             // $_SESSION ['name'] = $name;
//             $_SESSION ['email'] = $email;
//             $_SESSION ['password'] = $hashed_password; 
//         } else {
//             echo "Error: ". $conn->error;
//             // echo "there's an error";
//         }
//     }
//     header('location: ../login/login.php');
//     exit();
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $role = 'user';
        
        $auth = new Authentication($db);
        $result = $auth->register($name, $email, $password, $confirmPassword, $role);
        
        if ($result === true) {
            header('location: ../login/login.php');
            exit();
        } else {
            echo "<script>alert('$result');</script>";
        }
    }
}