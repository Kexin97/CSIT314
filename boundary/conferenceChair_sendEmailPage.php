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

<body class="hold-transition sidebar-mini layout-fixed" onload="loadPaperNames()">
<form method="POST">
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
                        Conference Chair Patform
                    </span>
                    <span class="platform_name brand-image-xl logo-xs" id="platformShort_name">
                        CC
                    </span>
                </div>

                <hr color="#EBEFF2" style="border:1; margin-top:35px; opacity: 0.8;">

                <nav class=" mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview " role="menu " data-accordion="false ">
                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon"><img src="../img/nav_home_icon.svg"></i>
                                <p class="navHeader">
                                    Home
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item active">
                            <a href="conferenceChair_allocatePaperPage.php" class="nav-link">
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
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 0; background-color: white;">
                        <p style="font-size:20px; color: black; margin-left: 10px; margin-top: 25px;">
                            Send Email</p>
                    </div>
                    <div class="card-body" style="display: flex;">
                        <label for="inputPaperName" class="searchLeft col-sm-2" style="width:130px;">Paper name:</label>
                        <select id="conferenceChair_viewPaperNames" name="conferenceChair_viewPaperNames" class="form-control select2 col-sm-4 inlineBlock" onchange="checkSubmitValidity();getEmailAddress()">
                            <!-- retrieve paper name from db -->
                            <option value="" selected disabled>Select paper name</option>
                        </select>                        
                    </div>
                    <div style="padding-left:20px;padding-bottom:30px">
                        <input type="button" style="background-color: #F7685B;color: white;width:608px" class="blue_btn" name="submitEmail" id="submitEmail" value="Send emails" onclick="sendEmail()">
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
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script type="text/javascript">
            (function(){
                emailjs.init("cJhx1LdoTkldeDHLa");
            })();
        </script>
        <script>
            $(".nav .nav-link ").on("click ", function() {
                $(".nav ").find(".active ").removeClass("active ");
                $(this).addClass("active ");
            });

            $(function() {

                $('#searchUser').DataTable({
                    "paging ": true,
                    "lengthChange ": true,
                    "searching ": true,
                    "ordering ": true,
                    "info ": true,
                    "autoWidth ": true,
                    "responsive ": true,
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

            var allPaperName = [];
            var allPaperStatus = [];
            function loadPaperNames(){
                <?php require_once("../controller/sendEmailController.php"); ?>
                allPaperName = [];
                allPaperStatus = [];
                var test = "<?php $controller = new sendEmailController();?>";
                var test2 = "<?php $result1 = $controller->getPaperNames();?>"; 
                var getPaperCount = "<?php echo count($result1[0])?>";
                var getPaperName = "<?php $arrayPaperName_to_json = json_encode(($result1[0]))?>"
                var getPaperStatus = "<?php $arrayPaperStatus_to_json = json_encode(($result1[1]))?>"
                var fromPHP = <?php echo $arrayPaperName_to_json ?>;
                var fromPHP1 = <?php echo $arrayPaperStatus_to_json ?>;
                for(var x=0; x<getPaperCount; x++){
                    allPaperName.push(fromPHP[x]);
                    allPaperStatus.push(fromPHP1[x]);
                }
                for(var x=0; x<allPaperName.length; x++){
                    var optionText = allPaperName[x];
                    var optionValue = allPaperName[x];
                    $('#conferenceChair_viewPaperNames').append(new Option(optionText, optionValue));
                }
                checkSubmitValidity();
            }

            function checkSubmitValidity(){
                if(document.getElementById("conferenceChair_viewPaperNames").value == ""){
                    document.getElementById("submitEmail").disabled = true;
                    document.getElementById("submitEmail").style.backgroundColor = "grey";
                }
                else{
                    document.getElementById("submitEmail").disabled = false;
                    document.getElementById("submitEmail").style.backgroundColor = "#F7685B";
                }
            }

            var authorEmails = [];
            var paperNameArray = [];
            var viewSelectedEmails = [];
            var splitEmail;
            var paperCurrentStatus;
            function getEmailAddress(){
                authorEmails= [];
                paperNameArray = [];
                viewSelectedEmails = [];
                var test = "<?php $controller = new sendEmailController();?>";
                var test2 = "<?php $result1 = $controller->getEmails();?>";
                var getEmailCount = "<?php echo count($result1[0])?>";
                var getPaperReviewerEmail = "<?php $arrayPaperReviewerEmail_to_json = json_encode(($result1[0]))?>"
                var getPaperName = "<?php $arrayPaperNames_to_json = json_encode(($result1[1]))?>"

                var fromPHP = <?php echo $arrayPaperReviewerEmail_to_json ?>;
                var fromPHP1 = <?php echo $arrayPaperNames_to_json ?>;
                //console.log(fromPHP);
                for(var x=0; x<getEmailCount; x++){
                    authorEmails.push(fromPHP[x]);
                    paperNameArray.push(fromPHP1[x]);
                }

                for(var x=0; x<paperNameArray.length; x++){
                    if(paperNameArray[x] == document.getElementById("conferenceChair_viewPaperNames").value){
                        splitEmail = authorEmails[x].split(", ");
                        for(var y=0; y<splitEmail.length; y++){
                            viewSelectedEmails.push(splitEmail[y]);
                        }
                    }
                }
                console.log(viewSelectedEmails);
                console.log(allPaperStatus);
                console.log(document.getElementById("conferenceChair_viewPaperNames").value);

                
                for(var y=0; y<allPaperName.length; y++){
                    if(allPaperName[y] == document.getElementById("conferenceChair_viewPaperNames").value){
                        paperCurrentStatus = allPaperStatus[y];
                        break;
                    }
                }
                console.log("CS: " + paperCurrentStatus);
            }

            function sendEmail(){
                const serviceID = "service_4rio2bo";
                const templateID = "template_zei5jb8";
                
                for(var x=0; x<viewSelectedEmails.length; x++){
                    console.log("Email: " + viewSelectedEmails[x]);
                    var params = {
                        inputPaperName: document.getElementById("conferenceChair_viewPaperNames").value,
                        inputPaperStatus: paperCurrentStatus,
                        inputEmail: viewSelectedEmails[x]
                    }
                    //Send email
                    emailjs.send(serviceID, templateID, params).then(res=>{
                        console.log(res);
                    })
                    .catch(err=>alert(err));
                } 
                alert("Emails sent!");
            }
        </script>
        <?php
        ?>
    </body>
</html>