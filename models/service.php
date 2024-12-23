<?php

class Service {

    public $id;
    public $category;
    public $sub_category;
    public $description;
    public $price_range;
    public $availability;
    public $image;

    public function __construct($id, $category, $sub_category, $description, $price_range, $availability, $image) {
        $this->id = $id;
        $this->category = $category;
        $this->sub_category = $sub_category;
        $this->description = $description;
        $this->price_range = $price_range;
        $this->availability = $availability;
        $this->image = $image;
    }
}

?>
