<?php

class ServiceModel {
    public $serviceId;
    public $categoryId;
    public $serviceName;
    public $serviceDescription;
    public $priceRange;
    public $availability;
    public $providerId;
    public $serviceImage;
    public function __construct($serviceId, $categoryId, $serviceName, $serviceDescription, $priceRange, $availability, $providerId,$serviceImage) {
        $this->serviceId = $serviceId;
        $this->categoryId = $categoryId;
        $this->serviceName = $serviceName;
        $this->serviceDescription = $serviceDescription;
        $this->priceRange = $priceRange;
        $this->availability = $availability;
        $this->providerId = $providerId;
        $this->serviceImage=$serviceImage;
    }

    public function getServiceSummary() {
        return "Service: {$this->serviceName} (ID: {$this->serviceId}) - {$this->serviceDescription}. Price Range: {$this->priceRange}. Status: {$this->availability}. Imgae: {$this->serviceImage}";
    }
}

?>