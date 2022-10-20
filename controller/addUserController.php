<?php
    require_once("../Entity/addUserEntity.php");

    class addUserController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new AddUser();
            $this->result = array();
        }

        public function validateDetails($account_password, $account_fullName, $account_sex,
                                        $account_age, $account_contact, $account_email){
            $this->result = $this->entity->addUser($account_password, $account_fullName, 
                                            $account_sex, $account_age, $account_contact, 
                                            $account_email);

            return $this->result;
        }
    }
?>