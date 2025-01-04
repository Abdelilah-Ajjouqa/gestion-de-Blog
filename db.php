<?php
$host = 'localhost';
$user = 'root';
$password = '123';
$database = 'blog_2';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}