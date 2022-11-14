<?php
    require_once("../entity/allocatePaperEntity.php");

    class viewAllocatedPaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new viewAllocatedPaper();
            $this->result = array();
        }

        function viewAllocatedPapers(){
            
        }
    }
?>