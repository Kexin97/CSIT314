<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
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
                            <a href="admin_profilePage.php" class="nav-link ">
                                <i class="nav-icon"><img src="../img/nav_profile_icon.svg"></i>
                                <p class="navHeader">
                                    Profile

                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="../boundary/login_page.php" class="nav-link ">
                                <i class="nav-icon"><img src="../img/nav_logout_icon.svg"></i>
                                <p class="navHeader">
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!--<img src="img/nav_bk.svg" id="nav_bk" />-->
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper-->
        <div class="content-wrapper ">
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 0; background-color: white;">
                        <p style="font-size:20px; color: black; margin-left: 10px; margin-top: 25px;">User Profile</p>
                    </div>
                    <div id="settings" style="padding: 30px;">
                            <div class="form-group row">
                                <label for="inputUserName" class="col-sm-2 col-form-label">User Profile:</label>
                                <div class="col-sm-4">
                                    <!--   <select class="form-control" id="userUserProfile">-->
                                    <select class="form-control select2" id="admin_addProfile" name="admin_addProfile[]" data-dropdown-css-class="select2-purple"  multiple="multiple" style="width: 100%;">
                                        <option value="reviewer">Reviewer</option>
                                        <option value="author">Author</option>
                                        <option value="userAdmin">User Admin</option>
                                        <option value="conferenceChair">Conference Chair</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputUserEmail" class="col-sm-2 col-form-label">Email address:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="admin_addEmail" name="admin_addEmail">
                                </div>
                            </div>


                            <button type="button" class="detail_action_btn" data-toggle="modal" data-target="#addUserModal" onclick="check()">
                                Add user profile
                            </button>

                        
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
                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Are you sure to continue?</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Email:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserName from DB-->
                        <label id="addUserEmail"></label>
                    </div>
                    <p>User Profile:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserProfile from DB-->
                        <label id="addUserProfile"></label>
                    </div>
                    
                </div>
                <div class="modal-footer" style="border: none;">
				<input type="submit" name="create" style="float:right;" class="detail_action_btn" value="ok">
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>
    <script>
        $(".nav .nav-link").on("click", function () {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
		
		function check()
		{
			var email = document.getElementById("admin_addEmail").value;
			document.getElementById("addUserEmail").innerHTML = email;
			
			
			
			var selected = [];
			for (var option of document.getElementById('admin_addProfile').options)
			{
				if (option.selected) {
					selected.push(option.value);
				}
			}
			
			var profile = "";
			for (var i = 0; i<selected.length;i++)
			{
				profile = profile + selected[i] + "<br>";
			}
			
			document.getElementById("addUserProfile").innerHTML = profile;
			
			
		}
    </script>
    <?php
        require("../controller/addProfileController.php");
        if(isset($_POST['create'])){
            $profile_type = $_POST["admin_addProfile"];
            $account_email = $_POST["admin_addEmail"];

            if(empty($profile_type) || empty($account_email)){
                $controller = new addProfileController();
                $result = $controller->profileDetails($account_email, $userProfile);
                if($result["result"] == TRUE)
                    displaySuccess();
                else {
                    $fail = $result["errorMsg"];
                    displayFail($fail);
                }
            }
            else{
				$counter = 0;
                foreach ($profile_type as $userProfile){
                    $controller = new addProfileController();
                    $result = $controller->profileDetails($account_email, $userProfile);
                    if($result["result"] != TRUE){
                        $fail = $result["errorMsg"];
                        displayFail($fail);
						$counter++;
					}
                    
                }
				if ($counter==0){
                    displaySuccess();
                }
            }
        }

        function displaySuccess() {
        echo '<script> alert("New user profile has been successfully created."); </script>';
        }

        function displayFail($fail) {
        echo '<script> alert("Failed to create profile: ' . $fail . '"); </script>';
        }
    ?>
</body>

</html>