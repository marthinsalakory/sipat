$().ready(function () {
  // validate signup form on keyup and submit
  $(".form_pengajuan").validate({
    rules: {
      nama_barang: {
        required: true,
        maxlength:40,
      },
      keperluan: {
        required: true,
      },
      jumlah: {
        required: true,
        number: true,
      },
      satuan: {
        required: true,
      },
      keterangan: {
        required: true,
        minlength: 30,
      },
    },
    messages: {
      nama_barang: {
        required: "Anda belum mengisi nama barang",
        maxlength: "Maksimal masukan 40 karakter"
      },
      keperluan: {
        required: "Anda belum mengisi jenis keperluan",
      },
      jumlah: {
        required: "Anda belum mengisi jumlah item",
        number: "Yang anda input bukan angka",
      },
      satuan: {
        required: "Anda belum mengisi jenis satuan",
      },
      keterangan: {
        required: "Anda belum mengisi keterangan",
        minlength: "Masukan keterangan pengajuan setidaknya 30 karakter"
      },
    },
  });

  // alert("tess");
});
