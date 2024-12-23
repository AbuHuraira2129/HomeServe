<?php
// Include necessary files
include('C:/xampp/htdocs/Service Link/controllers/serviceController.php');
include('C:/xampp/htdocs/Service Link/includes/serviceCard.php');

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
    <?php include('C:/xampp/htdocs/Service Link/includes/header.php'); ?>

    <main>
        <h1>Services in Category: <?php echo htmlspecialchars($categoryId); ?></h1>

        <div class="services-container">
            <?php
            if (count($services) > 0) {
                foreach ($services as $service) {
                    renderSingleServiceCard(
                        $service->serviceName,
                        $service->availability,// Assuming static rating for demo
                        $service->serviceImage, // Placeholder image
                    );
                }
            } else {
                echo "<p>No services found for this category.</p>";
            }
            ?>
        </div>
    </main>

    <?php include('C:/xampp/htdocs/Service Link/includes/footer.php'); ?>
</body>
</html>
