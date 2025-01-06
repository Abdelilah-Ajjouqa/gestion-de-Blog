<?php
$host = 'localhost';
$user = 'root';
$password = '123';
$database = 'blog_2';

// $conn = new mysqli($host, $user, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
// } catch (PDOException $e){
//     echo 'Connection failed: ' . $e->getMessage();
// }

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}