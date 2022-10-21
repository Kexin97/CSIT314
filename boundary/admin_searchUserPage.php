<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-free@1.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- <link href="static/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="static/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
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
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
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
                                    Pending user profile

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
        <!-- Content Wrapper. Doctor Home Page -->
        <div class="content-wrapper ">
            <div class="col-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                        <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                        <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Search User</p>
                    </div>

                    <div class="card-body">
                    <div>
                            <p class="searchLeft">Enter User Name/Account ID: </p>
                            <!-- search User ID -->
                            <input type="search" id="admin_searchUserName" class="form-control form-control-lg" placeholder="Search User Name/Account ID">
                            <!-- <select id="searchUserProfile" class="form-control" style="width: 200px;display: inline-block">

                                <option>All</option>
                                <option>Reviewers</option>
                                <option>Authors</option>
                                <option>User Admin</option>

                            </select> -->
                            <button type="submit" class="btn btn-outline-primary search_button">search</button>
                        </div>

                    </div>
                </div>
                <!--<div class="card" style="">
                    <div class="card-body">
                        <p class="searchLeft">Select Profile: </p>
                        <select class="form-control" style="width: 200px;display: inline-block">

                            <option>All</option>
                            <option>reviewers</option>
                            <option>authors</option>
                                 <option>User Admin</option>

                        </select>
                    </div>
                </div>-->
            </div>
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <table id="searchUser" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                                <tr>
                                    <!--<th>NRIC</th>-->
                                    <th>Full Name</th>
                                    <th>User Profile</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--              <td>S12345678</td>-->
                                    <td>Mike Doe</td>
                                    <td>Author</td>


                                    <td>
                                        <button type="button" class="detail_action_btn" data-toggle="modal" data-target="#searchUserModal">
                                            Details
                                        </button>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="searchUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="margin-top: 25px; float:left;width: 3px;height: 28px; background: #FED666;"></div>
                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">View User</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>User Profile:&nbsp;</p>
                    <div class="detail">
                        <!-- get userName from DB-->
                        <label class="admin_searchUserProfile">Author</label>
                    </div>
                    <!--<p>NRIC:&nbsp;</p>
                    <div class="detail">-->
                    <!-- get userID from DB-->
                    <!--<label class="admin_searchUserNRIC">Ab1234567</label>
                    </div>-->
                    <!--<p>Username:&nbsp;</p>
                    <div class="detail">-->
                        <!-- get userName from DB-->
                        <!--<label class="admin_searchUserUsername">lucid123</label>
                    </div>-->
                    <p>Full name:&nbsp;</p>
                    <div class="detail">
                        <!-- get userFullName from DB-->
                        <label class="admin_searchUserFullName">Lucid Marry</label>
                    </div>
                    <p>Age:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label class="admin_searchUserAge">38</label>
                    </div>
                    <p>Sex:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserNRIC from DB-->
                        <label class="admin_searchUserGender">F</label>
                    </div>
                    <p>Contact:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserPhoneNo from DB-->
                        <label class="admin_searchUserPhoneNo">(+65)8501230</label>
                    </div>
                    <p>Email:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserEmail from DB-->
                        <label class="admin_searchUserEmail">user123@gmai.com</label>
                    </div>
                    <button type="button" class="blue_btn" data-toggle="modal" data-target="#editModal" id="editDetail_btn">
                        Edit Detail
                    </button>
                    <!--                    <button type="button" class="red_btn" data-toggle="modal" data-target="#deleteModal">
                                            delete user
                                        </button>-->

                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Delete Account and data?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <!--<p>NRIC:&nbsp;</p>
                    <div class="detail">-->
                    <!-- get userID from DB-->
                    <!--<label class="deleteUserNRIC">Ab1234567</label>-->
                </div>
                <p>User Profile:&nbsp;</p>
                <div class="detail">
                    <!-- get userName from DB-->
                    <label class="deleteUserProfile">Author</label>
                </div>
                <p class="deleteText">Deleting this person’s account will remove all their data from this system ,including user infomations and records.</p>


                <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                    Cancel
                </button>
                <button type="button" style="float: right;background-color: #F7685B;color: white;" class="blue_btn" data-toggle="modal" data-target="#deleteModal">
                    Confirm Deletion
                </button>
            </div>
            <div class="modal-footer" style="border: none;">
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index:1060">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Save user detail?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p class="deleteText">Are you sure you want to save?</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button type="button" style="float: right;background-color: #F7685B;color: white;" class="blue_btn" onclick="saveEdit()">
                        Confirm save
                    </button>
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img style="margin-left: 10px; margin-top: 20px" src="../img/blue arrow.svg" data-dismiss="modal" aria-label="Close"></i>
                    <p style="font-size:20px; color: #109CF1;margin-top: 15px; margin-left: 15px; display: inline;">Edit User Details</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute;"></div>
                        <p style="font-size:16px; color: black; margin-left: 10px; display: inline;">Account</p>
                    </div>
                    <!--<div class="edit-group">
                        <p>NRIC:&nbsp;</p>
                        <div class="detail">-->
                                    <!-- get userNRIC from DB-->
                                    <!--<label id="admin_editNRIC">Ab1234567</label>
                        </div>
                    </div>-->
                                    <!--<div class="edit-group">
                        <p>Username:&nbsp;</p>
                        <div class="detail">-->
                                    <!-- get userName from DB-->
                                    <!--<input type="text" class="form-control" id="admin_editUsername">
                        </div>
                    </div>-->
                    <div class="edit-group">
                        <p>Email:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="email" class="form-control" id="contact">
                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Password:&nbsp;</p>
                        <div class="detail">
                            <!-- get userFullName from DB-->
                            <input type="password" class="form-control" id="admin_editPassword">
                        </div>
                    </div>
                    <div class="edit-group">
                        <p>User Profile:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <select class="form-control" style="display: inline-block" id="admin_editUserProfile" ">
                                <option value="Reviewer">Reviewer</option>
                                <option value="Author">Author</option>
                                <option value="User Admin">User Admin</option>
                                <option value="Conference Chair">Conference Chair</option>

                            </select>
                        </div>
                    </div>
                    <div style="clear: both;">
                        <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute;"></div>
                        <p style="font-size:16px; color: black; margin-left: 10px; display: inline;">Info</p>
                    </div>
                    <div class="edit-group">
                        <p>Full Name:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="text" class="form-control" id="admin_editFullName">
                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Sex:&nbsp;</p>
                        <div class="detail">
                            <!--       <input type="radio" class="sex_input" id="admin_editFemale" name="sex" value="F">
            <label for="female" class="sex_label">F</label>
            <input type="radio" class="sex_input" id="male" name="sex" value="M">
            <label for="male" class="sex_label">M</label><br>-->
                            <label class="admin_editGender">F</label>

                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Age:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="number" class="form-control" id="admin_editAge" min="1" maxlength="3">
                        </div>
                    </div>

                    <!--                    <div style="clear: both;">
                            <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute;"></div>
                            <p style="font-size:16px; color: black; margin-left: 10px; display: inline;">Info</p>
                        </div>-->
                    <div class="edit-group">
                        <p>Contact:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="text" class="form-control" id="admin_editContact">
                        </div>
                    </div>

                    <div class="admin_searchUserEditDetail_btn">

                        <button type="button" id="author_editDetail" class="blue_btn" data-toggle="modal" data-target="#saveModal" id="editDetail_btn">
                            Save
                        </button>
                        <button type="button" class="white_btn " data-dismiss="modal" aria-label="Close">
                            Back
                        </button>
                    </div>

                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
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
        
        $(function () {

            $('#searchUser').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

</body>

</html>