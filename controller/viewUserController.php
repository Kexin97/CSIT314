<?php
    require_once("../entity/accountEntity.php");

    class ViewAccountController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Account();
            $this->result = array();
        }

		public function viewUsers()
        {
            $this->result = $this->entity->viewUserAccount();

            return $this->result;
        }
		
		
		
		
    }
	
	
	
	
?>