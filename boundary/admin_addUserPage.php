<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>AdminLTE 3 | Dashboard</title> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-free@1.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Admin</title>
    <style>
        div {
            height: auto;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<form class="form-horizontal" method="POST">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <!-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" id="navleft">
            <!-- Company Name -->
            <div class="brand-link noline" id="company_name">
                <span class="brand-text font-weight-light brand-image-xs logo-xl">
                    PotatoPopcorn<span class="company_title"> </span>
                </span>
                <span class="brand-text font-weight-light brand-image-xl logo-xs" id="short_name">
                    PoP
                </span>
                <!-- </a> -->
            </div>
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex" id="platform_name">
                    <span class="platform_name brand-image-xs logo-xl">
                        System Admin Patform
                    </span>
                    <span class="platform_name brand-image-xl logo-xs" id="platformShort_name">
                        Sy Ad
                    </span>
                </div>

                <hr color="#EBEFF2" style="border:1; margin-top:35px; opacity: 0.8;">

                <nav class=" mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview " role="menu " data-accordion="false ">
                        <li class="nav-item">
                            <a href="admin_addUserPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/add.svg"></i>
                                <p class="navHeader">
                                    Add user
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="admin_addUserProfile.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/add.svg"></i>
                                <p class="navHeader">
                                Add user profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="admin_searchUserPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    Search user
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="admin_searchUserProfilePage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    Search user profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr color="#EBEFF2" style="border:1; margin-top:10px; opacity: 0.8;">
                            <a href="admin_profilePage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/nav_profile_icon.svg"></i>
                                <p class="navHeader">
                                    Profile

                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="../boundary/login_page.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/nav_logout_icon.svg"></i>
                                <p class="navHeader">
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper ">
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 0; background-color: white;">
                        <p style="font-size:20px; color: black; margin-left: 10px; margin-top: 25px;">Personal Profile</p>
                    </div>
                    <div id="settings" style="padding: 30px;">
                            <div class="form-group row">
                                <label for="inputUserName" class="col-sm-2 col-form-label">Full Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="admin_addFullName" name="admin_addFullName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" id="admin_addPassword" name="admin_addPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSex" class="col-sm-2 col-form-label">Sex：</label>
                                <div class="col-sm-4" style="display: inherit;">
                                    <input type="radio" class="sex_input" name="admin_addGender" id="F" value="F">
                                    <label for="female" class="sex_label">F</label>
                                    <input type="radio" class="sex_input" name="admin_addGender" id="M" value="M">
                                    <label for="male" class="sex_label">M</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAge" class="col-sm-2 col-form-label">Age：</label>
                                <div class="col-sm-4">

                                    <input type="number" class="form-control" id="admin_addAge" name="admin_addAge" min="1" max="100" min="1" maxlength="3" maxlength="3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Contact:</label>
                                <div class="col-sm-4">
                                    <input type="tel" class="form-control" id="admin_addContact" name="admin_addContact" placeholder="Contact Number" minlength="8" maxlength="8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputContact" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="admin_addEmail" name="admin_addEmail" placeholder="Email">
                                </div>
                            </div>
                            <input type="button" class="detail_action_btn" data-toggle="modal" data-target="#addUserModal" value="Add user" onclick="check()">       
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="margin-top: 25px; float:left;width: 3px;height: 28px; background: #FED666;"></div>
                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Confirm details</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Full Name:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserNRIC from DB-->
                        <label id="addName"></label>
                    </div>
                    <p>Password:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserProfile from DB-->
                        <label id="addPwd"></label>
                    </div>

                    <p>Sex:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label id="addSex"></label>
                    </div>
					
                    <p>Age:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label id="addAge"></label>
                    </div>
					
                    <p>Contact:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label id="addContact"></label>
                    </div>
					
                    <p>Email:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label id="addEmail"></label>
                    </div>
                    <input type="submit" style="float: right;" class="detail_action_btn" name="create" id="create" value="Confirm">
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
        </form>
    </div>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- getdatepicker -->
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>

    <script>
        $(".nav .nav-link").on("click", function () {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
		
		function check()
		{
			var name = document.getElementById("admin_addFullName").value;
			document.getElementById("addName").innerHTML = name;
			
			var pwd = document.getElementById("admin_addPassword").value;
			document.getElementById("addPwd").innerHTML = pwd;
			
			var sexF = document.getElementById("F").checked;
			var sexM = document.getElementById("M").checked;
			if (sexF == true)
				document.getElementById("addSex").innerHTML = "F";
			else if(sexM == true){
				document.getElementById("addSex").innerHTML = "M";
			}
			
			var age = document.getElementById("admin_addAge").value;
			document.getElementById("addAge").innerHTML = age;
			
			var contact = document.getElementById("admin_addContact").value;
			document.getElementById("addContact").innerHTML = contact;
			
			var email = document.getElementById("admin_addEmail").value;
			document.getElementById("addEmail").innerHTML = email;
			
			
			
		}
    </script>
    <?php
        require("../controller/addUserController.php");
        if(isset($_POST['create'])){
            $account_password = $_POST["admin_addPassword"];
            $account_fullName = $_POST["admin_addFullName"];             
            $account_age = $_POST["admin_addAge"];
            $account_contact = $_POST["admin_addContact"];
            $account_email = $_POST["admin_addEmail"];

            $account_sex;
            if(isset($_POST["admin_addGender"])){
                $account_sex = $_POST["admin_addGender"];
            }
            else{
                $account_sex = "";
            }
            $controller = new addUserController();
            $result = $controller->validateDetails($account_password, $account_fullName, $account_sex,
                                                $account_age, $account_contact, $account_email);
            if($result["result"] == TRUE)
                displaySuccess();
            else {
                $fail = $result["errorMsg"];
                displayFail($fail);
            }
        }

        function displaySuccess() {
        echo '<script> alert("New user account has been successfully created."); </script>';
        }

        function displayFail($fail) {
        echo '<script> alert("Failed to create account: ' . $fail . '"); </script>';
        }
    ?>
</body>

</html>