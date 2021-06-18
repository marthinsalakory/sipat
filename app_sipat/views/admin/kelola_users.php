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
                            <h4>Halaman Pengelolaan Users</h4>
                            <button class="btn btn-primary mt-3 waves-effect md-trigger tambah" data-modal="modal-11">Tambah Users</button>
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
                    <h5>Data users</h5>
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
                                    <th>Nama Sub Bagian</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($data['riwayat_pengajuan'] as $r) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $r['nama_lengkap']; ?></td>
                                        <td><?= $r['username']; ?></td>
                                        <td><?= $r['email']; ?></td>
                                        <td><?= $r['name']; ?></td>
                                        <td>
                                            <button data-id="<?= $r['id']; ?>" class="btn btn-warning btn-sm btn-round  waves-effect md-trigger ubah" data-modal="modal-11">Ubah</button>
                                            <a onclick="return confirm('Yakin ingin menghapus <?= $r['nama_lengkap']; ?>?');" href="kelola_users/hapus/<?= $r['id']; ?>">
                                                <button class="btn btn-danger btn-sm btn-round">Hapus</button>
                                            </a>
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
</div>
<style>
    .form_tambah_pengguna label.error {
        /* .tess { */
        color: red;
        position: absolute;
        bottom: -35px;
        left: 10px;
        z-index: 100;
    }
</style>
<div class="md-modal md-effect-11" id="modal-11">
    <div class="md-content">
        <h3 class="bg-primary label_tambah">Form Tambah Pengguna</h3>
        <div>
            <form class="form_tambah_pengguna" action="<?= BASEURL; ?>/kelola_users/tambah" method="POST">
                <input type="hidden" name="id" id="id">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-primary tas">
                            <input required autocomplete="off" type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama SUB Bagian">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-primary">
                            <input required autocomplete="off" type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-primary">
                            <input required autocomplete="off" type="email" id="email" name="email" class="form-control" placeholder="email item">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-primary">
                            <input autocomplete="off" type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="input-group input-group-primary">
                            <select required name="level" class="form-control custom-select" id="level">
                                <option value="">Level Pengguna</option>
                                <option value="1">Admin</option>
                                <option value="2">Operator</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-round tombon_tambah">Tambah</button>
                        <button type="button" class="btn btn-defauld btn-block btn-round mb-3 waves-effect md-close">Kembali</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).ready(function() {
            // modal ubah data
            $(".ubah").click(function() {
                const id = $(this).data("id");

                $(".label_tambah").html("Form Ubah Data");
                $(".form_tambah_pengguna").attr("action", "<?= BASEURL; ?>/kelola_users/ubah");
                $(".tombon_tambah").html("Ubah");

                $.ajax({
                    url: '<?= BASEURL; ?>/kelola_users/getubah',
                    data: {
                        id: id
                    },
                    method: 'post',
                    dataType: 'json',
                    success: function(data) {
                        $('#id').val(data.id);
                        $('#nama_lengkap').val(data.nama_lengkap);
                        $('#username').val(data.username);
                        $('#email').val(data.email);
                        $('#password').val('');
                        $('#level').val(data.group_id);
                    }
                });
            });

            // modal tambah data
            $(".tambah").click(function() {
                const id = $(this).data("id");

                $(".label_tambah").html("Form Tambah Data");
                $(".form_tambah_pengguna").attr("action", "<?= BASEURL; ?>/kelola_users/tambah");
                $(".tombon_tambah").html("Tambah");

                $('#id').val('');
                $('#nama_lengkap').val('');
                $('#username').val('');
                $('#email').val('');
                $('#password').val('');
                $('#level').val('');
            });
        });


    });
</script>