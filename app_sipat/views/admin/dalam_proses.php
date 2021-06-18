<style>
    .keluar {
        position: absolute;
        background-color: transparent;
        border-color: white;
        /* border: 0; */
        color: white;
        border-radius: 50%;
        right: 18px;
        top: 12px;
    }
</style>
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
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($data['dalam_proses'] as $d) : ?>
                                    <tr>
                                        <td>
                                            <button type="button" id="konfirmasi" class="btn btn-primary btn-round btn-sm waves-effect md-trigger" data-id="<?= $d['id']; ?>" data-modal="modal-11">Konfimasi</button>
                                        </td>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $d['sub_bagian']; ?></td>
                                        <td><?= $d['keperluan']; ?></td>
                                        <td><?= $d["waktu"]; ?></td>
                                        <td><?= $d['nama_barang']; ?></td>
                                        <td><?= $d['jumlah']; ?></td>
                                        <td><?= $d['satuan']; ?></td>
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
        <h3 class="bg-primary">PERHATIAN
            <button class="keluar waves-effect md-close"><i class="fas fa-times"></i></button>
        </h3>
        <div>
            <h4 class="mt-3 mb-5">Pastikan anda mengklik tombol lanjutkan, ketika barang yang anda ajukan sudah di terima.</h4>
            <div class="row">
                <button type="button" class="btn btn-primary waves-effect lanjutkan">Lanjutkan</button>
                <!-- <button type="button" class="btn btn-defauld waves-effect md-close">Close</button> -->
            </div>
        </div>
    </div>
</div>
<!-- untuk menjalankan fungsi konfirmasi penerimaan barang -->
<script>
    // untuk menjalankan fungsi konfirmasi penerimaan barang
    $(document).ready(function() {
        $("#konfirmasi").click(function() {
            const id = $(this).data("id");

            $(".lanjutkan").click(function() {

                document.location.href = '<?= BASEURL; ?>/dalam_proses/konfirmasi/' + id;

            });

        });
    });
</script>

</div>