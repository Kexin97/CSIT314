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
			require("../controller/viewProfileController.php");
			require("../controller/updateProfileController.php");
			
			$control = new ViewProfileController();
			$list = $control->viewProfile();
			
			
			if(isset($_POST['update'])){
				$profile_type = $_POST["admin_editUserProfile"];
				$account_email = $_POST["admin_editEmail"];
				

				if(empty($profile_type)){
					
						echo "<script> alert('Update failed! Please fill in user profile!'); </script>";
					
				}
				else{
					$updateC = new updateProfileController();
					$preupdate = $updateC->updateProfile($account_email);
					$counter = 0;
					foreach ($profile_type as $userProfile){
						$controller = new updateProfileController();
						$result = $controller->profileDetails($account_email, $userProfile);
						if($result["result"] != TRUE)
						{
							echo "<script> alert('" . $result["errorMsg"] . "')</script>";
							$counter++;
						}
					}
					if ($counter == 0)
					{
						echo "<script> alert('Update successful!')</script>";
						$control = new ViewProfileController();
						$list = $control->viewProfile();
					}
						
					
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
                            <a href="../boundary/login_page.php " class="nav-link ">
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
                        <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Search User Profile</p>
                    </div>

                    <!--<div class="card-body">
                        <div>
                            <p class="searchLeft">Select User Profile: </p>
                            <!-- search User ID -->
                            <!-- <input type="search" id="searchName" class="form-control form-control-lg" placeholder="Search User Name"> -->
                            <!--<select id="searchUserProfile" class="form-control select2" style="width: 200px;display: inline-block" data-dropdown-css-class="select2-purple" multiple="multiple">

                                <option>All</option>
                                <option>Reviewers</option>
                                <option>Authors</option>
                                <option>User Admin</option>
                                <option>Conference Chair</option>

                            </select>
                            <button type="submit" class="btn btn-outline-primary search_button" onsubmit="return true;">search</button>
                        </div>

                    </div>-->
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
						
                        <table id="searchUserProfileTable" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>User Profile</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
							
                            <tbody>
							<?php for($i = 0; $i < count($list); $i++): ?>
									<tr>
									  <td><?php echo $list[$i]["account_email"]; ?></td>
									  <?php
										echo "<td id=profile". $i .">" ;
										$tempLoc = $list[$i]["reviewer_type"];
										if ($list[$i]["reviewer_type"]!= ""){
											$tempLoc = $tempLoc."<br>";
										}
										
										$tempLoc = $tempLoc . $list[$i]["author_type"];
										if ($list[$i]["author_type"] != ""){
											$tempLoc = $tempLoc."<br>";
										}
										
										$tempLoc = $tempLoc . $list[$i]["conferenceChair_type"];
										if ($list[$i]["conferenceChair_type"] != ""){
											$tempLoc = $tempLoc."<br>";
										}
										
										$tempLoc = $tempLoc . $list[$i]["userAdmin_type"];
										if ($list[$i]["userAdmin_type"] != ""){
											$tempLoc = $tempLoc."<br>";
										} 
										echo $tempLoc;
										
										echo "</td>";
										
										$temp = $list[$i]["account_email"];
										echo "<td><button id='detail" . $i . "' type='button' class='detail_action_btn' data-toggle='modal' data-target='#searchUserModal' onclick='detail(" . $i . ")' value='" . $temp . "'>
                                            Details</button></td>
										</tr>";
									?>
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
                    <div style="float:left;width: 3px;height: 25px; background: #FED666;"></div>
                    <p style="font-size:20px; color: #109CF1;margin-top: 20px; margin-left: 10px; display: inline;">User Details</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					
                    <p>Full name:&nbsp;</p>
                    <div class="detail">
                        <!-- get userFullName from DB-->
                        <label class="admin_searchUserFullName" id="admin_searchUserFullName" value=""></label>
                    </div>
                    <p>User Profile:&nbsp;</p>
                    <div class="detail">
                        <!-- get userName from DB-->
                        <label class="admin_searchUserProfile" id="admin_searchUserProfile"></label>
                    </div>
					<br><br><br><br><br>
                    <button type="button" class="blue_btn" data-toggle="modal" data-target="#editModal" id="editDetail_btn" onclick="edit()">
                        Edit Detail
                    </button>
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
                    <p style="font-size:20px; color: #109CF1;margin-top: 15px; margin-left: 15px; display: inline;">Edit User Profile</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
				
                    <div>
                        <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute; "></div>
                        <p style="font-size:16px; color: black; margin-left: 10px; display: inline; ">Info</p>
                    </div>
                    <div class="edit-group ">
                        <p>Email:&nbsp;</p>
                        <div class="detail ">
                            <!-- get userName from DB-->
                            <input type="text " class="form-control " id="admin_editEmail" name="admin_editEmail" value="" readonly='true'>
                        </div>
                    </div>
                    <div style="clear: both; ">
                        <div style="float:left;width: 3px;height: 28px; background: #F7685B;position: absolute;"></div>
                        <p style="font-size:16px; color: black; margin-left: 10px; display: inline;">Account</p>
                    </div>

                    <div class="edit-group">
                        <p>User Profile:&nbsp;</p>
                        <div class="detail">
                            <!-- get userName from DB-->
                            <select class="form-control select2" id="admin_editUserProfile[]" name="admin_editUserProfile[]" multiple="multiple" style="width: 100%; z-index: 1050;">
                                <option value="reviewer">Reviewer</option>
                                <option value="author">Author</option>
                                <option value="userAdmin">User Admin</option>
                                <option value="conferenceChair">Conference Chair</option>

                            </select>
                        </div>
                    </div>




				
                </div>
                <div class="modal-footer " style="border: none; ">
                    <div class="admin_searchUserProfileEditDetail_btn">

                        <button type="button" id="author_editDetail" class="blue_btn" data-toggle="modal" data-target="#saveModal" id="editDetail_btn">
                            Save
                        </button>
                        <button type="button" class="white_btn " data-dismiss="modal" aria-label="Close">
                            Back
                        </button>
                    </div>
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
    <!--    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>-->
    <!--    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>

    <script>
        $(".nav .nav-link ").on("click ", function() {
            $(".nav ").find(".active ").removeClass("active ");
            $(this).addClass("active ");
        });

        $(function() {

            $('#searchUserProfileTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
            //Initialize Select2 Elements
            $('.select2').select2();
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
		
		function detail(i)
		{
			var id = "detail" + i;
			var x = document.getElementById(id).value;
			document.getElementById("admin_searchUserFullName").innerHTML = x;
			document.getElementById("admin_searchUserFullName").value = x;
			
			var y = document.getElementById("profile"+i).outerHTML;
			document.getElementById("admin_searchUserProfile").innerHTML = y;
		}
		
		function edit()
		{
			var x = document.getElementById("admin_searchUserFullName").value;
			document.getElementById("admin_editEmail").value = x;
			
		}

    </script>


</body>

</html>