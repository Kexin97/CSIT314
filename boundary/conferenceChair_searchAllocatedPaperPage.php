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
        <!-- Content Wrapper -->
        <div class="content-wrapper ">
            <div class="col-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 0;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 20px; padding-top: 20px; background-color: white;">
                        <div style="float:left;width: 3px;height: 28px; background: #109CF1;"></div>
                        <p style="font-size:20px; color: black;margin-top: 25px; margin-left: 10px; display: inline;">View allocated paper</p>
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
                        <table id="conferenceChair_searchAllocatedPaper" class="table table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Paper ID</th>
                                    <th>Paper Name</th>
                                    <th>Author Name(s)</th>
                                    <th>Reviewer Name(s)</th>
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
                                        <!-- retrieve paper author name -->

                                        <!-- PaperA -->
                                    </td>
                                    <td>
                                        <!-- retrieve paper reviewer name -->

                                        <!-- PaperA -->
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        <?php require_once("../controller/viewAllocatedPaperController.php");?>
        $(".nav .nav-link").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });

        $(function() {
            $('#conferenceChair_searchAllocatedPaper').DataTable({
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

        var allPaperID = [];
        var allPaperName = [];
        var allPaperAuthor = [];
        var allPaperReviewer = [];
        var searchList = [];
        function getAllocatedPapersInfo(){
            <?php require_once("../controller/viewAllocatedPaperController.php"); ?>
            $("#displayAllocatedPaperTable tr").remove(); 
            allPaperID = [];
            allPaperName = [];
            allPaperAuthor = [];
            allPaperReviewer = [];
            var test = "<?php $controller = new viewAllocatedPaperController();?>";
            var test2 = "<?php $result1 = $controller->viewAllocatedPapersController();?>";
            
            var getAllocatedPaperCount = "<?php echo count($result1[0])?>";
            
            var getPaperID = "<?php $arrayPaperID_to_json = json_encode(($result1[0]))?>"
            var getPaperName = "<?php $arrayPaperName_to_json = json_encode(($result1[1]))?>"
            var getPaperAuthor = "<?php $arrayPaperAuthor_to_json = json_encode(($result1[2]))?>"
            var getPaperReviewer = "<?php $arrayPaperReviewer_to_json = json_encode(($result1[3]))?>"

            var fromPHP = <?php echo $arrayPaperID_to_json ?>;
            var fromPHP1 = <?php echo $arrayPaperName_to_json ?>;
            var fromPHP2 = <?php echo $arrayPaperAuthor_to_json ?>;
            var fromPHP3 = <?php echo $arrayPaperReviewer_to_json ?>;
            for(var x=0; x<getAllocatedPaperCount; x++){
                allPaperID.push(fromPHP[x]);
                allPaperName.push(fromPHP1[x]);
                allPaperAuthor.push(fromPHP2[x]);
                allPaperReviewer.push(fromPHP3[x]);
            }
            var tableID = document.getElementById("displayAllocatedPaperTable");
            for(var x=0; x<allPaperID.length; x++){
                if(!searchList.includes(allPaperName[x])){
                    searchList.push(allPaperName[x]);
                }
                $("#displayAllocatedPaperTable").append("<tr>"+
                "<td>"+allPaperID[x]+"</td>" +
                "<td>"+allPaperName[x]+"</td>" +
                "<td>"+allPaperAuthor[x]+"</td>" +
                "<td>"+allPaperReviewer[x]+"</td>" +
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
            for(var x=0; x<allPaperID.length; x++){
                if(allPaperID[x].includes(searchRequirement) || allPaperName[x].includes(searchRequirement)
                || allPaperAuthor[x].includes(searchRequirement)){
                    $("#displayAllocatedPaperTable").append("<tr>"+
                    "<td>"+allPaperID[x]+"</td>" +
                    "<td>"+allPaperName[x]+"</td>" +
                    "<td>"+allPaperAuthor[x]+"</td>" +
                    "<td>"+allPaperReviewer[x]+"</td>" +
                    "</tr>");
                }
            }
        }
        
    </script>
</body>

</html>