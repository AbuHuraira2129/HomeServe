<link rel="stylesheet" href="../assets/css/categoryCard.css">

<div class="category-card">
    <img src="<?php echo $service->categoryImage; ?>" alt="<?php echo $service->categoryName; ?>" />
    <h3><?php echo $service->categoryName; ?></h3>
    <button onclick="location.href='services.php?id=<?php echo $service->categoryId; ?>'">Explore</button>
</div>


