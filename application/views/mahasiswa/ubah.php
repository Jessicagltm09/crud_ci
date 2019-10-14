<div class="container">

    <div class="row mt-15">
        <div class="col-md-11">

            <div class="card text-white bg-secondary mb-3" style="max-width:200rem;">
                <div class="card-header bg-transparent border-info">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">ALAMAT</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                <?php foreach( $jeniskelamin as $j ) : ?>
                                    <?php if( $j == $mahasiswa['jeniskelamin'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>