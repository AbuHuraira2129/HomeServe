<?php

class ServiceCategoryModel {

    public $categoryId;
    public $categoryName;
    public $categoryImage;

    public function __construct($categoryId, $categoryName, $categoryImage) {
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
        $this->categoryImage = $categoryImage;
    }
}

?>
