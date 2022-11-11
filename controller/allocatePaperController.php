<?php
    require_once("../entity/allocatePaperEntity.php");

    class allocatePaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Paper();
            $this->result = array();
        }

        public function searchAccounts(){
            $this->result = $this->entity->searchReviewerAccount();

            return $this->result;
        }

        //public function 
    }
?>