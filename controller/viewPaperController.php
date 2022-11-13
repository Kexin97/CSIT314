<?php
    require_once("../entity/paperEntity.php");

    class ViewPaperController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Paper();
            $this->result = array();
        }

		public function viewPaper()
        {
            $this->result = $this->entity->viewPaperList();

            return $this->result;
        }
		
		public function viewPaperDetails($paper_ID)
        {
            $this->result = $this->entity->viewPaperDetail($paper_ID);

            return $this->result;
        }
		
    }
	
	
	
	
?>