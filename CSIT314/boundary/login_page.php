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
    </script>
    <?php
        //$_POST['userEmail'], $_POST['userPassword'],
        require '../controller/accountController.php';
        if (isset($_POST['user_login_btn'])){
            $lc = new accountController();
            $vl = $lc->validateAccountDetails($_POST['userEmail'], $_POST['userPassword'], "user");

            if($vl == 'validLogin') {
                echo '<script> alert("user Valid login"); </script>';
            }

            else if($vl == 'invalidLogin') {
                echo '<script> alert("user Invalid login"); </script>';
            }

            else {
                echo '<script> alert("user Missing fields!"); </script>';
            }
        }

        if (isset($_POST['employee_login_btn'])){
            $lc = new accountController();
            $vl = $lc->validateAccountDetails($_POST['employeeEmail'], $_POST['employeePassword'], "admin");

            if($vl == 'validLogin') {
                echo '<script> alert("admin Valid login"); </script>';
            }

            else if($vl == 'invalidLogin') {
                echo '<script> alert("admin invalid login"); </script>';
            }

            else {
                echo '<script> alert("admin Missing fields!"); </script>';
            }
        }
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

    <body onload="openSection(event, 'reAu')">
        <section>
            <!--<img src="img/login_left_bg.svg" id="login_left_bg" />-->

            <div class="left-half"></div>

            <div class="right-half">
                <div id="circle_bg"></div>
                <div id="circle_bg2"></div>
                <!-- Tab links -->
                <div id="container" class="tab">
                    <button class="tablinks shape" id="defaultOpen" onclick="openSection(event, 'reAu')">Author/Reviewer</button>
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
                            <img class="icon" src="img/userType_icon.svg" />
                            <select class="input-field">
                                <option value="userAuthor">Author</option>
                                <option value="userReviewer">Reviewer</option>
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
                                <select class="input-field">
                                    <option value="userCC">Conference chair</option>
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