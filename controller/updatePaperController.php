<?php
    require_once("../Entity/paperEntity.php");

    class updatePaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Paper();
            $this->result = array();
        }

        public function paperDetails($account_email, $account_password, $account_fullName, $account_sex, $account_age, $account_contact){
            $this->result = $this->entity->updatePaperAccount($account_email, $account_password, $account_fullName, $account_sex, $account_age, $account_contact);

            return $this->result;
        }
		
    }
?>