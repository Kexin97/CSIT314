<?php
    class AccountProfile{
        protected $conn = NULL;
        protected $profile_ID;
        protected $account_email;
        protected $profile_type;
        protected $checkProfile;
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
            $this->profile_ID = "";
            $this->account_email = "";
            $this->profile_type = "";
            $this->checkProfile = "";
            $this->dataArray = array();
        }

        function setProfileID($profile_ID){
            $this->profile_ID = $profile_ID;
        }

        function getProfileID(){
            return $this->profile_ID;
        }

        function setAccountEmail($account_email){
            $this->account_email = $account_email;
        }

        function getAccountEmail(){
            return $this->account_email;
        } 

        function setProfileType($profile_type){
            $this->profile_type = $profile_type;
        }

        function getProfileType(){
            return $this->profile_type;
        }

        function setCheckProfile($checkProfile){
            $this->checkProfile = $checkProfile;
        }

        function getCheckProfile(){
            return $this->checkProfile;
        }

        function checkProfileType($account_email, $checkProfile){
            $validityCheck;

            $query = "SELECT * FROM account_profile";

            $qGet = $this->conn->query($query);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    if($Row["account_email"] == $account_email){
                        if($Row["reviewer_type"] == $checkProfile){
                            $this->setProfileType($Row["reviewer_type"]);
                            break;
                        }
                        else if($Row["author_type"] == $checkProfile){
                            $this->setProfileType($Row["author_type"]);
                            break;
                        }
                        else if($Row["conferenceChair_type"] == $checkProfile){
                            $this->setProfileType($Row["conferenceChair_type"]);
                            break;
                        }
                        else if($Row["userAdmin_type"] == $checkProfile){
                            $this->setProfileType($Row["userAdmin_type"]);
                            break;
                        }
                        else{
                            $this->setProfileType("Wrong profile.");
                        }
                    }
                    else{
                        $this->setProfileType('No profile type for this account found.');
                    }
                    $i++;
                }
            }
            else{
                $this->setProfileType('No profile type found');
            }   
            return $this->getProfileType();
        }    
    }
?>