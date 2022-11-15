<?php
    class viewAllocatedPaper{
        protected $conn = NULL;
        protected $paperID;
        protected $paperName;
        protected $authorName;
        protected $conferenceChairName;
        protected $paperStatus;
        protected $paperRating;
        protected $paperReview;

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
            $this->authorName = "";
            $this->conferenceChairName = "";
            $this->paperStatus = "";
            $this->paperRating = "";
            $this->paperReview = "";
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

        function setConferenceChairName($conferenceChairName){
            $this->conferenceChairName = $conferenceChairName;
        }

        function getConferenceChairName(){
            return $this->conferenceChairName;
        }

        function setPaperStatus($paperStatus){
            $this->paperStatus = $paperStatus;
        }

        function getPaperStatus(){
            return $this->paperStatus;
        }

        function setPaperRating($paperRating){
            $this->paperRating = $paperRating;
        }

        function getPaperRating(){
            return $this->paperRating;
        }

        function setPaperReview($paperReview){
            $this->paperReview = $paperReview;
        }

        function getPaperReview(){
            return $this->paperReview;
        }

        function viewAllPaperDetails(){
            
        }
    }
?>
