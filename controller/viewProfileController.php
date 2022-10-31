<?php
    require_once("../entity/accountEntity.php");

    class ViewProfileController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Account();
            $this->result = array();
        }

        public function viewProfile()
        {
            $this->result = $this->entity->viewUserProfile();

            return $this->result;
        }
		
    }
	
	
	
	
?>