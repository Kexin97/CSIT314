<?php
require_once('../entity/accountProfileEntity.php');

class accountProfileController {
    protected $entity;
    protected $result;

    function __construct() {
        $this->entity = new AccountProfile();
        $this->result = array();
    }

    function validateAccountType($account_email,$checkProfile){
        $this->results =$this->entity->checkProfileType($account_email,$checkProfile);
        $this->resultss = $this->entity->getProfileType();
        return array($this->results, $this->resultss);
    }
}
?>