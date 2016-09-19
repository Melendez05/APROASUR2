<?php
include_once './Data/Data.php';
include './Domain/Plan.php';

/**
 * Description of PlanData
 *
 * @author mm
 */
class PlanData extends Data{
   
    
    public function getNamePlan(){        
        $conn =  new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getNamePlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['name']); 
        return $result;        
    }
    
    public function getInformationPlan(){        
        $conn =  new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['description']); 
        return $result;  
        
    }
    
    
}
