<?php
    class AddProfile{
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

        function setEmailID($account_email){
            $this->account_email = $account_email;
        }

        function getEmailID(){
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

        public function addUserProfile($account_email, $profile_type){
            $this->account_email = $account_email;
            $this->profile_type = $profile_type;
            try
            {   
				if(empty($this->profile_type) || empty($this->account_email)){	
					$data["result"] = FALSE;
					$data["errorMsg"] = "Please fill in all fields";
					
					$this->data = $data;
					return $this->data;
				}
                $SQLCheckP = "SELECT * FROM account WHERE account_email = '$this->account_email'";
                $qCheckP = $this->conn->query($SQLCheckP);
                if(($res = $qCheckP->num_rows) == 0){  
                    $data["result"] = FALSE;
                    $data["errorMsg"] = "Email does not exist";
                    $this->data = $data;

                    return $data;
                }
                else{
                    $SQLCheckP = "SELECT * FROM account_profile WHERE account_email = '$this->account_email'";
                    $qCheckP = $this->conn->query($SQLCheckP);
                    if(($res = $qCheckP->num_rows) == 0){   
                        $SQLInsert = "INSERT INTO account_profile(account_email, " . $this->profile_type . "_type) " . 
                                    "VALUES ('$this->account_email', '$this->profile_type')";
                        $qInsert = $this->conn->query($SQLInsert);
                        if($qInsert == TRUE){   
                            $data["result"] = TRUE;
                        }    
                        else{
                            $data["result"] = FALSE;
                            $data["errorMsg"] = "Cannot create: " . $profile_type;
                        }

                        $this->data = $data;

                        return $data;
                    }
                    else{
                        //echo "<script>alert('". $this->profile_type.'_type = ' . $this->profile_type .'_type' ."')</script>";
                        $tempProfile = $this->profile_type.'_type';
                        $SQLCheckP = "SELECT * FROM account_profile WHERE account_email = '$this->account_email' AND $tempProfile = '$this->profile_type'";
                        $qCheckP = $this->conn->query($SQLCheckP);
                        if(($res = $qCheckP->num_rows) == 0){   
                            $SQLInsert = "UPDATE account_profile SET " . $this->profile_type . "_type = '$this->profile_type'" . 
                                    " WHERE account_email = '$this->account_email'";
                            $qInsert = $this->conn->query($SQLInsert);
                            if($qInsert == TRUE){   
                                $data["result"] = TRUE;
                            }    
                            else{
                                $data["result"] = FALSE;
                                $data["errorMsg"] = "Cannot create: " . $profile_type;
                            }
                            $this->data = $data;

                            return $data;
                        }
                        else{
                            $data["result"] = FALSE;
                            $data["errorMsg"] = "Profile type already exists: " . $profile_type;

                            return $data;
                        }
                        
                    }
                }
            }
            catch(mysqli_sql_exception $e){
                //To ensure that the instance variables is empty if there is an error detected
                $this->profile_ID = "";
                $this->account_email = "";
                $this->profile_type = "";
                $this->checkProfile = "";
            }
        }
    }
?>