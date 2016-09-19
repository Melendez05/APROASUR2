<?php

include './Data/Data.php';
include './Domain/Organization.php';

class OrganizationData extends Data {

    public function getOrganization() {

        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call aproasur_sp_get_organization");
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $organization = new Organization($row['id_organization'], $row['name'], $row['history'], $row['mission'], $row['view'], $row['comission']);
//        echo  $organization->comission . " test";
//        exit;
        
        
        return $organization;
    }

}
