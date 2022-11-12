<?php
    class Paper{
        protected $conn = NULL;
        protected $paperID;
        protected $paperName;
        protected $paperStatus;
        protected $reviewerName;

        /*protected $reviewedStatus;
        protected $conference;
        protected $authorName;
        protected $paperRating;
        protected $paperReview;*/
        
        

        //Main constructor
        function __construct(){
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="314_project";
            //Initialize connection to database in PhpMyAdmin
            $conn = @new mysqli($servername, $username, $password, $database_name);
            //$this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database_name);

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

        function setPaperStatus($paperStatus){
            $this->paperStatus = $paperStatus;
        }

        function getPaperStatus(){
            return $this->paperStatus;
        }
        
        function setReviewerName($reviewerName){
            $this->reviewerName = $reviewerName;
        }

        function getReviewerName(){
            return $this->reviewerName;
        }

        /*function setConference($conference){
            $this->conference = $conference;
        }

        function getConference(){
            return $this->conference;
        }


        function setAuthorName($authorName){
            $this->authorName = $authorName;
        }

        function getAuthorName(){
            return $this->authorName;
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

        function setReviewedStatus($reviewedStatus){
            $this->reviewedStatus = $reviewedStatus;
        }

        function getReviewedStatus(){
            return $this->reviewedStatus;
        }*/

        function searchPaperNames(){
            $validityCheck;
            $query = "SELECT * FROM papers";
            $stmt = mysqli_stmt_init($this->conn);
            $paperNames = array();

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
                        if(empty($Row["reviewerName"])){
                            $paperNames[] = $Row["paperName"];
                        }
                    }
                }
            }

            return $paperNames;
        }

        function searchReviewerAccount(){
            $validityCheck;
            $validityCheck1;
            $query = "SELECT * FROM account_profile";
            $stmt = mysqli_stmt_init($this->conn);
            $reviewerAccounts = array();
            $reviewerNames = array();

            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                $validityCheck = "invalidLogin";
            }
            else{
                $validityCheck = "validLogin";
                $qGet = $this->conn->query($query);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        if($Row["reviewer_type"] == "reviewer"){
                            $reviewerAccounts[] = $Row["account_email"];
                        }
                    }
                }
            }

            $query = "SELECT * FROM `account`";
            $stmt = mysqli_stmt_init($this->conn);
            
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                echo "<script>console.log('Failed, error');</script>";
            }
            else{
                $qGet = $this->conn->query($query);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        for($z=0; $z<count($reviewerAccounts);$z++){
                            if($Row["account_email"] == $reviewerAccounts[$z] && $Row["account_status"] != "inactive"){
                                $reviewerNames[] = $Row["account_fullName"];
                            }
                        }
                    }
                }
            }
            return $reviewerNames;
        }

        function searchReviewerEmail(){
            $validityCheck;
            $validityCheck1;
            $query = "SELECT * FROM account_profile";
            $stmt = mysqli_stmt_init($this->conn);
            $reviewerAccounts = array();
            $reviewerEmails = array();

            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                $validityCheck = "invalidLogin";
            }
            else{
                $validityCheck = "validLogin";
                $qGet = $this->conn->query($query);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        if($Row["reviewer_type"] == "reviewer"){
                            $reviewerAccounts[] = $Row["account_email"];
                        }
                    }
                }
            }

            $query = "SELECT * FROM `account`";
            $stmt = mysqli_stmt_init($this->conn);
            
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                echo "<script>console.log('Failed, error');</script>";
            }
            else{
                $qGet = $this->conn->query($query);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        for($z=0; $z<count($reviewerAccounts);$z++){
                            if($Row["account_email"] == $reviewerAccounts[$z] && $Row["account_status"] != "inactive"){
                                $reviewerEmails[] = $Row["account_email"];
                            }
                        }
                    }
                }
            }
            return $reviewerEmails;
        }

        function allocatePaper($paperName, $reviewerName, $reviewerEmail, $numOfAllocatedPapers){
            $validityCheck;
            $query = "UPDATE `papers` SET reviewerName='" . $reviewerName . "' WHERE paperName='" . $paperName . "'";
            $stmt = mysqli_stmt_init($this->conn);
            $resultMessage;
            $resultMessage1;
            $resultMessage2;
            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_affected_rows($this->conn);

            if($results == 1){
                $resultMessage = "Successfully allocated paper with reviewer name";
            }
            else{
                $resultMessage = "failed to allocate paper with reviewer name";
            }

            $query = "UPDATE `account_profile` SET numOfAllocatedPapers='" . $numOfAllocatedPapers . "' WHERE account_email='" . $reviewerEmail . "'";
            $stmt = mysqli_stmt_init($this->conn);
            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_affected_rows($this->conn);

            if($results == 1){
                $resultMessage1 = "successfully updated reviewer allocated paper count";
            }
            else{
                $resultMessage1 = "failed to update reviewer allocated paper count";
            }

            $resultMessage2 = $resultMessage . " AND " . $resultMessage1;
            return $resultMessage2 ;
        }

        function searchNumOfAllocatedPapers(){
            $validityCheck;
            $query = "SELECT * FROM `account`";
            $stmt = mysqli_stmt_init($this->conn);
            $reviewerAccount = array();
            $reviewNum = array();
            
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                echo "<script>console.log('Failed, error');</script>";
            }
            else{
                $qGet = $this->conn->query($query);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        if($Row["account_status"] != "inactive"){
                            $reviewerAccount[] = $Row["account_email"];
                        }                        
                    }
                }
            }

            $query = "SELECT * FROM account_profile";
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
                        for($x=0; $x< count($reviewerAccount); $x++){
                            if($Row["account_email"] == $reviewerAccount[$x] && $Row["reviewer_type"] == "reviewer"){
                                if($Row["numOfAllocatedPapers"] == ""){
                                    $reviewNum[] = 0;
                                }
                                else{
                                    $reviewNum[] = $Row["numOfAllocatedPapers"];
                                }
                            }
                        }
                    }
                }
            }
            return $reviewNum;
        }
    }
?>