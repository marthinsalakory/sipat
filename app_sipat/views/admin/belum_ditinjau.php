<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Data belum ditinjau</h4>
                            <!-- <span>Optimising the table's layout for different screen</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <!-- <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Data Table Extensions</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Responsive</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <div class="page-body">
            <!-- `New` Constructor table start -->
            <div class="card">
                <div class="card-header">
                    <h5>Data belum ditinjau</h5>
                    <!-- <span>Responsive will automatically detect new DataTable instances being created on a page and initialize itself if it finds the responsive option or responsive class name on the table, as shown in the other examples.</span> -->
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="new-cons" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Sub Bagian</th>
                                    <th>Keperluan</th>
                                    <th>Waktu</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($data['belum_ditinjau'] as $b) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $b['sub_bagian']; ?></td>
                                        <td><?= $b['keperluan']; ?></td>
                                        <td><?= $b["waktu"]; ?></td>
                                        <td><?= $b['nama_barang']; ?></td>
                                        <td><?= $b['jumlah']; ?></td>
                                        <td><?= $b['satuan']; ?></td>
                                        <td>
                                            <button class="btn btn-danger btn-round btn-sm">Batalkan</button>
                                            <button class="btn btn-success btn-round btn-sm">Konfirmasi</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- `New` Constructor table end -->
        </div>
    </div>
</div>
<!-- Warning Section Starts -->
<div id="styleSelector">

</div>
</div>