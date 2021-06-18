<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <!-- Solid Alert start -->
                <?php Flasher::flash(); ?>
                <!-- Solid Alert end -->

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
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>Sub Bagian</th>
                                    <th>Keperluan</th>
                                    <th>Waktu</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($data['belum_ditinjau'] as $b) : ?>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-round btn-sm waves-effect md-trigger batal" data-id="<?= $b['id']; ?>" data-modal="modal-11">Batalkan</button>
                                            <a href="<?= BASEURL; ?>/belum_ditinjau/konfirmasi/<?= $b['id']; ?>">
                                                <button type="button" class="btn btn-success btn-round btn-sm">Konfirmasi</button>
                                            </a>
                                        </td>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $b['sub_bagian']; ?></td>
                                        <td><?= $b['keperluan']; ?></td>
                                        <td><?= $b["waktu"]; ?></td>
                                        <td><?= $b['nama_barang']; ?></td>
                                        <td><?= $b['jumlah'] . " " . $b['satuan']; ?></td>
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
<div class="md-modal md-effect-11" id="modal-11">
    <div class="md-content">
        <h3 class="bg-danger">Yakin Ingin Membatalkan?</h3>
        <div>
            <p>Masukan alasan pembatalan:</p>
            <form action="<?= BASEURL; ?>/belum_ditinjau/batal" method="POST">
                <input type="hidden" name="id" id="id_alasan" value="">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-danger">
                            <span class="input-group-addon">
                                <i class="fas fa-adjust"></i>
                            </span>
                            <textarea class="form-control" placeholder="Kenapa anda ingin membatalkan? Jelaskan:" name="alasan" id="tes" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-danger btn-block btn-round waves-effect">Lanjutkan</button>
                <button type="button" class="btn btn-warning btn-block btn-round waves-effect md-close">Close</button>
            </form>
        </div>
    </div>
</div>
<!-- javascript untuk modal start -->
<script>
    $(document).ready(function() {
        $(".batal").click(function() {
            const id = $(this).data("id");

            $("#id_alasan").attr("value", id);
        });
    });
</script>
</script>
<!-- javascript untuk modal end -->

</div>