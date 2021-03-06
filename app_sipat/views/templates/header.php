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
                        <a href="<?= BASEURL; ?>">
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
                                        <img src="<?= BASEURL; ?>\files\default.png" class="img-radius" alt="User-Profile-Image">
                                        <span><?= $this->helper->user('nama_lengkap'); ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <!-- <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li> -->
                                        <!-- tombol modal ubah data -->
                                        <li>
                                            <a class="waves-effect md-trigger" href="#" data-modal="modal-11">
                                                <i class="fas fa-unlock-alt"></i> Ubah Password
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
            <!-- form untuk ubah password -->
            <div class="md-modal md-effect-11" id="modal-11">
                <div class="md-content">
                    <h3 class="bg-danger label_tambah">Form Ubah Password</h3>
                    <div>
                        <form class="form_ubah_password" action="<?= BASEURL; ?>/ubah_password" method="POST">
                            <input type="hidden" name="id" id="id">
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <div class="input-group input-group-danger tas">
                                        <input autocomplete="off" type="password" id="password_awal" name="password_awal" class="form-control" placeholder="Password awal">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <div class="input-group input-group-danger">
                                        <input autocomplete="off" type="password" id="password" name="password" class="form-control" placeholder="Password baru">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <div class="input-group input-group-danger">
                                        <input autocomplete="off" type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi password baru">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-danger btn-block btn-round tombon_tambah">Ubah</button>
                                    <button type="button" class="btn btn-danger btn-block btn-round mb-3 waves-effect md-close">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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