<?php
$user = 'root';
$password = '123';

try {
    $conn = new PDO("mysql:host=localhost;dbname=blog_2", $user, $password);
} catch (PDOException $e){
    echo 'Connection failed: ' . $e->getMessage();
}