<?php
/**
 * Description of GalleryData
 */
include './Data/Data.php';
include './Domain/Image.php';

class GalleryData extends Data {

    public function getAllImage() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call get_all_image");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_image'], $row['path'], $row['description'], $row['id_organization']);
            array_push($array, $currentData);
        }
        return $array;
    }

}
