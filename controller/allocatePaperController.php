<?php
    require_once("../entity/allocatePaperEntity.php");

    class allocatePaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new allocatePaper();
            $this->result = array();
        }

        public function searchPapers(){
            $this->result = $this->entity->searchPaperNames();

            return $this->result;
        }

        public function getBidderDetails(){
            $this->result = $this->entity->bidReviewerNames();

            return $this->result;
        }

        public function getBidderWorkload(){
            $this->result = $this->entity->bidReviewerWorkload();

            return $this->result;
        }

        public function getBidderCurrentWorkload(){
            $this->result = $this->entity->getBidderCurrentWorkload();

            return $this->result;
        }

        public function assignReviewer($paperName, $bidderName, $bidderEmail){
            $this->result = $this->entity->allocatePaper($paperName, $bidderName, $bidderEmail);

            return $this->result;
        }
    }
?>