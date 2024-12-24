<?php

// Include database connection and Service model
include('C:/xampp/htdocs/Service Link/includes/db.php');
include('C:/xampp/htdocs/Service Link/models/serviceModel.php');

/**
 * Fetch all services based on a specific category ID.
 *
 * @param int $categoryId The ID of the category.
 * @return array An array of ServiceModel objects representing the services.
 */
function getServicesByCategoryId($categoryId) {
    global $conn; // Access the global database connection
    
    // Prepare the SQL query to fetch services by category ID
    $query = "SELECT * FROM service WHERE category_id = ?";
    
    // Initialize the prepared statement
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $categoryId); // Bind the category ID as an integer
    
    // Execute the query
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->get_result();
    
    // Initialize an array to store services
    $services = [];
    
    // Iterate through the result set and create ServiceModel objects
    while ($row = $result->fetch_assoc()) {
        $service = new ServiceModel(
            $row['service_id'],
            $row['category_id'],
            $row['service_name'],
            $row['service_description'],
            $row['price_range'],
            $row['availability'],
            $row['provider_id'],
            $row['service_image'],
        );
        $services[] = $service;
    }
    
    // Close the statement
    $stmt->close();
    
    // Return the array of services
    return $services;
}

?>
