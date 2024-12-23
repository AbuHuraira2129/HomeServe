<?php
// Include necessary files
include('C:/xampp/htdocs/Service Link/controllers/serviceController.php');
include('C:/xampp/htdocs/Service Link/includes/serviceCard.php');



// Fetch all services for the given category ID
$services = getServicesByCategoryId(4);
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
        <h1>Services in Category ID: <?php echo htmlspecialchars(4); ?></h1>

        <div class="services-container">
            <?php
            if (count($services) > 0) {
                foreach ($services as $service) {
                    renderSingleServiceCard(
                        $service->serviceName,
                        4.5, // Assuming static rating for demo
                        "../Images/service_default.png" // Placeholder image
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
