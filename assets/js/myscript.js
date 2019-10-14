const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Data MAHASISWA ',
        text: 'Berhasil ' + flashData,
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        //title: 'Apakah anda yakin',
        text: "DATA MAHASISWA DIHAPUS??",
        showCancelButton: true,
        confirmButtonColor: 'blue',
        cancelButtonColor: 'red',
        confirmButtonText: 'Hapus Data'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});