<?php
    require_once("../entity/accountEntity.php");

    class updateUserController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Account();
            $this->result = array();
        }

        public function userDetails($account_email, $account_password, $account_fullName, $account_sex, $account_age, $account_contact){
            $this->result = $this->entity->updateUserAccount($account_email, $account_password, $account_fullName, $account_sex, $account_age, $account_contact);

            return $this->result;
        }
		
    }
?>