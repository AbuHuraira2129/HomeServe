<?php

function renderSingleServiceCard($serviceName, $rating, $serviceImage) {
    ?>
    <link rel="stylesheet" href="../assets/css/serviceCard.css" />

    <div class="service-card">
        <div class="service-image">
            <img src="<?php echo htmlspecialchars($serviceImage); ?>" alt="Service Image" />
        </div>
        <div class="service-info">
            <h3 class="service-name"><?php echo htmlspecialchars($serviceName); ?></h3>
            <div class="service-rating">
                <span class="rating"><?php echo htmlspecialchars($rating); ?> Rating</span>
            </div>
        </div>
    </div>
    <?php
}

?>
