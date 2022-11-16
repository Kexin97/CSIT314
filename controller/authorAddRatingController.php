<?php
    require_once("../entity/paperEntity.php");

    class authorAddRatingController
    {
        protected $entity;
        protected $result;

		
        function __construct()
        {
            $this->entity = new Paper();
            $this->result = array();
        }

		public function authorAddRating($bid_ID, $author_rate)
        {
            $this->result = $this->entity->authorAddRate($bid_ID, $author_rate);

            return $this->result;
        }
		
    }
	
	
	
	
?>