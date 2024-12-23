<?php

/**
 * SingleServiceCard Component
 *
 * @param string $serviceName The name of the service.
 * @param float $rating The rating of the service (e.g., 4.6).
 * @param string $serviceImage The URL or path to the service image.
 */
function renderSingleServiceCard($serviceName, $rating, $serviceImage) {
    ?>
    <link rel="stylesheet" href="../assets/css/serviceCard.css" />

    <div class="single-service-card">
        <div class="group-wrapper">
            <div class="group">
                <div class="frame">
                    <div class="div-wrapper">
                        <div class="text-wrapper"><?php echo htmlspecialchars($serviceName); ?></div> 
                    </div>
                    <div class="div">
                        <div class="text-wrapper-2"><?php echo htmlspecialchars($serviceName); ?></div> 
                        <div class="frame-2">
                            <img
                                class="material-symbols"
                                src="<?php echo htmlspecialchars($serviceImage); ?>"
                                alt="Service Image"
                            />
                            <div class="text-wrapper-3"><?php echo htmlspecialchars($rating); ?> Rating</div>
                        </div>
                    </div>
                </div>
                <button class="solar-arrow-right-wrapper">
                    <img
                        class="solar-arrow-right"
                        src="../Images/solar_arrow-right-outline.png"
                        alt="Arrow"
                    />
                </button>
            </div>
        </div>
    </div>
    <?php
}
?>
