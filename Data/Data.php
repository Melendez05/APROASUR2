<?php

/**
 * Description of PlanData
 */
class Data {
    public $server;
    public $user;
    public $password;
    public $db;
    
    public $connection;
    public $isActive;
    
    /* constructor */
    public function Data(){
        $this->isActive = false;
        $this->server = "50.62.209.186";
        $this->user = "user16_aproasur";
        $this->password = "5dhk912";
        $this->db = "aproasur_db";
    }  
}
?>
