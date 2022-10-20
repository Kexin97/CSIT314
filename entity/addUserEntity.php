<?php
    class AddUser{
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
            $this->account_fullName = "";
            $this->account_sex = "";
            $this->account_age = "";
            $this->account_contact = "";
            $this->account_email = "";
            $this->account_status = "active";
            $this->dataArray = array();
        }

        public function addUser($account_password, $account_fullName, $account_sex, 
                                $account_age, $account_contact, $account_email){
            $this->account_password = $account_password;
            $this->account_fullName = $account_fullName;
            $this->account_sex = $account_sex;
            $this->account_age = $account_age;
            $this->account_contact = $account_contact;
            $this->account_email = $account_email;
            $this->account_status = "active";
            try
            {   
				if(empty($this->account_password)||empty($this->account_fullName)||
                    empty($this->account_sex)||empty($this->account_age)||empty($this->account_contact)||
                    empty($this->account_email)){	
					$data["result"] = FALSE;
					$data["errorMsg"] = "Please fill in all fields";
					
					$this->data = $data;
					return $this->data;
				}	
                //To check if the username or phone exists or not
                $SQLCheckP = "SELECT * FROM account WHERE account_email = '$this->account_email' OR account_contact = '$this->account_contact'";
                $qCheckP = $this->conn->query($SQLCheckP);
                if(($res = $qCheckP->num_rows) == 0)
                {   
                    //To insert the name, desc, and status first
                    $SQLInsert = "INSERT INTO account(account_password, account_fullName, account_sex, 
                                            account_age, account_contact, account_email, account_status) " . 
                                 "VALUES ('$this->account_password', '$this->account_fullName', '$this->account_sex', 
                                 '$this->account_age', '$this->account_contact', '$this->account_email', '$this->account_status')";
                    $qInsert = $this->conn->query($SQLInsert);
                    if($qInsert == TRUE)
                    {   
                        $data["result"] = TRUE;
                    }    
                    else
                    {
                        $data["result"] = FALSE;
                        $data["errorMsg"] = "Cannot create";
                    }

                    $this->data = $data;

                    return $data;
                }
                else
                {
                    $data["result"] = FALSE;
                    $data["errorMsg"] = "Email or contact number already used";

                    return $data;
                }
            }
            catch(mysqli_sql_exception $e)
            {
                //To ensure that the instance variables is empty if there is an error detected
                $this->usrnm = "";
                $this->pswd = "";
                $this->phone = "";
				$this->name = "";
				$this->profile = "";
				$this->status = "Active";
            }
        }
    }
?>