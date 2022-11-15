<?php
    require_once("../Entity/paperEntity.php");

    class updatePaperController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new Paper();
            $this->result = array();
        }

        public function updatePaper($paper_ID, $paper_name, $paper_conference,$paper_author,$paper_filename){
            $this->result = $this->entity->updatePaperDetail($paper_ID, $paper_name, $paper_conference,$paper_author,$paper_filename);

            return $this->result;
        }
		
    }
?>