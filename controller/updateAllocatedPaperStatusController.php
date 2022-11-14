<?php
    require_once("../entity/viewAllocatedPaperEntity.php");

    class updateAllocatedPaperStatusController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new updateAllocatedPaperStatus();
            $this->result = array();
        }

        function viewAllPaper(){
            $this->result = $this->entity->viewAllPaperDetails();

            return $this->result;
        }
    }
?>