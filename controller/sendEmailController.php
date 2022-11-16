<?php
    require_once("../entity/sendEmailEntity.php");

    class sendEmailController{
        protected $entity;
        protected $result;

        function __construct(){
            $this->entity = new sendEmail();
            $this->result = array();
        }

        function getPaperNames(){
            $this->result = $this->entity->getPaperName();

            return $this->result;
        }

        function getEmails(){
            $this->result = $this->entity->getEmail();

            return $this->result;
        }
    }
?>