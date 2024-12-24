<?php
include('C:/xampp/htdocs/HomeServe/controllers/serviceCategoryController.php');

$services = getAllServiceCategories();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Services</title>
    <link rel="stylesheet" href="../assets/css/services.css">
</head>
<body>

    <?php include('C:/xampp/htdocs/HomeServe/includes/header.php'); ?>

    <main>
        <!-- Hero Section -->
        <div class="hero">
                <h1>Find the Right Service for Your Needs</h1>
                <p>Browse our wide range of professional home services, from plumbing to beauty care, and book in just a few clicks.</p>
            
        </div>

        <!-- Top Services Section -->
        <section class="all-services">
            <h2>Top Services</h2>
            <div class="service-container">
                <?php
                foreach ($services as $service) {
                    include('C:/xampp/htdocs/HomeServe/includes/serviceCard.php');
                }
                ?>
            </div>
        </section>

    </main>

    <?php include('C:/xampp/htdocs/HomeServe/includes/footer.php'); ?>

</body>
</html>

<link rel="stylesheet" href="../assets/css/serviceCard.css">
