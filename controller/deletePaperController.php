<?php
    require_once("../entity/paperEntity.php");

    class deletePaperController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Paper();
            $this->result = array();
        }

		public function deletePaper($paper_ID)
        {
            $this->result = $this->entity->deletePaperDetail($paper_ID);

            return $this->result;
        }
    }
	
	
	
	
?>