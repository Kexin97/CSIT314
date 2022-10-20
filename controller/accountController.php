<?php
require_once('../entity/accountEntity.php');

class accountController {
    protected $entity;
    protected $result;

    function __construct() {
        $this->entity = new Account();
        $this->result = array();
    }

    function validateAccountDetails($account_email, $account_password, $account_profile){
        $this->entity->setEmail($account_email);
        $this->entity->setPassword($account_password);
        $this->entity->setProfile($account_profile);
        $this->results = $this->entity->verifyLogin();
        $this->resultss = $this->entity->getEmail();
		
        if($account_email == NULL || $account_password == NULL){
            $this->results = "empty";
        }

        return array($this->results, $this->resultss);
    }
}
?>