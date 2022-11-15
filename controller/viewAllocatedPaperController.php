<?php
    require_once("../entity/viewAllocatedPaperEntity.php");

    class viewAllocatedPaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new viewAllocatedPaper();
            $this->result = array();
        }

        function viewAllocatedPapersController(){
            $this->result = $this->entity->viewAllocatedPapers();

            return $this->result;
        }
    }
?>