<?php

include('C:/xampp/htdocs/Service Link/includes/db.php'); 
include('C:/xampp/htdocs/Service Link/models/ServiceCategoryModel.php');

function getTopServiceCategories() {
    global $conn;
    
    $query = "SELECT * FROM serviceCategory LIMIT 4";  // Adjust table name for proper spelling
    
    $result = $conn->query($query);
    
    $serviceCategories = [];
    
    while ($row = $result->fetch_assoc()) {
        $serviceCategory = new ServiceCategoryModel(
            $row['category_id'], 
            $row['category_name'], 
            $row['category_image']
        );
        
        $serviceCategories[] = $serviceCategory;
    }
    
    return $serviceCategories;
}

function getAllServiceCategories() {
    global $conn;
    
    $query = "SELECT * FROM serviceCategory";  // Adjust table name for proper spelling
    
    $result = $conn->query($query);
    
    $serviceCategories = [];
    
    while ($row = $result->fetch_assoc()) {
        $serviceCategory = new ServiceCategoryModel(
            $row['category_id'], 
            $row['category_name'], 
            $row['category_image']
        );
        
        $serviceCategories[] = $serviceCategory;
    }
    
    return $serviceCategories;
}
?>
