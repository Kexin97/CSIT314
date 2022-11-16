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
    <title>Author</title>
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
		
		//for update use(AuthorList)
		require("../controller/viewUserController.php");

		$acontrol = new ViewAccountController();
		$alist = $acontrol->authList();
		
		//for get review and rating
		require("../controller/viewRatingController.php");
		$paperName = $list[0]["paper_name"];
		
		$rcontrol = new ViewRatingController();
		$ratinglist = $rcontrol->reviewRatingList($paperName);
		
		
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
                                    View paper
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
            <div class="col-12">
                <div class="col-12">
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
                                <p class="col-sm-4">Author:</p>
                                <div class="col-sm-4">
                                    <!-- retieve author name -->
                                    <label class="author_viewPaperAuthor">
										<?php 
										$author = explode(", ",$list[0]["author"] );
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
							
							<button type="button" id="author_editDetail" class="blue_btn" data-toggle="modal" data-target="#author_editPaperModal" <?php if($list[0]["paper_status"]!=""){echo "disabled";}?>>
                                        Edit Detail
                                        </button>
										<button type="button" class="red_btn" data-toggle="modal" data-target="#deletePapereModal" <?php if($list[0]["paper_status"]!=""){echo "disabled";}?>>
                                        Delete paper
                                        </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                        <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                            <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                            <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Paper review and rating</p>
                        </div>
                        <div class="card-body">
							<table id="author_PaperRating" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%;">
								<thead>
									<tr>
										<th style="width:10%">Paper rating</th>
										<th style="width:60%">Paper review</th>
										<th style="width:15%">Reviewer</th>
										<th style="width:15%">Review rate</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								if ($ratinglist[0]["result"]!=FALSE):
								for($i=0; $i<count($ratinglist);$i++):?>
									<tr>
										<td><?php echo $ratinglist[$i]["bidWinnerRating"]; ?></td>
										<td style="word-break: break-word;white-space: normal">
											<?php echo $ratinglist[$i]["bidWinnerReview"]; ?></td>
										<td><?php echo $ratinglist[$i]["bidWinnerName"]; ?></td>
										<td><?php 
											if($ratinglist[$i]["author_rating"]==9)
											{
												echo '<button onclick="bidIDCookie('. $ratinglist[$i]["bidID"] .')" data-toggle="modal" data-target="#addReviewModal" id="author_addReviewRating" class="blue_btn author_viewPaperEditDetail_btn">
												Add review rating</button>'; 
											}
											else {
												echo $ratinglist[$i]["author_rating"];
											}
											
											?>
											</td>
									</tr>
									<?php endfor; endif;?>
								</tbody>
							</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<form method="POST" enctype="multipart/form-data">
	<div class="modal fade" id="addReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" style="width:150%;">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Add Rating</p>
                    
                </div>
				<div class="modal-body">
					<div class="card-body table-responsive pad">

						<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-secondary author_viewPaperAddRating active">
								<input type="radio" name="author_viewPaperAddRating" id="author_viewPaperAddRating3" value="3" autocomplete="off" checked> 3<br>(strong accept)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio"  name="author_viewPaperAddRating" id="author_viewPaperAddRating2" value="2" autocomplete="off"> 2<br>(accept)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio"  name="author_viewPaperAddRating" id="author_viewPaperAddRating1" value="1" autocomplete="off"> 1<br>(weak accept)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio" name="author_viewPaperAddRating" id="author_viewPaperAddRating0" value="0" autocomplete="off">0<br>(borderline paper)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio" name="author_viewPaperAddRating" id="author_viewPaperAddRatingMinus1" value="-1" autocomplete="off"> -1 <br>(weak reject)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio" name="author_viewPaperAddRating" id="author_viewPaperAddRatingMinus2" value="-2" autocomplete="off"> -2<br>(reject)
							</label>
							<label class="btn btn-secondary author_viewPaperAddRating">
								<input type="radio"  name="author_viewPaperAddRating" id="author_viewPaperAddRatingMinus3" value="-3" autocomplete="off"> -3<br>(strong reject)
							</label>
						</div>
                        <div class="author_viewPaperEditDetail_btn">
                        <button type="button" id="author_addReviewRating" class="blue_btn" data-toggle="modal" data-target="#addReviewRatingModal">
							 Add review rating
						</button>
						<button type="button" class="white_btn" data-dismiss="modal" aria-label="Close">
                            Cancel
						</button>

                                        </div>
					</div>
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
                    <input name="author_addRating" value="Confirm save" type="submit" style="float: right;background-color: #F7685B;color: white;" class="blue_btn">
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>
	</form>

    <div class="modal fade" id="deletePapereModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Delete Paper?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
				<form method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <p>Paper name:&nbsp;</p>
                    <div class="detail">
                        <!-- get userFullName from DB-->
                        <label class="author_deletePaperName"><?php echo $list[0]["paper_name"]; ?></label>
                    </div>

                    <p class="deleteText">Deleting this paper mean you would be able to resubmit the correct version.</p>


                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                            Cancel
                    </button>
                    <input type="submit" id="author_confirmDletion" name="author_confirmDletion" style="float: right;background-color: #F7685B;color: white;" class="blue_btn" value="Confirm Deletion">
                </div>
				</form>
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
						<?php echo '<input type="text" class="form-control" id="author_editPaperName" name="author_editPaperName" value="'.$list[0]["paper_name"].'">'; ?>
                        

                    </div>
                    
                    <p class="searchLeft">Author </p>
                    <div class="detail">
                        <select id="author_editAuthorName" name="author_editAuthorName[]" class="form-control select2 col-sm-4" multiple="multiple" style="width: 100% !important;">
                                <!-- retrieve author name from db -->
							<?php 
								$authorSel = explode(",",$list[0]["author"] );
								$count = count($alist);
								for($i=0; $i<count($alist);$i++){
									for($j=0;$j<count($authorSel);$j++){
										if($alist[$i]["account_email"]== $_COOKIE["accountEmail"] && $authorSel[$j]==$_COOKIE["accountEmail"]){
											array_splice($alist,$i,1);
											$count--;
											$i--;
											break;
										}
										else if($alist[$i]["account_email"] == $authorSel[$j]){
											echo "<option value='".$authorSel[$j]."' selected>" . $alist[$i]["account_email"]."</option>";
											array_splice($alist,$i,1);
											$count--;
											$i--;
											break;
										}
									}
								}
								
								
								for($i=0; $i<$count;$i++){
									echo "<option value='".$alist[$i]["account_email"]."'>" . $alist[$i]["account_email"]."</option>";
									
								}
								
							?>
						</select>
                    </div>
					<p>
                    
                    <p for="exampleInputFile" class="searchLeft">Upload paper:</p>
                    <div class="detail">

                        <div class="input-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="author_updatePaperUploadFile" name="uploadFile" id="uploadFile"><?php echo $filename[3];?></label>
								<input type="file" class="custom-file-input" id="author_updatePaperUploadFile" onchange="getFile()" name="author_updatePaperUploadFile" accept=".pdf">
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
			$('#author_PaperRating').DataTable({
                "paging": false,
                "lengthChange": true,
                "searching": false,
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
		
		function getFile(){
			var x = document.getElementById("author_updatePaperUploadFile");
			var filename = x.files.item(0).name;
			document.getElementById("uploadFile").innerHTML = filename;
			}
			
		function bidIDCookie(id){
		document.cookie = "bid_ID = "+id;
		}
    </script>
	<?php
		require ("../controller/updatePaperController.php");
		require ("../controller/deletePaperController.php");
		require ("../controller/authorAddRatingController.php");
		
		if(isset($_POST["author_saveEditPaper"]) && isset ($_FILES["author_updatePaperUploadFile"])){
            $paper_name = $_POST["author_editPaperName"];
			$paper_author = $_COOKIE["accountEmail"];
			$other_author = $_POST["author_editAuthorName"];
			$paper_filename = $_FILES["author_updatePaperUploadFile"]["name"];
			$paper_ID = $list[0]["paper_ID"];
			
			
			//change other_author from array to string
			foreach ($other_author as $author){
				if ($author != $_COOKIE["accountEmail"]){
					$paper_author = $paper_author.", " . $author;
				}
			}
			
			
			$controller = new updatePaperController();
			$result = $controller->updatePaper($paper_ID, $paper_name, $paper_author,$paper_filename);
				if($result["result"] != TRUE){
					$fail = $result["errorMsg"];
					displayFail($fail);
				}
				else{
					displaySuccess();
					echo '<script>window.location.href="../boundary/author_viewPaperPage.php";</script>';
				}
        }

        function displaySuccess() {
			echo '<script> alert("Paper has been successfully updated."); </script>';
        }

        function displayFail($fail) {
			echo '<script> alert("Failed to update paper: ' . $fail . '"); </script>';
        }
		
		if(isset($_POST["author_confirmDletion"])){
			$paper_ID = $_COOKIE["paper_ID"];
			
			$controller = new deletePaperController();
			$result = $controller->deletePaper($paper_ID);
			if($result["result"] != TRUE){
				$fail = $result["errorMsg"];
				echo '<script> alert("Failed to delete paper: ' . $fail . '"); </script>';
			}
			else{
				echo '<script> alert("Paper has been successfully deleted."); </script>';
				echo '<script>window.location.href="../boundary/author_searchPaperPage.php";</script>';
			}
		}
		
		if(isset($_POST["author_addRating"])){
			$bid_ID = $_COOKIE["bid_ID"];;
			$author_rate = $_POST["author_viewPaperAddRating"];
			
			$controller = new authorAddRatingController();
			$result = $controller->authorAddRating($bid_ID, $author_rate);
			
			if($result["result"] != TRUE){
				$fail = $result["errorMsg"];
				echo '<script> alert("Failed to rate review: ' . $fail . '"); </script>';
			}
			else{
				echo '<script> alert("Review has been successfully rated."); </script>';
				echo '<script>window.location.href="../boundary/author_viewPaperPage.php";</script>';
			}
		}
	?>

</body>

</html>