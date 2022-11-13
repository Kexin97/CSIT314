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
		require("../controller/viewPaperController.php");
		
		//get paper_ID from cookie
		$paper_ID = $_COOKIE["paper_ID"];

		$control = new ViewPaperController();
		$list = $control->viewPaperDetails($paper_ID);
		
		//for update use(conferenceList & AuthorList)
		require("../controller/viewUserController.php");

		$control = new ViewAccountController();
		$clist = $control->conList();
		$alist = $control->authList();
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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <!-- <i class="fa-solid fa-bell"></i> -->
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->

                        <!-- retrieve number of email notification-->
                        <span class="author_notiNo" class="author_noOfEmailNoti"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">
                                 <!-- retrieve number of email notification-->
                                <span class="author_noOfEmailNoti">
                                    
                                </span> Notifications
                        </span>
                        <div class="dropdown-divider"></div>
                        <a href="author_emailPage.php" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>
                            <!-- retrieve number of email notification-->
                            <span class="author_noOfEmailNoti">
                                    
                                </span> new emails
                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="author_emailPage.php" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

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
                        Author Patform
                    </span>
                    <span class="platform_name brand-image-xl logo-xs" id="platformShort_name">
                        Aut
                    </span>
                </div>

                <hr color="#EBEFF2" style="border:1; margin-top:35px; opacity: 0.8;">

                <nav class=" mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon"><img src="../img/nav_home_icon.svg"></i>
                                <p class="navHeader">
                                    Home
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item active">
                            <a href="author_addPaperPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/add.svg"></i>
                                <p class="navHeader">
                                    Add paper
                                </p>
                            </a>

                        </li>
                        <li class="nav-item active">
                            <a href="author_searchPaperPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    Search paper
                                </p>
                            </a>

                        </li>
                        <li class="nav-item active">
                            <a href="author_emailPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/email.png"></i>
                                <p class="navHeader">
                                    View email
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr color="#EBEFF2" style="border:1; margin-top:10px; opacity: 0.8;">
                            <a href="author_profilePage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/nav_profile_icon.svg"></i>
                                <p class="navHeader">
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../boundary/login_page.php" class="nav-link">
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
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- <section class="content">
                <div class="container-fluid"> -->
            <div class="col-12" style="display: flex;">
                <div class="col-md-5">
                    <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                        <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                            <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                            <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">View paper deatil</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <p class="col-sm-4">Paper name:</p>
                                <div class="col-sm-4">
                                    <!-- retieve paper name -->
                                    <label id="author_viewPaperName">
										<?php echo $list[0]["paper_name"]; ?>
									</label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Conference:</p>
                                <div class="col-sm-4">
                                    <!-- retieve paper conference -->
                                    <label id="author_viewPaperConference">
										<?php echo $list[0]["conference"]; ?>
									</label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Author:</p>
                                <div class="col-sm-4">
                                    <!-- retieve author name -->
                                    <label class="author_viewPaperAuthor">
										<?php 
										$author = explode(",",$list[0]["author"] );
										for($i=0; $i<count($author);$i++){
											echo $author[$i]."</br>";
										}
										
										?>
									</label>
                                </div>
                            </div>
							<div class="row">
                                <p class="col-sm-4">Paper:</p>
                                <div class="col-sm-4">
                                    <!-- retieve author name -->
                                    <label class="author_viewPaper">
										<?php 
											$filename = explode("/",$list[0]["paper_file"]);
											echo "<a href='".$list[0]["paper_file"]."' target='_blank'>".$filename[3]."</a>";
										
										?>
									</label>
                                </div>
                            </div>
                            <div class="author_viewPaperEditDetail_btn">
                                <button type="button" id="author_editDetail" class="blue_btn" data-toggle="modal" data-target="#author_editPaperModal">
                                        Edit Detail
                                        </button>
                                <button type="button" class="red_btn" data-toggle="modal" data-target="#deletePapereModal">
                                        Delete paper
                                        </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7" id="author_viewRevRatContainer">
                    <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                        <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                            <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                            <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Paper review and rating</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <p class="col-sm-4">Paper rating:</p>
                                <div class="col-sm-4">
                                    <!-- retrieve paper rating -->
                                    <label id="author_viewPaperRating">
                                                <!-- 2.5 -->

                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Paper review:</p>
                                <div class="col-sm-7">
                                    <!-- retrieve the review of paper-->
                                    <p id="author_viewPaperReview">
                                        <!-- What is a review article? A review article can also be called a literature review, or a review of literature. It is a survey of previously published research on a topic. It should give an overview of current thinking on the topic. And, unlike an original
                                                research article, it will not present new experimental results. Writing a review of literature is to provide a critical evaluation of the data available from existing studies. Review articles can identify
                                                potential research areas to explore next, and sometimes they will draw new conclusions from the existing data. -->
                                    </p>
                                </div>
                                <!-- <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio2">
                                            <label for="customRadio3" class="custom-control-label">
                                            3 (strong accept)</label>
                                            <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio2">
                                            <label for="customRadio2" class="custom-control-label">
                                                2s(accept)</label> -->

                            </div>
                            <div class="card-body table-responsive pad">

                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary author_viewPaperAddRating active">
                                                        <input type="radio" id="author_viewPaperAddRating3" autocomplete="off" checked> 3<br>(strong accept)
                                                    </label>
                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio"  id="author_viewPaperAddRating2" autocomplete="off"> 2<br>(accept)
                                                    </label>
                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio"  id="author_viewPaperAddRating1" autocomplete="off"> 1<br>(weak accept)
                                                    </label>

                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio" id="author_viewPaperAddRating0" autocomplete="off">0<br>(borderline paper)
                                                    </label>
                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio" name="options" id="author_viewPaperAddRatingMinus1" autocomplete="off"> -1 (weak reject)
                                                    </label>
                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio" id="author_viewPaperAddRatingMinus3" autocomplete="off"> -2<br>(reject)
                                                    </label>
                                    <label class="btn btn-secondary author_viewPaperAddRating">
                                                        <input type="radio"  id="author_viewPaperAddRatingMinus3" autocomplete="off"> -3<br>(strong reject)
                                                    </label>
                                </div>
                            </div>
                            <!-- insert the review rating select above-->
                            <button type="button" id="author_addReviewRating" class="blue_btn author_viewPaperEditDetail_btn" data-toggle="modal" data-target="#addReviewRatingModal">
                                                 Add review rating
                                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
            </section> -->

        </div>
    </div>


    <div class="modal fade" id="deletePapereModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Delete Paper?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p>Paper ID:&nbsp;</p>
                    <div class="detail">
                        <!-- get paperID from DB-->
                        <label class="author_deletePaperID">
                            
                        </label>
                    </div>
                    <p>Paper name:&nbsp;</p>
                    <div class="detail">
                        <!-- get userFullName from DB-->
                        <label class="author_deletePaperName"></label>
                    </div>

                    <p class="deleteText">Deleting this paper mean you would be able to resubmit the correct version.</p>


                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                            Cancel
                    </button>
                    <button type="button" id="author_confirmDletion" style="float: right;background-color: #F7685B;color: white;" class="blue_btn">
                        Confirm Deletion
                    </button>
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addReviewRatingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index:1060">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Add review review?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p class="deleteText">Are you sure you want to add review?</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button type="button" style="float: right;background-color: #F7685B;color: white;" class="blue_btn">
                        Confirm save
                    </button>
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>
	<form method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="author_editPaperModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img style="margin-left: 10px; margin-top: 20px" src="../img/blue arrow.svg" data-dismiss="modal" aria-label="Close"></i>
                    <p style="font-size:20px; color: #109CF1;margin-top: 15px; margin-left: 15px; display: inline;">Edit Paper Details</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Paper name:&nbsp;</p>
                    <div class="detail">
                        <!-- get PaperName from DB-->
						<?php echo '<input type="text" class="form-control" id="author_editPaperName" value='.$list[0]["paper_name"].'>'; ?>
                        

                    </div>
                    <p class="searchLeft">Conference </p>
                    <div class="detail">

                        <select id="author_editConference" class="form-control select2" style="width: 100% !important;" >
                            <!-- retrieve conference number from db -->
                            <?php 
								for($i = 0; $i < count($clist); $i++){ 
									if($clist[$i]["account_email"]== $_COOKIE["accountEmail"]){
												//do nothing
									}
									else if ($list[0]["conference"]==$clist[$i]["account_email"]){
										echo "<option name='author_addConference' value='" . $clist[$i]["account_email"] . "' selected>" . $clist[$i]["account_email"]."</option>";
									}
									else{
										echo "<option name='author_addConference' value='" . $clist[$i]["account_email"] . "'>" . $clist[$i]["account_email"]."</option>";
									}
								}
							?>
							
                            </select>
                    </div>
                    <p class="searchLeft">Author </p>
                    <div class="detail">
                        <select id="author_editAuthorName" class="form-control select2 col-sm-4" multiple="multiple" style="width: 100% !important;">
                                <!-- retrieve author name from db -->
							<?php 
								$authorSel = explode(",",$list[0]["author"] );
								/* for($i=0; $i<count($alist);$i++){
									for($j=0;$j<count($authorSel);$j++){
										if($alist[$i]["account_email"]== $_COOKIE["accountEmail"] && $authorSel[$j]==$_COOKIE["accountEmail"]){
											break;
										}
										else if($alist[$i]["account_email"] == $authorSel[$j]){
											echo "<option value='".$authorSel[$j]."' selected>" . $alist[$i]["account_email"]."</option>";
											break;
										}
										else if ($authorSel[$j]!=$alist[$i]["account_email"]){
											echo "<option value='".$authorSel[$j]."' >" . $alist[$i]["account_email"]."</option>"; 
											
										}
										
									}
								} */
								
								for($i=0;$i<count($authorSel);$i++){
									if (in_array($authorSel[0],$alist["account_email"])){
										echo "<option>assa in list</option>";
									}
									else{
										echo "<option>assa not in list</option>";
									}
									
								}
							?>
						</select>
                    </div>
					<p>
                    <p for="exampleInputFile">Upload paper:</p>
                    <div class="form-group">

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" onchange="getFile()">
                                <label class="custom-file-label" for="exampleInputFile" id="uploadFile">
								<?php echo $filename[3];?></label>
                            </div>
                        </div>
                    </div>
					</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                            Back
                        </button>
                     <button type="button" id="author_saveEditPaper" style="float: right; color: white; margin-right: 10px;border-style: solid; border-color:#404e67;" class="blue_btn" data-toggle="modal" data-target="#saveModal">
                            Save
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

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Save Paper?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p class="deleteText">Are you sure you want to save?</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <input name="author_saveEditPaper" type="submit" style="float: right;background-color: #F7685B;color: white;border-style:solid;border-color:#F7685B;" class="blue_btn" value="Confirm save">
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
        $(".nav .nav-link").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2();
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
		
		function getFile(){
			var x = "<?php echo $filename[3];?>";
			document.getElementById("uploadFile").innerHTML = x;
		}
    </script>
	<?php
		
	?>

</body>

</html>