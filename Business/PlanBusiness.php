
<?php
include_once './Data/PlanData.php';
/**
 * Description of PlanBusiness
 *
 * @author mm
 */
class PlanBusiness {

    private $planData;
    
    public function PlanBusiness(){        
        $this->planData = new PlanData();
    }
    public function getNamePlan(){
       return $result = $this->planData->getNamePlan();       
    }
    
    public function getInformationPlan(){
        return $result = $this->planData->getInformationPlan();  
    }
}
