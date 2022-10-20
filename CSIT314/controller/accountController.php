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
        $this->result = $this->entity->loginDetails($account_email, $account_password, $account_profile);
        $this->results = $this->entity-> verifyLogin();
		
        if($account_email == NULL || $account_password == NULL){
            $this->results = "empty";
        }

        return $this->results;
    }
}
?>