<?php
    class updateAllocatedPaperStatus{
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
            $validityCheck;
            $allocatedPaperID = array();
            $allocatedPaperName = array();
            $allocatedPaperStatus = array();
            $allocatedPaperAuthor = array();
            $allocatedPaperRating = array();
            $allocatedPaperReview = array();
            $allocatedPaperReviewerName = array();
            $allocatedPaperReviewerEmail = array();
            //Exit if failed to connect to DB

            $query1 = "SELECT * FROM paper";
            $stmt1 = mysqli_stmt_init($this->conn);
            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt1, $query1)){
                exit();
            } 

            mysqli_stmt_execute($stmt1);

            $results1 = mysqli_stmt_get_result($stmt1);   
            if(mysqli_num_rows($results1)){
                $qGet1 = $this->conn->query($query1);
                if(($res1 = $qGet1->num_rows) > 0){
                    while(($Row1 = $qGet1->fetch_assoc()) !== NULL){
                        $query = "SELECT * FROM bidwinner";
                        $stmt = mysqli_stmt_init($this->conn);
                        //Exit if failed to connect to DB
                        if(!mysqli_stmt_prepare($stmt, $query)){
                            exit();
                        } 

                        mysqli_stmt_execute($stmt);

                        $results = mysqli_stmt_get_result($stmt);   
                        if(mysqli_num_rows($results)){
                            $qGet = $this->conn->query($query);
                            if(($res = $qGet->num_rows) > 0){
                                while(($Row = $qGet->fetch_assoc()) !== NULL){
                                    if($Row["bidWinnerRating"] != NULL && $Row["bidWinnerReview"] != NULL && $Row["paperName"] == $Row1["paper_name"]){
                                        $allocatedPaperStatus[] = $Row1["paperStatus"];
                                        $allocatedPaperID[] = $Row1["paper_ID"];
                                        $allocatedPaperName[] = $Row1["paper_name"]; 
                                        $allocatedPaperAuthor[] = $Row1["author"];     
                                        $allocatedPaperRating[] = $Row["bidWinnerRating"]; 
                                        $allocatedPaperReview[] = $Row["bidWinnerReview"];  
                                        $allocatedPaperReviewerName[] = $Row["bidWinnerName"];
                                        $allocatedPaperReviewerEmail[] = $Row["bidWinnerEmail"];
                                    }
                                }
                            }
                        }               
                    }
                }
            }   
            return array($allocatedPaperID, $allocatedPaperName, $allocatedPaperStatus, 
                        $allocatedPaperAuthor, $allocatedPaperRating, $allocatedPaperReview,
                        $allocatedPaperReviewerName, $allocatedPaperReviewerEmail);
        }

        function updatePaperStatus($paperID, $status){
            $SQLInsert = "UPDATE paper SET " . "paperStatus = '$status'" . 
                        "WHERE paper_ID = '$paperID'";
            $qInsert = $this->conn->query($SQLInsert);
            if($qInsert == TRUE){   
                $data["statusResult"] = TRUE;
            }    
            else{
                $data["statusResult"] = FALSE;
                $data["statusErrorMsg"] = "failed to update paper status";
            }

            $this->data = $data;

            return $data;
            //return $status;
        }    
    }  
?>
