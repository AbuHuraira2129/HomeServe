<?php
<<<<<<< HEAD
include('C:/xampp/htdocs/HomeServe/controllers/serviceCategoryController.php');
=======
// Include necessary files
include('C:/xampp/htdocs/Service Link/controllers/serviceController.php');
include('C:/xampp/htdocs/Service Link/includes/serviceCard.php');
>>>>>>> 91c94c2c3cbf49b308a7c8b6af4491f111e7bfb1

// Get the category ID from the URL (e.g., services.php?category_id=1)
$categoryId = isset($_GET['category_id']) ? (int)$_GET['category_id'] : 0;

if ($categoryId <= 0) {
    echo "Invalid category ID!";
    exit;
}
// Fetch all services for the given category ID
$services = getServicesByCategoryId($categoryId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../assets/css/services.css">
</head>
<body>
<<<<<<< HEAD

    <?php include('C:/xampp/htdocs/HomeServe/includes/header.php'); ?>
=======
    <?php include('C:/xampp/htdocs/Service Link/includes/header.php'); ?>
>>>>>>> 91c94c2c3cbf49b308a7c8b6af4491f111e7bfb1

    <main>
        <h1>Aavalible Services</h1>

        <div class="service-container">
            <?php
            if (count($services) > 0) {
                foreach ($services as $service) {
<<<<<<< HEAD
                    include('C:/xampp/htdocs/HomeServe/includes/serviceCard.php');
=======
                    renderSingleServiceCard(
                        $service->serviceName,
                        $service->availability,
                        $service->serviceImage, 
                    );
>>>>>>> 91c94c2c3cbf49b308a7c8b6af4491f111e7bfb1
                }
            } else {
                echo "<p>No services found for this category.</p>";
            }
            ?>
        </div>
    </main>

<<<<<<< HEAD
    <?php include('C:/xampp/htdocs/HomeServe/includes/footer.php'); ?>

=======
    <?php include('C:/xampp/htdocs/Service Link/includes/footer.php'); ?>
>>>>>>> 91c94c2c3cbf49b308a7c8b6af4491f111e7bfb1
</body>
</html>
