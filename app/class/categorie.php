<?php
require_once __DIR__ . '/../database/Database.php';// Adjust the path as necessary

class Category {
    private $conn; 

    public function __construct($db) {
        $this->conn = $db;
    }


    public function addCategory($name, $description,$categorie_img) {
        $query = "INSERT INTO categories (nom, description,categorie_img) VALUES (:name, :description , :categorie_img)";
        $stmt = $this->conn->prepare($query);

        // Bind parameters to protect against SQL injection
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':categorie_img', $categorie_img);

        if ($stmt->execute()) {
            return true; // Success
        }
        return false; // Failure
    }

    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCategory($id_categorie) {
        $query = "DELETE FROM categories WHERE id_categorie = :id_categorie";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_categorie', $id_categorie, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
