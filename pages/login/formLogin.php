<?php
session_start();
require '../../db.php';
require '../../Class/Authentication.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if(isset($_POST['email']) && isset($_POST['password'])){
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         $sql = "select * from user where email = '$email'";

//         $result = $conn->query($sql);

//         if ($result->num_rows > 0){
//             $row = $result->fetch_assoc();
//             if (password_verify($password, $row['password'])){
//                 session_start();
//                 $_SESSION['name'] = $row['name'];
//                 $_SESSION['email'] = $row['email'];
//                 $_SESSION['password'] = $row['password'];
//                 header('location: ');
//                 exit();
//             } else {
//                 echo "Password is incorrect";
//             }
//         } else {
//             echo "Email is incorrect";
//         }
//     }
// }



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