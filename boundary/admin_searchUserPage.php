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
	<?php
	require("../controller/viewUserController.php");
	require("../controller/updateUserController.php");

	$control = new ViewAccountController();
	$list = $control->viewUsers();

	if(isset($_POST['update'])){
				$account_email = $_POST["admin_editemail"];
				$account_password = $_POST["admin_editPassword"];
				$account_fullName = $_POST["admin_editFullName"];
				$account_sex = $_POST["admin_editGender"];
				$account_age = $_POST["admin_editAge"];
				$account_contact = $_POST["admin_editContact"];



				if(empty($account_password) || empty($account_fullName) || empty($account_sex) || empty($account_age) ||  empty($account_contact)){

						echo "<script> alert('Update failed! Please fill in user profile!'); </script>";

				}
				else{
					$controller = new updateUserController();
					$result = $controller->userDetails($account_email, $account_password, $account_fullName, $account_sex, $account_age, $account_contact);
					if($result["result"] != TRUE)
						{
							echo "<script> alert('" . $result["errorMsg"] . "')</script>";
						}

					$control = new ViewAccountController();
					$list = $control->viewUsers();
				}
			}

	?>

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
                                    Add user profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="admin_searchUserPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                View user
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="admin_searchUserProfilePage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    View user profile
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
                            <a href="login.php " class="nav-link ">
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
                <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                        <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                        <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Search User</p>
                    </div>

                    <!--<div class="card-body">
                        <div>
                            <p class="searchLeft">Enter User Name/Account ID: </p>-->
                            <!-- search User ID -->
                            <!--<input type="search" id="admin_searchUserName" class="form-control form-control-lg" placeholder="Search User Name/Account ID">
                            <!-- <select id="searchUserProfile" class="form-control" style="width: 200px;display: inline-block">

                                <option>All</option>
                                <option>Reviewers</option>
                                <option>Authors</option>
                                <option>User Admin</option>

                            </select> -->
                            <!--<button type="submit" class="btn btn-outline-primary search_button">search</button>
                        </div>

                    </div> -->
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <table id="searchUserTable" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                                <tr>

                                    <th>Full Name</th>
									<th>Email</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < count($list); $i++): ?>
									<tr>
									<td><?php echo $list[$i]["account_fullName"]; ?></td>
									<td><?php echo $list[$i]["account_email"]; ?></td>
									<td><?php
											$temp = $list[$i]["account_email"];
											echo "<button id='detail" . $i . "' type='button' class='detail_action_btn' data-toggle='modal' data-target='#searchUserModal' onclick='detail(" . $i . ")' value='" . $temp . "'>
                                            Details</button>";
											//hidden, get data for detail use
											echo "<input id='getID" . $i . "' type='hidden' value='" . $list[$i]["account_ID"] . "'>";
											echo "<input id='getAge" . $i . "' type='hidden' value='" . $list[$i]["account_age"] . "'>";
											echo "<input id='getSex" . $i . "' type='hidden' value='" . $list[$i]["account_sex"] . "'>";
											echo "<input id='getContact" . $i . "' type='hidden' value='" . $list[$i]["account_contact"] . "'>";
											echo "<input id='getPwd" . $i . "' type='hidden' value='" . $list[$i]["account_password"] . "'>";
											echo "<input id='getName" . $i . "' type='hidden' value='" . $list[$i]["account_fullName"] . "'>";
										?></td>

								<?php endfor; ?>

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
                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">User has been added successfully</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>User Profile:&nbsp;</p>
                    <div class="detail"> -->
                    <!-- get userProfile from DB-->
                    <!-- <label class="admin_searchUserProfile">Author</label>
                    </div> -->
                    <p>Account ID:&nbsp;</p>
                    <div class="detail">
                        <!-- get userID from DB-->
                        <label class="admin_searchUserAccountID" id="admin_searchUserAccountID"></label>
                    </div>
                    <p>Full name:&nbsp;</p>
                    <div class="detail">
                        <!-- get userFullName from DB-->
                        <label class="admin_searchUserFullName" id="admin_searchUserFullName"></label>
                    </div>
                    <p>Age:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserAge from DB-->
                        <label class="admin_searchUserAge" id="admin_searchUserAge"></label>
                    </div>
                    <p>Sex:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserNRIC from DB-->
                        <label class="admin_searchUserGender" id="admin_searchUserGender"></label>
                    </div>
                    <p>Contact:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserPhoneNo from DB-->
                        <label class="admin_searchUserPhoneNo" id="admin_searchUserPhoneNo"></label>
                    </div>
                    <p>Email:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserEmail from DB-->
                        <label class="admin_searchUserEmail" id="admin_searchUserEmail"></label>
                    </div>
                    <p>Password:&nbsp;</p>
                    <div class="detail">
                        <!-- get UserEmail from DB-->
                        <label class="admin_searchUserPwd" id="admin_searchUserPwd"></label>
                    </div>
                    <button type="button" class="blue_btn" data-toggle="modal" data-target="#editModal" id="editDetail_btn" onclick="edit()">
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

    <form method="POST">
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
                    <div class="edit-group">
                        <p>Account ID:&nbsp;</p>
                        <div class="detail">
                            <!-- get userID from DB-->
							<input type="text " class="form-control " id="admin_editID" name="admin_editID" readonly='true'>
                        </div>
                    </div>

                    <div class="edit-group">
                        <p>Email:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="email" class="form-control" id="admin_editemail" name="admin_editemail" readonly='true'>
                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Password:&nbsp;</p>
                        <div class="detail">
                            <!-- get userFullName from DB-->
                            <input type="password" class="form-control" id="admin_editPassword" name="admin_editPassword">
                        </div>
                    </div>

                    <div style="clear: both; ">
                        <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute; "></div>
                        <p style="font-size:16px; color: black; margin-left: 10px; display: inline; ">Info</p>
                    </div>
                    <div class="edit-group">
                        <p>Full Name:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="text" class="form-control" id="admin_editFullName" name="admin_editFullName">
                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Sex:&nbsp;</p>
                        <div class="detail">
                            <input type="radio" class="admin_editGender" name="admin_editGender" id="F" value="F">
                            <label for="female" class="sex_label">F</label>
                            <input type="radio" class="admin_editGender" name="admin_editGender" id="M" value="M">
                            <label for="male" class="sex_label">M</label>

                        </div>
                    </div>
                    <div class="edit-group">
                        <p>Age:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <input type="number" class="form-control" id="admin_editAge" placeholder="Age" min="1" max="100" min="1" maxlength="3" name="admin_editAge">
                        </div>
                    </div>

                    <!--                    <div style="clear: both; ">
                            <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute; "></div>
                            <p style="font-size:16px; color: black; margin-left: 10px; display: inline; ">Info</p>
                        </div>-->
                    <div class="edit-group">
                        <p>Contact:&nbsp;</p>
                        <div class="detail">
                            <!-- get user contact from DB-->
                            <input type="tel" class="form-control" id="admin_editContact" name="admin_editContact">
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
                <div class="modal-footer " style="border: none; ">
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index:1060">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Save Account and data?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p class="deleteText">Are you sure you want to save?</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button type="submit" style="float: right;background-color: #F7685B;color: white;" class="blue_btn" name="update">
                        Confirm save
                    </button>
                </div>
                <div class="modal-footer" style="border: none;">
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
        $(".nav .nav-link ").on("click ", function() {
            $(".nav ").find(".active ").removeClass("active ");
            $(this).addClass("active ");
        });

        $(function() {

            $('#searchUserTable').DataTable({
                "paging": false,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });

		function detail(i)
		{
			var id = "detail" + i;
			var email = document.getElementById(id).value;
			document.getElementById("admin_searchUserEmail").innerHTML = email;
			document.getElementById("admin_searchUserEmail").value = email;

			var name = document.getElementById("getName"+i).value;
			document.getElementById("admin_searchUserFullName").innerHTML = name;
			document.getElementById("admin_searchUserFullName").value = name;

			var getID = document.getElementById("getID"+i).value;
			document.getElementById("admin_searchUserAccountID").innerHTML = getID;
			document.getElementById("admin_searchUserAccountID").value = getID;

			var age = document.getElementById("getAge"+i).value;
			document.getElementById("admin_searchUserAge").innerHTML = age;
			document.getElementById("admin_searchUserAge").value = age;

			var sex = document.getElementById("getSex"+i).value;
			document.getElementById("admin_searchUserGender").innerHTML = sex;
			document.getElementById("admin_searchUserGender").value = sex;

			var contact = document.getElementById("getContact"+i).value;
			document.getElementById("admin_searchUserPhoneNo").innerHTML = contact;
			document.getElementById("admin_searchUserPhoneNo").value = contact;

			var pwd = document.getElementById("getPwd"+i).value;
			document.getElementById("admin_searchUserPwd").innerHTML = pwd;
			document.getElementById("admin_searchUserPwd").value = pwd;

		}

		function edit()
		{
			var ID = document.getElementById("admin_searchUserAccountID").value;
			document.getElementById("admin_editID").value = ID;

			var email = document.getElementById("admin_searchUserEmail").value;
			document.getElementById("admin_editemail").value = email;

			var name = document.getElementById("admin_searchUserFullName").value;
			document.getElementById("admin_editFullName").value = name;

			var age =document.getElementById("admin_searchUserAge").value;
			document.getElementById("admin_editAge").value = age;

			var sex = document.getElementById("admin_searchUserGender").value;
			document.getElementById(sex).checked = true;

			var contact = document.getElementById("admin_searchUserPhoneNo").value;
			document.getElementById("admin_editContact").value = contact;

			var pwd = document.getElementById("admin_searchUserPwd").value;
			document.getElementById("admin_editPassword").value = pwd;

		}


    </script>

</body>

</html>