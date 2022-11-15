<?php
    class viewAllocatedPaper{
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
            $this->authorName = "";
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

        function viewAllocatedPapers(){
            $validityCheck;
            $query = "SELECT * FROM papersbid";
            $stmt = mysqli_stmt_init($this->conn);
            $allocatedPaperID = array();
            $allocatedPaperName = array();
            $allocatedPaperAuthor = array();
            $allocatedPaperReviewer = array();
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
                        if($Row["allocationStatus"] == "allocated"){ 
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
                                        if($Row1["paper_name"] == $Row["paperName"]){
                                            $allocatedPaperAuthor[] = $Row1["author"];
                                            $allocatedPaperID[] = $Row["paperID"];
                                            $allocatedPaperName[] = $Row["paperName"]; 
                                            $allocatedPaperReviewer[] = $Row["reviewerName"];
                                        }
                                    }
                                }
                            }   
                        }
                    }
                }
            }
            return array($allocatedPaperID, $allocatedPaperName, $allocatedPaperAuthor, $allocatedPaperReviewer);
        }
    }
?>