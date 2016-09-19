<?php

include './Data/ProductData.php';
//include_once $_SERVER['DOCUMENT_ROOT'].'/APROASUR/Data/ProductData.php';
    

/**
 * Description of OrganizationBusiness
 *
 * @author gollo
 */
class ProductBusiness {
    
    /* atributos */
    private $productData;
    
    public function ProductBusiness(){
        $this->productData = new ProductData();
    }
    
    public function getAllProducts(){
        $result = $this->productData->getAllProducts();
        return $result;
    }
    
}
