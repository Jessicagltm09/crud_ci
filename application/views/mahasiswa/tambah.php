<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="container">
    <div class="card text-center">

    <div class="row mt-15">
        <div class="col-md-11">

             <div class="card text-white bg-secondary mb-3" style="max-width:300rem;">
                <div class="card-header bg-transparent border-success">
                    <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                            <label for="nama">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">ALAMAT</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-success float-right">SIMPAN</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
</body>