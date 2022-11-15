<?php
    class Paper{
        protected $conn = NULL;
        protected $paper_ID;
        protected $paper_name;
        protected $conference;
        protected $author;
        protected $paper_file;
        protected $data;
		
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
            $this->paper_ID = "";
			$this->paper_name = "";
			$this->conference = "";
			$this->author = "";
			$this->paper_file = "";
			$this->data = array();
			
        }
		
        function getPaperID(){
            return $this->paper_ID;
        }

		//add new paper
        public function addPaper($paper_name, $paper_conference, $paper_author, $paper_filename){
            $this->paper_name = $paper_name;
            $this->paper_conference = $paper_conference;
			$this->paper_author = $paper_author;
			$this->paper_filename = $paper_filename;
			
			try
            {   
				
				if(empty($this->paper_name) || empty($this->paper_conference) || empty($this->paper_filename)){	
					$data["result"] = FALSE;
					$data["errorMsg"] = "Please fill in all fields";
					
					$this->data = $data;
					return $this->data;
				}
				
				//make the paper name unique 
				$SQLCheckP = "SELECT * FROM paper WHERE paper_name = '$this->paper_name'";
                $qCheckP = $this->conn->query($SQLCheckP);
				if(($res = $qCheckP->num_rows) > 0)
				{
					$data["result"] = FALSE;
					$data["errorMsg"] = "Paper name exist";
					
					$this->data = $data;
					return $this->data;
				}
				else{
					//file dir
					$targetDir = "../databaseFiles/paper/";
					$folder = $targetDir . $this->paper_name.".pdf";
					$tmp_file = $_FILES["author_addPaperUploadFile"]["tmp_name"];
					
					$paper_ex = pathinfo($paper_filename, PATHINFO_EXTENSION);
					$paper_ex_lc = strtolower($paper_ex);
		
					$allowed_exs = array("pdf"); 
		
					if (in_array($paper_ex_lc, $allowed_exs)) {
						if(move_uploaded_file($tmp_file, $folder)){
						
							//insert to database when everything is okay
							$SQLInsert = "INSERT INTO paper(paper_name, conference, author, paper_file) " .
										"VALUES ('$this->paper_name', '$this->paper_conference', '$this->paper_author', '$folder')";
							$qInsert = $this->conn->query($SQLInsert);
							
							if($qInsert == TRUE){   
								$data["result"] = TRUE;
							}    
							else{
								$data["result"] = FALSE;
								$data["errorMsg"] = "Cannot create paper " ;
								
							}
							
							
						}
						else{
							$data["result"] = FALSE;
							$data["errorMsg"] = "Paper upload failed " ;
						}
					}
					else{
						$data["result"] = FALSE;
						$data["errorMsg"] = "Only pdf paper is allowed" ;
					}
					
					$this->data = $data;
					return $this->data;
				
				}
				
			}
			catch(mysqli_sql_exception $e){
                //To ensure that the instance variables is empty if there is an error detected
                $this->paper_name = "";
                $this->paper_conference = "";
				$this->paper_author = "";
            }
			
			
		}
		
		public function viewPaperList($author){
			$this->author = $author;
			
			$SQLGet = "SELECT * FROM `paper` WHERE author LIKE '%$this->author%'";
            $qGet = $this->conn->query($SQLGet);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    $data[$i]["paper_ID"] = $Row["paper_ID"];
                    $data[$i]["paper_name"] = $Row["paper_name"];
					$data[$i]["conference"] = $Row["conference"];
					$data[$i]["author"] = $Row["author"];
					$data[$i]["paper_file"] = $Row["paper_file"];
					$data[$i]["result"] = TRUE;

                    $i++;
                }
            }
			else{
				$data[0]["result"] = FALSE;
				$data[0]["errorMsg"] = "No paper is submitted" ;
			}
            
            
            $this->data = $data;

            return $data;
		}
		
		public function viewPaperDetail($paper_ID){
			$this->paper_ID = $paper_ID;
			
			$SQLGet = "SELECT * FROM `paper` WHERE paper_ID='$this->paper_ID'";
            $qGet = $this->conn->query($SQLGet);

            if(($res = $qGet->num_rows) > 0)
            {
                $i = 0;

                while(($Row = $qGet->fetch_assoc()) !== NULL)
                {
                    $data[$i]["paper_ID"] = $Row["paper_ID"];
                    $data[$i]["paper_name"] = $Row["paper_name"];
					$data[$i]["conference"] = $Row["conference"];
					$data[$i]["author"] = $Row["author"];
					$data[$i]["paper_file"] = $Row["paper_file"];
					

                    $i++;
                }
            }
            
            
            $this->data = $data;

            return $data;
		}

		public function updatePaperDetail($paper_ID, $paper_name, $paper_conference,$paper_author,$paper_filename){
			$this->paper_ID = $paper_ID;
			$this->paper_name = $paper_name;
            $this->paper_conference = $paper_conference;
			$this->paper_author = $paper_author;
			$this->paper_filename = $paper_filename;
			
			try
            {   
				
				if(empty($this->paper_name) || empty($this->paper_conference)){	
					$data["result"] = FALSE;
					$data["errorMsg"] = "Please fill in all fields";
					
					$this->data = $data;
					return $this->data;
				}
				
				if(empty($this->paper_filename)){
					$SQLUpdate = "UPDATE paper 
										SET paper_name = '$this->paper_name',
											conference = '$this->paper_conference',
											author = '$this->paper_author'
										WHERE paper_ID = '$this->paper_ID'";
					$qUpdate = $this->conn->query($SQLUpdate);
					
					if($qUpdate == TRUE){   
						$data["result"] = TRUE;
					}    
					else{
						$data["result"] = FALSE;
						$data["errorMsg"] = "1st update " ;
					}
							
					$this->data = $data;
					return $this->data;
				}
				else{
					//file dir
					$targetDir = "../databaseFiles/paper/";
					$folder = $targetDir . $this->paper_name.".pdf";
					$tmp_file = $_FILES["author_updatePaperUploadFile"]["tmp_name"];
					
					$paper_ex = pathinfo($paper_filename, PATHINFO_EXTENSION);
					$paper_ex_lc = strtolower($paper_ex);
		
					$allowed_exs = array("pdf"); 
		
					if (in_array($paper_ex_lc, $allowed_exs)) {
						if(move_uploaded_file($tmp_file, $folder)){
						
							//update database when everything is okay
							$SQLUpdate = "UPDATE paper 
										SET paper_name = '$this->paper_name',
											conference = '$this->paper_conference',
											author = '$this->paper_author',
											paper_file = '$folder'
										WHERE paper_ID = '$this->paper_ID'";
							$qUpdate = $this->conn->query($SQLUpdate);
							
							if($qUpdate == TRUE){   
								$data["result"] = TRUE;
							}    
							else{
								$data["result"] = FALSE;
								$data["errorMsg"] = "Cannot create paper " ;
							}
						}
						else{
							$data["result"] = FALSE;
							$data["errorMsg"] = "Paper upload failed " ;
						}
					}
					else{
						$data["result"] = FALSE;
						$data["errorMsg"] = "Only pdf paper is allowed" ;
					}
					
					$this->data = $data;
					return $this->data;
				
				}
				
			}
			catch(mysqli_sql_exception $e){
                //To ensure that the instance variables is empty if there is an error detected
                $this->paper_name = "";
                $this->paper_conference = "";
				$this->paper_author = "";
            }
		}
		
		public function deletePaperDetail($paper_ID){
			$this->paper_ID = $paper_ID;
			
			$SQLDelete = "DELETE FROM `paper` WHERE paper_ID='$this->paper_ID'";
            $qDelete = $this->conn->query($SQLDelete);

            if($qDelete==TRUE)
            {
                $data["result"] = TRUE;
            }else
			{
				$data["result"] = FALSE;
				$data["errorMsg"] = "Paper delete failed " ;
			}
            
            $this->data = $data;
            return $data;
		}
		
		
	}
?>