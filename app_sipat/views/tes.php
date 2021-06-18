<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $data['title']; ?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Script Jquery -->
    <!-- <script src="<?= BASEURL; ?>/assets/saya/jquery.min.js"></script> -->
    <script src="<?= BASEURL; ?>/assets/saya/lib/jquery.js"></script>
    <script src="<?= BASEURL; ?>/assets/saya/my_script.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL; ?>\assets\files\fontawesome-free\css\all.min.css">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= BASEURL; ?>\assets\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\bower_components\sweetalert\css\sweetalert.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\icon\feather\css\feather.css">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\css\component.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\assets\files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img height="50px" width="50px" class="img-fluid" src="<?= BASEURL; ?>\files\unpatti.png" alt="Theme-Logo">&nbsp&nbsp&nbsp&nbspSIPAT
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= BASEURL; ?>\assets\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?= $this->helper->user('nama_lengkap'); ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="return confirm('Logout?');" href="<?= LOGOUT; ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">


                            <?php if ($this->helper->in_groups('admin')) { ?>
                                <!-- Menu Untuk Admin  Star -->
                                <div class="pcoded-navigatio-lavel">Menu Admin</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?= BASEURL; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Beranda</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/ajukan_barang"">
                                        <span class=" pcoded-micon"><i class="fas fa-share-square"></i></span>
                                            <span class="pcoded-mtext">Ajukan Barang</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/belum_ditinjau"">
                                        <span class=" pcoded-micon"><i class="fas fa-bell"></i></span>
                                            <span class="pcoded-mtext">Belum Ditinjau</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/dalam_proses">
                                            <span class="pcoded-micon"><i class="fas fa-spinner"></i></span>
                                            <span class="pcoded-mtext">Sedang Diproses</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pengajuan">
                                            <span class="pcoded-micon"><i class="fas fa-tasks"></i></span>
                                            <span class="pcoded-mtext">Berhasil Diproses</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pembatalan">
                                            <span class="pcoded-micon"><i class="fas fa-exclamation"></i></span>
                                            <span class="pcoded-mtext">Riwayat Pembatalan</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/kelola_users">
                                            <span class="pcoded-micon"><i class="fas fa-users"></i></span>
                                            <span class="pcoded-mtext">Kelola Users</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a onclick="return confirm('Logout?');" href="<?= LOGOUT; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                                            <span class="pcoded-mtext">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Menu Untuk Admin  End -->
                            <?php } else if ($this->helper->in_groups('operator')) { ?>
                                <!-- Menu Untuk Operator  Star -->
                                <div class="pcoded-navigatio-lavel">Menu Operator</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?= BASEURL; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Beranda</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/belum_ditinjau"">
                                        <span class=" pcoded-micon"><i class="fas fa-bell"></i></span>
                                            <span class="pcoded-mtext">Belum Ditinjau</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/dalam_proses">
                                            <span class="pcoded-micon"><i class="fas fa-spinner"></i></span>
                                            <span class="pcoded-mtext">Sedang Diproses</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pengajuan">
                                            <span class="pcoded-micon"><i class="fas fa-tasks"></i></span>
                                            <span class="pcoded-mtext">Berhasil Diproses</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pembatalan">
                                            <span class="pcoded-micon"><i class="fas fa-exclamation"></i></span>
                                            <span class="pcoded-mtext">Riwayat Pembatalan</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a onclick="return confirm('Logout?');" href="<?= LOGOUT; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                                            <span class="pcoded-mtext">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Menu Untuk Operator  End -->
                            <?php } else if ($this->helper->in_groups('user')) { ?>
                                <!-- Menu Untuk Users  Star -->
                                <div class="pcoded-navigatio-lavel">Menu Users</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?= BASEURL; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Beranda</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/ajukan_barang">
                                            <span class="pcoded-micon"><i class="fas fa-share-square"></i></span>
                                            <span class="pcoded-mtext">Ajukan Barang</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/belum_ditinjau">
                                            <span class="pcoded-micon"><i class="fas fa-bell"></i></span>
                                            <span class="pcoded-mtext">Belum Ditinjau</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/dalam_proses">
                                            <span class="pcoded-micon"><i class="fas fa-spinner"></i></span>
                                            <span class="pcoded-mtext">Sedang Diproses</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pembatalan">
                                            <span class="pcoded-micon"><i class="fas fa-exclamation"></i></span>
                                            <span class="pcoded-mtext">Pengajauan yang Ditolak</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= BASEURL; ?>/riwayat_pengajuan">
                                            <span class="pcoded-micon"><i class="fas fa-history"></i></span>
                                            <span class="pcoded-mtext">Riwayat Pengajuan</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a onclick="return confirm('Logout?');" href="<?= LOGOUT; ?>">
                                            <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                                            <span class="pcoded-mtext">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Menu Untuk Users  end -->
                            <?php } else {
                                $this->helper->redirect(LOGOUT);
                            } ?>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- ------------------------------------------------------------------------------- -->

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <!-- Solid Alert start -->
                                                            <?php Flasher::flash(); ?>
                                                            <!-- Solid Alert end -->

                                                            <div class="col-8">
                                                                <h4 class="text-white">30</h4>
                                                                <h6 class="text-white m-b-0">Belum Ditinjau</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-1" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">290</h4>
                                                                <h6 class="text-white m-b-0">Telah Ditinjau</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">145</h4>
                                                                <h6 class="text-white m-b-0">Dalam Pengiriman</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">500</h4>
                                                                <h6 class="text-white m-b-0">Berhasil Diterima</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- ------------------------------------------------------------------------------- -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\sweetalert\js\sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\modal.js"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\modalEffects.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\classie.js"></script>
    <!-- data-table js -->
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\data-table\js\jszip.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\data-table\extensions\responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\bower_components\chart.js\js\Chart.js"></script>
    <!-- amchart js -->
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\widget\amchart\serial.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\widget\amchart\light.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\SmoothScroll.js"></script>
    <script src="<?= BASEURL; ?>\assets\files\assets\js\pcoded.min.js"></script>
    <!-- custom js -->
    <script src="<?= BASEURL; ?>\assets\files\assets\pages\data-table\extensions\responsive\js\responsive-custom.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\script.js"></script>

    <script src="<?= BASEURL; ?>\assets\files\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>\assets\files\assets\js\script.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- validasi jquery -->
    <!-- <script src="<? //= BASEURL; 
                        ?>/assets/saya/lib/jquery.js"></script> -->
    <script src="<?= BASEURL; ?>/assets/saya/dist/jquery.validate.js"></script>
</body>

</html>