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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <!-- <i class="fa-solid fa-bell"></i> -->
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                        <span class="sss">15</span>


                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">
                            <span id="author_noOfEmailNoti">
                                4
                            </span> Notifications
                        </span>
                        <div class="dropdown-divider"></div>
                        <a href="author_emailPage.php" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>
                            <span id="author_noOfEmailNoti">
                                4
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
                        <li class="nav-item active">
                            <a href="author_emailPage.php" class="nav-link active">
                                <i class="nav-icon"><img src="../img/email.png"></i>
                                <p class="navHeader">
                                    View email
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr color="#EBEFF2" style="border:1; margin-top:10px; opacity: 0.8;">
                            <a href="author_profilePage.php" class="nav-link ">
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
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header" style="padding-top: 0; padding-bottom: 0; background-color: white;">
                        <p style="font-size:20px; color: black; margin-left: 10px; margin-top: 25px;">
                            View email</p>
                    </div>
                    <div style="padding: 30px;">
                        <div class="form-group">

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
            $(".nav .nav-link ").on("click ", function() {
                $(".nav ").find(".active ").removeClass("active ");
                $(this).addClass("active ");
            });

            $(function() {

                $('#searchUser').DataTable({
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
        </script>
</body>

</html>