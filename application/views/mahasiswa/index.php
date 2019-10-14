<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <div class="row mt-15">
        <div class="col-md-11">
        </div>
    </div>
    <div class="row mt-15">
        <div class="col-md-11">
            <h2>Daftar Nama Mahasiswa</h2>
            <form action="" method="post">
              <a href="<?= base_url(); ?>mahasiswa/tambah" class='btn btn-primary' salign="center"> + Data Mahasiwa</a>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                data Mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item" align="center">
                    <?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">delete</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>"
                        class="badge badge-success float-right">edit</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"
                        class="badge badge-primary float-right">view</a>
                </li>
                <?php endforeach; ?>
                 <div class="row mt-3">
        <div class="col-md-6">
        </div>
    </div>

            </ul>
        </div>
    </div>

</div>
</center>