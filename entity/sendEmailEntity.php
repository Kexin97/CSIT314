<?php
    class sendEmail{
        protected $emailAddress;
        protected $paperID;
        protected $paperStatus;

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
            $this->emailAddress = "";
            $this->paperID = "";
            $this->paperStatus = "";
            $this->dataArray = array();
        }

        function setEmailAddress($emailAddress){
            $this->emailAddress = $emailAddress;
        }

        function getEmailAddress(){
            return $this->emailAddress;
        }

        function setPaperID($paperID){
            $this->paperID = $paperID;
        }

        function getPaperID(){
            return $this->paperID;
        }

        function setPaperStatus($paperStatus){
            $this->paperStatus = $paperStatus;
        }

        function getPaperStatus(){
            return $this->paperStatus;
        }

        function getPaperName(){
            $query = "SELECT * FROM paper";
            $stmt = mysqli_stmt_init($this->conn);
            $paperNames = array();
            $paperStatus = array();
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
                        if($Row["paper_status"] != NULL){
                            $paperNames[] = $Row["paper_name"];
                            $paperStatus[] = $Row["paper_status"];
                        }
                    }
                }
            }
            return array($paperNames, $paperStatus);
        }

        function getEmail(){
            $emailArray = array();
            $paperNameArray = array();
            $nameArray = array();
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
                        $emailArray[] = $Row["bidWinnerEmail"];
                        $paperNameArray[] = $Row["paperName"];
                        $nameArray[] = $Row["bidWinnerName"];
                    }
                }
            }
            return array($emailArray, $paperNameArray, $nameArray);
        }
    }
?>