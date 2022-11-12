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

        public function searchAccountNames(){
            $this->result = $this->entity->searchReviewerAccount();

            return $this->result;
        }

        public function searchAccountEmail(){
            $this->result = $this->entity->searchReviewerEmail();

            return $this->result;
        }

        public function assignReviewer($paperName, $reviewerName, $reviewerEmail, $numOfAllocatedPapers){
            $this->entity->setPaperName($paperName);
            $this->entity->setReviewerName($reviewerName);
            $this->result = $this->entity->allocatePaper($paperName, $reviewerName, $reviewerEmail, $numOfAllocatedPapers);

            return $this->result;
        }

        public function getNumOfAllocatedPapersArray(){
            $this->result = $this->entity->searchNumOfAllocatedPapers();

            return $this->result;
        }

        public function getReviewerDetails($reviewerName){
            $this->result = $this->entity->searchReviewerDetails($reviewerName);

            return $this->result;
        }
    }
?>