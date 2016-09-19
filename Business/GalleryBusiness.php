<?php

include './Data/GalleryData.php';

class GalleryBusiness{
    public $GalleryData;
    
    public function GalleryBusiness(){
        $this->GalleryData = new GalleryData();
    }

    public function getAllImageBusiness() {
        return $this->GalleryData->getAllImage();
    }
}
