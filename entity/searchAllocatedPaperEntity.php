<?php
    class searchAllocatedPaper{
        protected $conn = NULL;
        protected $paperID;
        protected $paperName;
        protected $authorName;

        //Main constructor
        function __construct(){
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="314_project";
            //Initialize connection to database in PhpMyAdmin
            $conn = @new mysqli($servername, $username, $password, $database_name);

            $this->conn = $conn;
            $this->paperID = "";
            $this->paperName = "";
            $this->paperStatus = "";
            $this->reviewerName = "";
            $this->dataArray = array();
        }

        function setPaperID($paperID){
            $this->paperID = $paperID;
        }

        function getPaperID(){
            return $this->paperID;
        }

        function setPaperName($paperName){
            $this->paperName = $paperName;
        }

        function getPaperName(){
            return $this->paperName;
        }

        function setAuthorName($authorName){
            $this->authorName = $authorName;
        }

        function getAuthorName(){
            return $this->authorName;
        }
    }
?>