<?php
    require_once("../Entity/paperEntity.php");

    class addPaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Paper();
            $this->result = array();
        }

        public function profileDetails($paper_name, $paper_author, $paper_filename){
            $this->result = $this->entity->addPaper($paper_name, $paper_author, $paper_filename);

            return $this->result;
        }
    }
?>