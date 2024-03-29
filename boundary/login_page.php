<!DOCTYPE html>
<html lang="en">
    <!-- Javascript for tabs -->
    <script>
        function openSection(evt, userType) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(userType).style.display = "block";
            evt.currentTarget.className += " active";
        }
        
        function setCookie(nameCookie, valueCookie, timeCookie){
            const date = new Date();
            date.setTime(date.getTime() +  (timeCookie * 24 * 60 * 60 * 1000));
            let expires = "expires=" + date.toUTCString();
            document.cookie = `${nameCookie}=${valueCookie}; ${expires}; path=/`
        }

        function deleteCookie(nameOfCookie){
            setCookie(nameOfCookie, null, null);
        }

        function getCookie(name){
            const cDecoded = decodeURIComponent(document.cookie);
            const cArray = cDecoded.split("; ");
            let result = null;
            
            cArray.forEach(element => {
                if(element.indexOf(name) == 0){
                    result = element.substring(name.length + 1)
                }
            })
            return result;
        }

        function signOut(){
            document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
            var confirmMessage = "Are you sure you want to sign out?";
            if (confirm(confirmMessage) == true) {
                window.location.replace("../boundary/login_page.php");
            }
        }
        console.log(document.cookie);
    </script>
    <?php
        //$_POST['userEmail'], $_POST['userPassword'],
		session_start();
        require '../controller/accountController.php';
        require '../controller/accountProfileController.php';
        if (isset($_POST['user_login_btn'])){
			$_SESSION["reviewer_email"] = $_POST['userEmail'];	//zk session var
            $lc = new accountController();
            $vl = $lc->validateAccountDetails($_POST['userEmail'], $_POST['userPassword'], "user");
            $selectOption;
            if($_POST['userProfileType'] != NULL || $_POST['userProfileType'] != ""){
                $selectOption = $_POST['userProfileType'];
            } 
            else{
                $selectOption = "none";
            }
            if($vl[0] == 'validLogin') {
                echo "<script>setCookie('accountEmail', '". $vl[1] . "', 7);</script>";
                echo "<script>setCookie('accountPassword', '". $vl[2] . "', 7);</script>";
                echo "<script>setCookie('accountAccountID', '". $vl[3] . "', 7);</script>";
                echo "<script>setCookie('accountFullName', '". $vl[4] . "', 7);</script>";
                echo "<script>setCookie('accountSex', '". $vl[5] . "', 7);</script>";
                echo "<script>setCookie('accountAge', '". $vl[6] . "', 7);</script>";
                echo "<script>setCookie('accountContact', '". $vl[7] . "', 7);</script>";

                $profileType = new accountProfileController();
                $loginType = $profileType->validateAccountType($vl[1], $selectOption);    
                checkType($loginType[1]);            
            }

            else if($vl[0] == 'invalidLogin') {
                echo '<script> alert("user Invalid login"); </script>';
            }

            else {
                echo '<script> alert("user Missing fields!"); </script>';
            }
        }

        if (isset($_POST['employee_login_btn'])){
            $lc = new accountController();
            $vl = $lc->validateAccountDetails($_POST['employeeEmail'], $_POST['employeePassword'], "admin");
            $selectOption;
            if($_POST['adminProfileType'] != NULL || $_POST['adminProfileType'] != ""){
                $selectOption = $_POST['adminProfileType'];
            } 
            else{
                $selectOption = "none";
            }
            if($vl[0] == 'validLogin') {
                echo "<script>setCookie('accountEmail', '". $vl[1] . "', 7);</script>";
                echo "<script>setCookie('accountPassword', '". $vl[2] . "', 7);</script>";
                echo "<script>setCookie('accountAccountID', '". $vl[3] . "', 7);</script>";
                echo "<script>setCookie('accountFullName', '". $vl[4] . "', 7);</script>";
                echo "<script>setCookie('accountSex', '". $vl[5] . "', 7);</script>";
                echo "<script>setCookie('accountAge', '". $vl[6] . "', 7);</script>";
                echo "<script>setCookie('accountContact', '". $vl[7] . "', 7);</script>";

                $profileType = new accountProfileController();
                $loginType = $profileType->validateAccountType($vl[1], $selectOption); 
                checkType($loginType[1]);  
            }

            else if($vl[0] == 'invalidLogin') {
                echo '<script> alert("Invalid login"); </script>';
            }

            else {
                echo '<script> alert("Missing fields!"); </script>';
            }
        }

        function checkType($loginType){
            echo "<script>setCookie('accountProfile', '". $loginType . "', 7);</script>";
            if($loginType == "userAdmin"){
                $new_url = "../boundary/admin_addUserPage.php";
                echo '<script>window.location.href="'.$new_url.'";</script>';
            }
            else if ($loginType == "conferenceChair"){
                $new_url = "../boundary/conferenceChair_allocatePaperPage.php";
                echo '<script>window.location.href="'.$new_url.'";</script>';
            }
            else if ($loginType == "author"){
                $new_url = "../boundary/author_addPaperPage.php";
                echo '<script>window.location.href="'.$new_url.'";</script>';
            }
            else if ($loginType == "reviewer"){
                $new_url = "../boundary/reviewer_profile.php";
                echo '<script>window.location.href="'.$new_url.'";</script>';
            }
            else{
                echo'<script>alert("Account with this profile type does not exist");</script>';
            }
        }
        //
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <title>Login</title>
        <style>
            select {
                /*Clear select style*/
                appearance: none;
                -moz-appearance: none;
                -webkit-appearance: none;
                -ms-appearance: none;
                width: 25px;
                margin-right: 10px;
                padding-top: 3px;
                padding-bottom: 3px;
                /*Style arrow css*/
                background: url("../img/arrow.svg") no-repeat scroll right #fff;
                font-family: 'Poppins', serif;
                font-size: 16px;
                color: #666;
                outline: none;
            }
        </style>
    </head>

    <body onload="openSection(event, 'patient')">
        <section>
            <!--<img src="img/login_left_bg.svg" id="login_left_bg" />-->

            <div class="left-half"></div>

            <div class="right-half">
                <div id="circle_bg"></div>
                <div id="circle_bg2"></div>
                <!-- Tab links -->
                <div id="container" class="tab">
                    <button class="tablinks shape" id="defaultOpen" onclick="openSection(event, 'patient')">Author/Reviewer</button>
                    <button class="tablinks shape2" onclick="openSection(event, 'employee')">Employee</button>
                    <!------------------------------------------------------------------------------------------------->
                    <!-- Patient Tab content -->
                    <div id="patient" class="tabcontent">
                        <p class="textHeader1">Welcome to</p>
                        <p class="textHeader2"> PotatoPopcorn</p> <br />
                        <!-- form -->
                        <form method="POST">
                            <div class="input-container">
                                <img class="icon" src="../img/userName_icon.svg" />
                                <input class="input-field" type="text" placeholder="Email" id="userEmail" name="userEmail">
                            </div>
                            <br />
                            <div class="input-container">
                                <img class="icon" src="../img/password_icon.svg" />
                                <input class="input-field" type="password" placeholder="Password" id="userPassword" name="userPassword">
                            </div><br />
                            <div class="input-container">
                                <img class="icon" src="../img/userType_icon.svg" />
                                <select class="input-field" name="userProfileType">
                                    <option value="author">Author</option>
                                    <option value="reviewer">Reviewer</option>
                                </select>
                            </div><br />
                            <input type="submit" id="user_login_btn" name="user_login_btn" value="Login">
                        </form>
                    </div>
                    <!------------------------------------------------------------------------------------------------->
                    <!--Employee Tab content -->
                    <div id="employee" class="tabcontent">
                        <p class="textHeader3"> Employee Login </p> <br />
                        <!-- form -->
                        <form method="POST">
                            <div class="input-container">
                                <img class="icon" src="../img/userName_icon.svg" />
                                <input class="input-field" type="text" placeholder="Email" id="employeeEmail" name="employeeEmail">
                            </div>
                            <br />
                            <div class="input-container">
                                <img class="icon" src="../img/password_icon.svg" />
                                <input class="input-field" type="password" placeholder="Password" id="employeePassword" name="employeePassword">
                            </div><br />
                            <div class="input-container">
                                <img class="icon" src="../img/userType_icon.svg" />
                                <select class="input-field" name="adminProfileType">
                                    <option value="conferenceChair">Conference chair</option>
                                    <option value="userAdmin">User Admin</option>
                                </select>
                            </div><br />
                            <input type="submit" id="employee_login_btn" name="employee_login_btn" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>