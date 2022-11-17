<?php
    class allocatePaper{
        protected $conn = NULL;
        protected $biddingID;
        protected $paperName;
        protected $paperStatus;
        protected $reviewerName;

        //Main constructor
        function __construct(){
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="314_project";
            //Initialize connection to database in PhpMyAdmin
            $conn = @new mysqli($servername, $username, $password, $database_name);

            $this->conn = $conn;
            $this->biddingID = "";
            $this->paperName = "";
            $this->paperStatus = "";
            $this->reviewerName = "";
            $this->dataArray = array();
        }

        function setbiddingID($biddingID){
            $this->biddingID = $biddingID;
        }

        function getbiddingID(){
            return $this->biddingID;
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

        function searchPaperNames(){
            $validityCheck;
            $query = "SELECT * FROM papersbid WHERE allocationStatus = ''";
            $stmt = mysqli_stmt_init($this->conn);
            $paperNames = array();
            $returnResults;
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
                        if(!in_array($Row["paperName"], $paperNames)){
                            $paperNames[] = $Row["paperName"];
                        }
                    }
                }
            }
            if(count($paperNames) == 0){
                $paperNames[] = "The are no papers to allocate";
            }
            return $paperNames;
        }

        function bidReviewerNames(){
            $validityCheck;
            $query = "SELECT * FROM papersbid";
            $stmt = mysqli_stmt_init($this->conn);
            $paperBidded = array();
            $reviewerNames = array();
            $reviewerEmails = array();
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
                        if($Row["allocationStatus"] != "allocated"){
                            $paperBidded[] = $Row["paperName"];
                            $reviewerNames[] = $Row["reviewerName"];
                            $reviewerEmails[] = $Row["account_email"];
                        }
                    }
                }
            }
            return array($paperBidded, $reviewerNames, $reviewerEmails);
        }

        function bidReviewerWorkload(){
            $validityCheck;
            $query = "SELECT * FROM account_profile";
            $stmt = mysqli_stmt_init($this->conn);
            $preferredLoad = array();
            $reviewerEmails = array();
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
                        $preferredLoad[] = $Row["maxReviewNumber"];
                        $reviewerEmails[] = $Row["account_email"];
                    }
                }
            }
            return array($preferredLoad, $reviewerEmails);
        }

        function allocatePaper($paperName, $bidderName, $bidderEmail){
            $query = "INSERT INTO bidwinner(paperName, bidWinnerName, bidWinnerEmail, 
                                bidWinnerRating, bidWinnerReview)" .
                                "VALUES ('$paperName', '$bidderName', '$bidderEmail',
                                '', '')";
            $qInsert = $this->conn->query($query);
            if($qInsert == TRUE){   
                $data["allocationResult"] = TRUE;
            }    
            else{
                $data["allocationResult"] = FALSE;
                $data["allocationErrorMsg"] = "Failed to allocate paper";
            }

            

            $SQLInsert = "UPDATE papersbid SET " . "allocationStatus = 'allocated'" . 
                        "WHERE account_email = '$bidderEmail' AND paperName = '$paperName'";
            $qInsert = $this->conn->query($SQLInsert);
            if($qInsert == TRUE){   
                $data["statusResult"] = TRUE;
            }    
            else{
                $data["statusResult"] = FALSE;
                $data["statusErrorMsg"] = "failed to update allocation status";
            }

            $this->data = $data;

            return $data;
        }

        function getBidderCurrentWorkload(){
            $validityCheck;
            $query = "SELECT * FROM bidwinner";
            $stmt = mysqli_stmt_init($this->conn);
            $currentWorkLoad = array();
            
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
                        $currentWorkLoad[] = $Row["bidWinnerEmail"];
                    }
                }
            }

            $totalOccurences = array_count_values($currentWorkLoad);
            return array($currentWorkLoad);
        }

        function autoAllocatePapers($paperName){
            $SQLSelect = "SELECT * FROM papersbid WHERE allocationStatus!='allocated'";
            $stmt = mysqli_stmt_init($this->conn);
            $currentWorkLoad = array();
            
            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $SQLSelect)){
                exit();
            } 
            
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($results)){
            $qGet = $this->conn->query($SQLSelect);
                if(($res = $qGet->num_rows) > 0){
                    while(($Row = $qGet->fetch_assoc()) !== NULL){
                        if($Row['paperName'] == $paperName){
                            $SQLUpdate = "UPDATE papersbid SET " . "allocationStatus = 'allocated' WHERE paperName='$paperName'";
                            $qUpdate = $this->conn->query($SQLUpdate);
                            if($qUpdate == TRUE){   
                                $data["statusResult"] = TRUE;
                            }    
                            else{
                                $data["statusResult"] = FALSE;
                                $data["statusErrorMsg"] = "failed to update allocation status";
                            }
                            $query = "INSERT INTO bidwinner(paperName, bidWinnerName, bidWinnerEmail, 
                                    bidWinnerRating, bidWinnerReview)" .
                                    "VALUES ('$paperName', '". $Row['reviewerName'] ."', '" . $Row['account_email'] ."',
                                    '', '')";
                            $qInsert = $this->conn->query($query);
                            if($qInsert == TRUE){   
                                $data["allocationResult"] = TRUE;
                            }    
                            else{
                                $data["allocationResult"] = FALSE;
                                $data["allocationErrorMsg"] = "Failed to allocate paper";
                            }
                        }
                    }
                }
            }
            $this->data = $data;
            return $data;
        }
    }
?>