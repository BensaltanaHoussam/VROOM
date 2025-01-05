<?php
require_once __DIR__ . '/../../../database/Database.php';
require_once __DIR__ . '/../../../class/categorie.php';

// Initialize database connection
$database = new Database();
$db = $database->connect();

// Initialize Category class
$category = new Category($db);

// Get the id_category from the request
$id_category = isset($_POST['id_category']) ? $_POST['id_category'] : null;

if ($id_category) {
    if ($category->deleteCategory($id_category)) {
      
        header("Location: /path/to/redirect"); // Add the correct path to redirect
       
    } else {
        echo "Failed to delete category.";
    }
} else {
    echo "Category ID is missing.";
}
?>