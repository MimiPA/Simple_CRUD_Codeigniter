<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-warning">
            <h2 class="text-center">Tambah Data Mahasiswa</h2>
        </div>

        <div class="card-body bg-light">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Detail Isi Form</h4>
                    <hr />

                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('mahasiswa/store') ?>">
                <?= csrf_field(); ?>

                <div class="form-group mb-3 mt-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa :</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= old('nama_mahasiswa'); ?>" />
                </div>

                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="no_telp">Nomor Telepon :</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp'); ?>" />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= old('email'); ?>" />
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">Alamat :</label>
                    <textarea class="form-control" id="alamat" name="alamat"><?= old('alamat'); ?></textarea>
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-info btn-block" value="Simpan">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>