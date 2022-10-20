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
        $this->getEmail = $this->entity->getEmail();
        $this->getPassword = $this->entity->getPassword();
        $this->getAccountID = $this->entity->getAccountID();
        $this->getFullName = $this->entity->getFullName();
        $this->getSex = $this->entity->getSex();
        $this->getAge = $this->entity->getAge();
        $this->getContact = $this->entity->getContact();
		
        if($account_email == NULL || $account_password == NULL){
            $this->results = "empty";
        }

        return array($this->results, $this->getEmail, $this->getPassword, $this->getAccountID,
                    $this->getFullName, $this->getSex, $this->getAge, $this->getContact);
    }
}
?>