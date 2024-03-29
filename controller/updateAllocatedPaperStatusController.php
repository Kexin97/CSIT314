<?php
    require_once("../entity/updateAllocatedPaperStatusEntity.php");

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

        function updatePaperCurrentStatus($paperID, $status){
            $this->result = $this->entity->updatePaperStatus($paperID, $status);

            return $this->result;
        }
    }
?>