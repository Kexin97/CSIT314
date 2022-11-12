<?php
    require_once("../entity/allocatePaperEntity.php");

    class allocatePaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Paper();
            $this->result = array();
        }

        public function searchPapers(){
            $this->result = $this->entity->searchPaperNames();

            return $this->result;
        }

        public function searchAccounts(){
            $this->result = $this->entity->searchReviewerAccount();

            return $this->result;
        }

        public function assignReviewer($paperName, $reviewerName){
            $this->entity->setPaperName($paperName);
            $this->entity->setReviewerName($reviewerName);
            $this->result = $this->entity->allocatePaper();

            return $this->result;
        }
    }
?>