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

                        <div class="col-sm-12">
                            <h4 class="sub-title text-center mb-5"><b>Form Pengajuan Barang</b></h4>
                            <form action="<?= BASEURL; ?>/ajukan_barang/tambah" method="POST">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-primary">
                                            <span class="input-group-addon">
                                                <i class="fas fa-adjust"></i>
                                            </span>
                                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama barang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-danger">
                                            <span class="input-group-addon">
                                                <i class="fas fa-quote-left"></i>
                                            </span>
                                            <input type="text" name="keperluan" class="form-control" placeholder="Jenis keperluan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-warning">
                                            <span class="input-group-addon">
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </span>
                                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah item">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-success">
                                            <span class="input-group-addon">
                                                <i class="icofont icofont-presentation"></i>
                                            </span>
                                            <input type="text" name="satuan" class="form-control" placeholder="Jenis Satuan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-info">
                                            <span class="input-group-addon">
                                                <i class="fas fa-globe-europe"></i>
                                            </span>
                                            <textarea class="form-control" placeholder="Keterangan" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12 text-center">
                                        <hr class="bg-warning">
                                        <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Ajukan Sekarang</button>
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