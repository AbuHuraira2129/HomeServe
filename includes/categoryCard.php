<link rel="stylesheet" href="../assets/css/categoryCard.css">

<div class="category-card">
    <img src="<?php echo $service->categoryImage; ?>" alt="<?php echo $service->categoryName; ?>" />
    <h3><?php echo $service->categoryName; ?></h3>
    <!-- Pass the correct category_id in the URL -->
    <button onclick="location.href='services.php?category_id=<?php echo $service->categoryId; ?>'">Explore</button>
</div>

