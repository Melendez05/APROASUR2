<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/APROASUR/Data/Data.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/APROASUR/Domain/Product.php';

/**
 * Description of ProductData
 *
 * @author gollo
 */
class ProductData extends Data {
    
    /* metodo obtiene todos los productos de la BD */
    public function getAllProducts(){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $query = "call sp_getAllProducts()";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);

        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentProduct = new Product($row['id_product'], $row['name'],
                    $row['description'], $row['path_image'], $row['id_organization']);
            array_push($array, $currentProduct);
        }
        return $array;
    }
    
}
