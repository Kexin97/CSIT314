<?php
    class Account{
        protected $conn = NULL;
        protected $account_ID;
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
            //$this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database_name);

            $this->conn = $conn;
            $this->account_ID = "";
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

        function setEmail($account_email){
            $this->account_email = $account_email;
        }

        function getEmail(){
            return $this->account_email;
        }

        function setPassword($account_password){
            $this->account_password = $account_password;
        }

        function getPassword(){
            return $this->account_password;
        }

        function setProfile($account_profile){
            $this->account_profile = $account_profile;
        }

        function getProfile(){
            return $this->account_profile;
        }

        function setAccountID($account_ID){
            $this->account_ID = $account_ID;
        }

        function getAccountID(){
            return $this->account_ID;
        } 

        function setFullName($account_fullName){
            $this->account_fullName = $account_fullName;
        }

        function getFullName(){
            return $this->account_fullName;
        }

        function setSex($account_sex){
            $this->account_sex = $account_sex;
        }

        function getSex(){
            return $this->account_sex;
        }

        function setAge($account_age){
            $this->account_age = $account_age;
        }

        function getAge(){
            return $this->account_age;
        }

        function setContact($account_contact){
            $this->account_contact = $account_contact;
        }

        function getContact(){
            return $this->account_contact;
        } 

        //Verify login
        function verifyLogin(){
            $validityCheck;
            $query = "SELECT * FROM account WHERE account_email=? AND account_password=? AND account_status='active';";
            $stmt = mysqli_stmt_init($this->conn);

            //Exit if failed to connect to DB
            if(!mysqli_stmt_prepare($stmt, $query)){
                exit();
            } 

            mysqli_stmt_bind_param($stmt, "ss", $this->account_email, $this->account_password);
            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            if(!mysqli_num_rows($results)){
                $validityCheck = "invalidLogin";
            }
            else{
                $validityCheck = "validLogin";
                $query1 = "SELECT * FROM account";
                $qGet1 = $this->conn->query($query1);
                
                if(($res = $qGet1->num_rows) > 0){
                    while(($Row = $qGet1->fetch_assoc()) !== NULL){
                        if($Row["account_email"] == $this->account_email){
                            $this->setEmail($Row["account_email"]);
                            $this->setPassword($Row["account_password"]);
                            $this->setAccountID($Row["account_ID"]);
                            $this->setFullName($Row["account_fullName"]);
                            $this->setSex($Row["account_sex"]);
                            $this->setAge($Row["account_age"]);
                            $this->setContact($Row["account_contact"]);
                        }
                    }
                }
            }
            return $validityCheck;
        }
    }
?>