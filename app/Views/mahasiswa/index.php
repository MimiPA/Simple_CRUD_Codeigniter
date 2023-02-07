<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Data Mahasiswa</h2>
        </div>

        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <a href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">Tambah Data</a>
            <hr />

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-warning text-center">
                        <tr>
                            <th>Stambuk</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>No telp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php
                    foreach ($mahasiswa as $row) {
                    ?>
                        <tr>
                            <td><?= $row->stambuk; ?></td>
                            <td><?= $row->nama_mahasiswa; ?></td>
                            <td><?= $row->jenis_kelamin; ?></td>
                            <td><?= $row->no_telp; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->alamat; ?></td>
                            <td>
                                <a title="Edit" href="<?= base_url("mahasiswa/edit/$row->stambuk"); ?>" class="btn btn-info">Edit</a>
                                <a title="Hapus" href="<?= base_url("mahasiswa/hapus/$row->stambuk"); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa tersebut ?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>