<?php
    require_once("../entity/accountEntity.php");

    class updateProfileController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Account();
            $this->result = array();
        }

        public function profileDetails($account_email, $profile_type){
            $this->result = $this->entity->updateUserProfile($account_email, $profile_type);

            return $this->result;
        }
		
		public function updateProfile($account_email){
            $this->result = $this->entity->b4updateUserProfile($account_email);

            return $this->result;
        }
    }
?>