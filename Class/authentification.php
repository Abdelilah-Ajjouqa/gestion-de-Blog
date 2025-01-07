<?php
class Authentification {
    private $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function register($name, $email, $password, $confirmPassword, $role = 'normal'){

        try {
            $query = "select * from user where email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return "this Email is already exit";
            }
            if ($password !== $confirmPassword) {
                return "passwords do not match";
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $query = "INSERT INTO user (name, email, password, role) VALUES (:name, :email, :password, :role)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':role', $role);
            $stmt->execute();

            $userId = $this->db->lastInsertId();

            if ($userId){
                $_SESSION['user_id'] = $userId['id'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role;
            }

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}