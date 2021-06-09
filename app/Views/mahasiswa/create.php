<?= $this->extend('layout/layout'); ?>

<?= $this->section('data'); ?>
    <section class="section data" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h2>Tambah Data Mahasiswa</h2>
                <div class="line-dec"></div>
            </div>
            <div class="card">
                <div class="card-body" style="color:black">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('/mahasiswa/store') ?>">
                        <?= csrf_field(); ?>
                        
                        <div class="form-group">
                            <label for="nrp">Nrp</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" value="<?= old('nrp'); ?>">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" />
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea style="resize: none;" class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" class="form-control" id="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-block" style="color:white; background-color:#d67f7d" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection('data'); ?>

<?= $this->section('script') ?>
$(".main-menu li:eq(3)").addClass("active");
<?= $this->endSection() ?>