<?php
    require_once("../entity/addProfileEntity.php");

    class addProfileController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new AddProfile();
            $this->result = array();
        }

        public function profileDetails($account_email, $profile_type){
            $this->result = $this->entity->addUserProfile($account_email, $profile_type);

            return $this->result;
        }
    }
?>