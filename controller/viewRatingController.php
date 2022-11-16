<?php
    require_once("../entity/paperEntity.php");

    class ViewRatingController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Paper();
            $this->result = array();
        }

		public function reviewRatingList($paperName)
        {
            $this->result = $this->entity->reviewRating($paperName);

            return $this->result;
        }
		
		
    }
	
	
	
	
?>