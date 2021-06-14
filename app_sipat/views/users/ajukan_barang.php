<style>
    .form_pengajuan label.error {
        /* .tes { */
        color: red;
        position: absolute;
        bottom: -30px;
        left: 50px;
        z-index: 100;
    }
</style>
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Halaman Pengajuan Barang</h4>
                            <!-- <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <!-- <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                            </li>
                            <li class="breadcrumb-item"><a href="index-1.htm">Group Add-ons</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Input Group Sizes & Colors card start -->
            <div class="card">
                <!-- <div class="card-header">
                    <h5>Input Group Sizes & Colors</h5>
                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

                </div> -->
                <div class="card-block">
                    <div class="row">
                        <!-- Solid Alert start -->
                        <?php flash(); ?>
                        <!-- Solid Alert end -->

                        <div class="col-sm-12">

                            <h4 class="sub-title text-center mb-5"><b>Form Pengajuan Barang</b></h4>
                            <form class="form_pengajuan" action="<?= BASEURL; ?>/ajukan_barang/tambah" method="POST">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-primary tas">
                                            <span class="input-group-addon">
                                                <i class="fas fa-adjust"></i>
                                            </span>
                                            <input autocomplete="off" type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama barang">
                                            <!-- <div class="tes">
                                                tes saja saijdbisbjxbj saDIABJKSAd DSFIJBNWEKD EWCDISJBNEWOKN
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-danger">
                                            <span class="input-group-addon">
                                                <i class="fas fa-quote-left"></i>
                                            </span>
                                            <input autocomplete="off" type="text" id="keperluan" name="keperluan" class="form-control" placeholder="Jenis keperluan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-warning">
                                            <span class="input-group-addon">
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </span>
                                            <input autocomplete="off" type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah item">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-primary">
                                            <span class="input-group-addon">
                                                <i class="icofont icofont-presentation"></i>
                                            </span>
                                            <select name="satuan" required class="form-control custom-select" id="satuan">
                                                <option selected>Jenis satuan</option>
                                                <option value="kg">Kilogram</option>
                                                <option value="Meter">Meter</option>
                                                <option value="Buah">Buah</option>
                                                <option value="Lembar">Lembar</option>
                                                <option value="Pack">Pack</option>
                                                <option value="Lusin">Lusin</option>
                                                <option value="Botol">Botol</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12 text-center">
                                        <button type="reset" class="btn btn-danger btn-block btn-round mb-3">Reset</button>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-round">Ajukan Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>
<!-- Main-body end -->
<div id="styleSelector">


</div>
</div>