<?php
    class Account{
        protected $conn = NULL;
        protected $account_password;
        protected $account_profile;
        protected $account_fullName;
        protected $account_sex;
        protected $account_age;
        protected $account_contact;
        protected $account_email;
        protected $account_status;
        protected $dataArray;

        //Main constructor
        function __construct(){
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="314_project";

            //Initialize connection to database in PhpMyAdmin
            $conn = @new mysqli($servername, $username, $password, $database_name);

            $this->conn = $conn;
            $this->account_password = "";
            $this->account_profile = "";
            $this->account_fullName = "";
            $this->account_sex = "";
            $this->account_age = "";
            $this->account_contact = "";
            $this->account_email = "";
            $this->account_status = "active";
            $this->dataArray = array();
        }

        //Constructor for login
        function loginDetails($account_email, $account_password, $account_profile){
            $this->account_email = $account_email;
            $this->account_password = $account_password;
            $this->account_profile = $account_profile;
        }

        //Verify login
        function verifyLogin(){
            $validityCheck;
            $query = "SELECT * FROM account WHERE account_email=? AND account_password=? AND account_profile=? AND account_status='active';";
            $stmt = mysqli_stmt_init($this->conn);

            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_bind_param($stmt, "sss", $this->account_email, $this->account_password, $this->account_profile);
            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                $validityCheck = "invalidLogin";
            }
            else{
                $validityCheck = "validLogin";
            }

            return $validityCheck;
            mysqli_stmt_close($stmt);
        }
    }
?>