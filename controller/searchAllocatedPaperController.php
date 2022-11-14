<?php
    require_once("../entity/allocatePaperEntity.php");

    class searchAllocatedPaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new searchAllocatedPaper();
            $this->result = array();
        }

        function searchAllocatedPapers(){
            
        }
    }
?>