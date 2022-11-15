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
		
		//for addPaper use
		public function conList()
        {
            $this->result = $this->entity->conferenceList();

            return $this->result;
        }
		public function authList()
        {
            $this->result = $this->entity->authorList();

            return $this->result;
        }
		
		
    }
	
	
	
	
?>