<?php
include('C:/xampp/htdocs/Service Link/controllers/serviceCategoryController.php');

$services = getServiceCategories();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Services</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>

    <?php include('C:/xampp/htdocs/Service Link/includes/header.php'); ?>

    <main>
        <!-- Hero Section -->
        <div class="hero">
            <div class="heroLeft">
                <h1>Welcome to Home ServiceLink</h1>
                <p>Your trusted platform to connect with skilled professionals for all your home service needs.</p>
                <button class="cta-btn" onclick="window.location.href='services.php';">Explore Services</button>
            </div>
            <div class="heroRight">
                <img class="heroImage" src="../assets/images/hero.png" alt="Hero Image">
            </div>
        </div>

        <!-- Top Services Section -->
        <section class="top-services">
            <h2>Top Services</h2>
            <div class="service-container">
                <?php
                foreach ($services as $service) {
                    include('C:/xampp/htdocs/Service Link/includes/serviceCard.php');
                }
                ?>
            </div>
        </section>

    </main>

    <?php include('C:/xampp/htdocs/Service Link/includes/footer.php'); ?>

</body>
</html>

<link rel="stylesheet" href="../assets/css/serviceCard.css">
