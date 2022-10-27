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
		
		//view useraccount
		function viewUserAccount(){
            $SQLGet = "SELECT account.account_ID,account.account_email,account.account_password,account.account_fullName,account.account_sex,account.account_age,account.account_contact,account.account_status,account_profile.reviewer_type,account_profile.author_type,account_profile.conferenceChair_type,account_profile.userAdmin_type FROM `account` 
JOIN account_profile ON account.account_email=account_profile.account_email";
            $qGet = $this->conn->query($SQLGet);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    $dataArray[$i]["account_ID"] = $Row["account_ID"];
                    $dataArray[$i]["account_password"] = $Row["account_password"];
					$dataArray[$i]["reviewer_type"] = $Row["reviewer_type"];
					$dataArray[$i]["author_type"] = $Row["author_type"];
					$dataArray[$i]["conferenceChair_type"] = $Row["conferenceChair_type"];
					$dataArray[$i]["userAdmin_type"] = $Row["userAdmin_type"];
					$dataArray[$i]["account_fullName"] = $Row["account_fullName"];
					$dataArray[$i]["account_sex"] = $Row["account_sex"];
					$dataArray[$i]["account_age"] = $Row["account_age"];
					$dataArray[$i]["account_contact"] = $Row["account_contact"];
					$dataArray[$i]["account_email"] = $Row["account_email"];
					$dataArray[$i]["account_status"] = $Row["account_status"];

                    $i++;
                }
            }
            
            
            $this->dataArray = $dataArray;

            return $dataArray;
        }
		
		//view useraccount
		function viewUserAccount2(){
            $SQLGet = "SELECT * FROM account";
            $qGet = $this->conn->query($SQLGet);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    $dataArray[$i]["account_ID"] = $Row["account_ID"];
                    $dataArray[$i]["account_password"] = $Row["account_password"];
					$dataArray[$i]["account_fullName"] = $Row["account_fullName"];
					$dataArray[$i]["account_sex"] = $Row["account_sex"];
					$dataArray[$i]["account_age"] = $Row["account_age"];
					$dataArray[$i]["account_contact"] = $Row["account_contact"];
					$dataArray[$i]["account_email"] = $Row["account_email"];
					$dataArray[$i]["account_status"] = $Row["account_status"];

                    $i++;
                }
            }
            
            
            $this->dataArray = $dataArray;

            return $dataArray;
        }
		
		//view userprofile
		function viewUserProfile(){
            $SQLGet = "SELECT * FROM account_profile";
            $qGet = $this->conn->query($SQLGet);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    $dataArray[$i]["profile_ID"] = $Row["profile_ID"];
					$dataArray[$i]["account_email"] = $Row["account_email"];
                    $dataArray[$i]["reviewer_type"] = $Row["reviewer_type"];
					$dataArray[$i]["author_type"] = $Row["author_type"];
					$dataArray[$i]["conferenceChair_type"] = $Row["conferenceChair_type"];
					$dataArray[$i]["userAdmin_type"] = $Row["userAdmin_type"];

                    $i++;
                }
            }
            
            
            $this->dataArray = $dataArray;

            return $dataArray;
        }
    }
?>