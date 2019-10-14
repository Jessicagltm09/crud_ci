<div class="container">
    <div class="row mt-15">
        <div class="col-md-11">

            <div class="card text-white bg-secondary mb-3" style="max-width:200rem;">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text"><?= $mahasiswa['nim']; ?></p>
                    <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jeniskelamin']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>