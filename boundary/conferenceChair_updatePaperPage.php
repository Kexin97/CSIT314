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
    <title>Conference Chair</title>
    <style>
        div {
            height: auto;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="getAllocatedPapersInfo();displaySearchList()">
<form method="POST">
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
                        Conference Chair Patform
                    </span>
                    <span class="platform_name brand-image-xl logo-xs" id="platformShort_name">
                        CC
                    </span>
                </div>

                <hr color="#EBEFF2" style="border:1; margin-top:35px; opacity: 0.8;">

                <nav class=" mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview " role="menu " data-accordion="false ">
                        <li class="nav-item active">
                            <a href="conferenceChair_allocatePaperPage.php?cc" class="nav-link">
                                <i class="nav-icon"><img src="../img/add.svg"></i>
                                <p class="navHeader">
                                    Allocated paper
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="conferenceChair_searchAllocatedPaperPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    View allocated paper
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="conferenceChair_updatePaperPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/search.svg"></i>
                                <p class="navHeader">
                                    Update paper status
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="conferenceChair_sendEmailPage.php" class="nav-link">
                                <i class="nav-icon"><img src="../img/email.png"></i>
                                <p class="navHeader">
                                    Send email
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr color="#EBEFF2" style="border:1; margin-top:10px; opacity: 0.8;">
                            <a href="conferenceChair_profilePage.php" class="nav-link ">
                                <i class="nav-icon"><img src="../img/nav_profile_icon.svg"></i>
                                <p class="navHeader">
                                    Profile

                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <div class="nav-link" style="cursor:pointer" onclick="signOut()">
                                <i class="nav-icon"><img src="../img/nav_logout_icon.svg"></i>
                                <p class="navHeader">
                                    Logout
                                </p>
                            </div>
                        </li>
                    </ul>
                    <!--<img src="img/nav_bk.svg" id="nav_bk" />-->
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper -->
        <div class="content-wrapper ">
            <div class="col-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                        <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                        <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Search paper</p>
                    </div>

                    <div class="card-body" style="display: flex;">
                        <label for="inputPaperName" class="searchLeft col-sm-2" style="width:130px;">Paper name:</label>
                        <select id="conferenceChair_viewPaperName" name="conferenceChair_viewPaperName" class="form-control select2 col-sm-4 inlineBlock" onchange="displayTableData()">
                            <!-- retrieve paper name from db -->
                            <option value="">Select paper name</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <table id="conferenceChair_searchPaper" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Paper ID</th>
                                    <th>Paper Name</th>
                                    <th>Accepted/Rejected</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="displayAllocatedPaperTable" name="displayAllocatedPaperTable">
                                <tr>
                                    <td>
                                        <!-- retrieve paper id -->
                                        <!-- 12345678 -->
                                    </td>
                                    <td>
                                        <!-- retrieve paper name -->

                                        <!-- PaperA -->
                                    </td>
                                    <td>
                                        <!-- retrieve paper reviewed/unreviewed -->

                                        <!-- PaperA -->
                                    </td>
                                    <td>
                                        <!-- <a href="conferenceChair_viewPaperPage.php"> -->
                                            <button type="button" class="detail_action_btn" data-toggle="modal"  data-target='#conferenceChair_updateStatusPaperPage'>
                                            Details
                                        </button>
                                        <!-- </a> -->
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index:1060">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <p style="font-size:20px; color: #109CF1;margin-top: 25px; margin-left: 10px; display: inline;">Save status?</p>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                </div>
                <div class="modal-body">
                    <p class="deleteText">Are you sure you want to save?</p>
                    <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button type="submit" style="float: right;background-color: #F7685B;color: white;" class="blue_btn" name="saveStatus">
                        Confirm save
                    </button>
                </div>
                <div class="modal-footer" style="border: none;">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="conferenceChair_updateStatusPaperPage" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                        <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                            <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                            <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">View paper detail</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <p class="col-sm-4">Paper ID:</p>
                                <div class="col-sm-4">
                                    <!-- retieve paper id -->
                                    <label id="conferenceChair_viewPaperID">
                                                <!-- 12345678 -->
                                                <text id="displayPaperID"></text>
                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Paper name:</p>
                                <div class="col-sm-4">
                                    <!-- retieve paper name -->
                                    <label id="conferenceChair_viewPaperName">
                                                <!-- PaperA -->
                                                <text id="displayPaperName"></text>
                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Conference:</p>
                                <div class="col-sm-4">
                                    <!-- retieve paper conference -->

                                    <label id="conferenceChair_viewPaperConference">
                                                <!-- Conference1 -->
                                                <text id="displayPaperConference"></text>
                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Author:</p>
                                <div class="col-sm-4">
                                    <!-- retieve author name -->
                                    <label class="conferenceChair_viewPaperAuthor">
                                                <!-- Author1 -->
                                                <text id="displayPaperAuthor"></text>
                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Accept/reject paper:</p>
                                <div class="col-sm-4">
                                    <select id="conferenceChair_acceptRejectPaper" name="conferenceChair_acceptRejectPaper" class="form-control select2 inlineBlock">
                                <!-- retrieve conference name from db -->
                                <option value="accepted">Accept</option>
                                <option value="rejected">Reject</option>
                                </select>
                                </div>
                            </div>
                            <div class="author_viewPaperEditDetail_btn">
                                <button type="button" id="conferenceChair_editDetail" class="blue_btn" data-toggle="modal" data-target="#saveModal">
                                 Update status
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                        <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                            <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                            <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">Paper review and rating</p>
                        </div>
                        <div class="card-body">
                            <div>
                                <input type="text" id="clickedPaperID" name="clickedPaperID" hidden>
                            </div>
                            <div class="row">
                            <div style="display: flex;">
                                <label for="inputPaperName" class="searchLeft col-sm-2" >Reviewer name:</label>
                                <select id="conferenceChair_viewUpdatePaperName" name="conferenceChair_viewUpdatePaperName" class="form-control select2 col-sm-4 inlineBlock" onchange="checkWinnerRatingsAndReviews()">
                                    <!-- retrieve paper name from db -->
                                    
                                </select>
                            </div>
                                <p class="col-sm-4">Paper rating:</p>
                                <div class="col-sm-4">
                                    <!-- retrieve paper rating -->
                                    <label id="conferenceChair_viewPaperRating">
                                                <!-- 2.5 -->
                                                <text id="displayPaperRating"></text>
                                            </label>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-4">Paper review:</p>
                                <div class="col-sm-7">
                                    <!-- retrieve the review of paper-->
                                    <p id="displayPaperReview">
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


                        </div>
                    </div>
                   <button type="button" style="float: right" class="white_btn" data-dismiss="modal" aria-label="Close">
                            Back
                        </button>
  
                     <!-- <button type="button" class="blue_btn" data-toggle="modal" data-target="#saveModal" id="author_saveEditPaper">
                            Save
                        </button> -->
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
            $('#conferenceChair_searchPaper').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": false,
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
        function signOut(){
            document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
            var confirmMessage = "Are you sure you want to sign out?";
            if (confirm(confirmMessage) == true) {
                window.location.replace("../boundary/login_page.php");
            }
        }

        var allPaperID = [];
        var allPaperRating = [];
        var allPaperReview = [];
        var allPaperReviewerName = [];
        var allPaperEmail= [];
        var displayPaperName = [];
        var displayPaperID = [];
        var displayPaperStatus = [];
        var displayPaperAuthor = [];
        var searchList = [];
        function getAllocatedPapersInfo(){
            <?php require_once("../controller/updateAllocatedPaperStatusController.php"); ?>
            $("#displayAllocatedPaperTable tr").remove(); 
            allPaperID = [];
            allPaperRating = [];
            allPaperReview = [];
            allPaperReviewerName = [];
            allPaperEmail= [];
            displayPaperName = [];
            displayPaperID = [];
            displayPaperStatus = [];
            displayPaperAuthor = [];
            var test = "<?php $controller = new updateAllocatedPaperStatusController();?>";
            
            var test2 = "<?php $result1 = $controller->viewAllPaper();?>";
            var getAllocatedPaperCount = "<?php echo count($result1[0])?>";
            
            var getPaperID = "<?php $arrayPaperID_to_json = json_encode(($result1[0]))?>"
            var getPaperName = "<?php $arrayPaperName_to_json = json_encode(($result1[1]))?>"
            var getPaperStatus = "<?php $arrayPaperStatus_to_json = json_encode(($result1[2]))?>"
            var getPaperAuthor = "<?php $arrayPaperAuthor_to_json = json_encode(($result1[3]))?>"
            var getPaperRating = "<?php $arrayPaperRating_to_json = json_encode(($result1[4]))?>"
            var getPaperReview = "<?php $arrayPaperReview_to_json = json_encode(($result1[5]))?>"
            var getPaperReviewerName = "<?php $arrayPaperReviewerName_to_json = json_encode(($result1[6]))?>"
            var getPaperReviewerEmail = "<?php $arrayPaperReviewerEmail_to_json = json_encode(($result1[7]))?>"

            var fromPHP = <?php echo $arrayPaperID_to_json ?>;
            var fromPHP1 = <?php echo $arrayPaperName_to_json ?>;
            var fromPHP2 = <?php echo $arrayPaperStatus_to_json ?>;
            var fromPHP3 = <?php echo $arrayPaperAuthor_to_json ?>;
            var fromPHP4 = <?php echo $arrayPaperRating_to_json ?>;
            var fromPHP5 = <?php echo $arrayPaperReview_to_json ?>;
            var fromPHP6 = <?php echo $arrayPaperReviewerName_to_json ?>;
            var fromPHP7 = <?php echo $arrayPaperReviewerEmail_to_json ?>;
            
            for(var x=0; x<getAllocatedPaperCount; x++){
                allPaperID.push(fromPHP[x]);
                allPaperRating.push(fromPHP4[x]);
                allPaperReview.push(fromPHP5[x]);
                allPaperReviewerName.push(fromPHP6[x]);
                allPaperEmail.push(fromPHP7[x]);
            }
            var tableID = document.getElementById("displayAllocatedPaperTable");
            for(var x=0; x<getAllocatedPaperCount; x++){
                
                if(!searchList.includes(fromPHP1[x])){
                    searchList.push(fromPHP1[x]);
                    displayPaperID.push(fromPHP[x]);
                    displayPaperName.push(fromPHP1[x]);
                    displayPaperStatus.push(fromPHP2[x]);
                    displayPaperAuthor.push(fromPHP3[x]);
                }
            }
            for(var x=0; x<searchList.length; x++){
                $("#displayAllocatedPaperTable").append("<tr>"+
                "<td>"+displayPaperID[x]+"</td>" +
                "<td>"+displayPaperName[x]+"</td>" +
                "<td>"+displayPaperStatus[x]+"</td>" +
                '<td>'+
                '<button type="button" class="detail_action_btn" id="' + displayPaperID[x]  +'" name="' + displayPaperID[x]  +'" data-toggle="modal" data-target="#conferenceChair_updateStatusPaperPage" onclick="paperDetails(this.id)">'+
                'Details</button></td>'+
                "</tr>");
            }
        }

        function displaySearchList(){
            for(var x=0; x<searchList.length; x++){
                var option = document.createElement("option");
                var optionText = searchList[x];
                var optionValue = searchList[x];
                var select = document.getElementById("conferenceChair_viewPaperName");
                $('#conferenceChair_viewPaperName').append(new Option(optionText, optionValue));
            }
        }

        function displayTableData(){
            var searchRequirement = document.getElementById("conferenceChair_viewPaperName").value;
            $("#displayAllocatedPaperTable tr").remove(); 
            for(var x=0; x<searchList.length; x++){
                if(displayPaperName[x].includes(searchRequirement)){
                    $("#displayAllocatedPaperTable").append("<tr>"+
                    "<td>"+displayPaperID[x]+"</td>" +
                    "<td>"+displayPaperName[x]+"</td>" +
                    "<td>"+displayPaperStatus[x]+"</td>" +
                    '<td>'+
                        '<button type="button" class="detail_action_btn" id="' + displayPaperID[x]  +'" name="' + displayPaperID[x]  +'" data-toggle="modal" data-target="#conferenceChair_updateStatusPaperPage" onclick="paperDetails(this.id)">'+
                        'Details</button></td>'+
                    "</tr>");
                }
            }
            
        }

        function paperDetails(paperID){
            document.getElementById("clickedPaperID").value = paperID;
            var tempPaperID = document.getElementById("displayPaperID");
            var tempPaperName = document.getElementById("displayPaperName");
            var tempPaperAuthor = document.getElementById("displayPaperAuthor");
            var selectElement = document.getElementById('conferenceChair_viewUpdatePaperName');
            selectElement.innerHTML = '';
            var optionText = "Select reviewer name";
            var optionValue = "";
            $('#conferenceChair_viewUpdatePaperName').append(new Option(optionText, optionValue));
            for(var x=0; x<allPaperID.length; x++){
                if(paperID == allPaperID[x]){
                    optionText = allPaperReviewerName[x];
                    optionValue = allPaperID[x] + "|" + allPaperEmail[x];
                    var select = document.getElementById("conferenceChair_viewUpdatePaperName");
                    $('#conferenceChair_viewUpdatePaperName').append(new Option(optionText, optionValue));
                }
            }
            for(var x=0; x<searchList.length;x++){
                if(displayPaperID[x] == paperID){
                    tempPaperID.innerHTML = displayPaperID[x];
                    tempPaperName.innerHTML = displayPaperName[x];
                    tempPaperAuthor.innerHTML = displayPaperAuthor[x];
                }
            }
            
            checkWinnerRatingsAndReviews();
        }

        function checkWinnerRatingsAndReviews(){
            var tempPaperRating = document.getElementById("displayPaperRating");
            var tempPaperReview = document.getElementById("displayPaperReview");
            tempPaperRating.innerHTML = "";
            tempPaperReview.innerHTML = "";
            var checkReviewerDetails = document.getElementById("conferenceChair_viewUpdatePaperName").value;
            var splitDetails = checkReviewerDetails.split("|");
            var getPaperID = splitDetails[0];
            var getReviewerEmail = splitDetails[1];
            for(var x=0; x<allPaperID.length; x++){
                if(allPaperID[x] == getPaperID && allPaperEmail[x] == getReviewerEmail){
                    tempPaperRating.innerHTML = allPaperRating[x];
                    tempPaperReview.innerHTML = allPaperReview[x];
                }
            }
        }
    </script>
    <?php
        require_once("../controller/updateAllocatedPaperStatusController.php");
        //$_POST['clickedPaperID']
        if(isset($_POST['saveStatus'])){
            $controller = new updateAllocatedPaperStatusController();
            $result = $controller->updatePaperCurrentStatus($_POST['clickedPaperID'], $_POST['conferenceChair_acceptRejectPaper']);
            if($result["statusResult"] == TRUE){
                echo "<script>alert('Successfully udpated paper status');</script>";
            }
            else{
                $fail2 = $result["statusErrorMsg"];
                echo "<script>alert('Failed to update paper status');</script>";
            }
        }
    ?>
</body>
</html>