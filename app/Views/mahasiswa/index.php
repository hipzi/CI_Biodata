<?= $this->extend('layout/layout'); ?>

<?= $this->section('data'); ?>
    <section class="section data" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h2>Data Mahasiswa</h2>
                <div class="line-dec"></div>
            </div>
            <div class="card">
                <div class="card-body" style="color:black">
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('message'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <a href="<?= base_url('/create_mahasiswa'); ?>" class="btn" style="color:white;background-color:#d67f7d;float:right;margin-bottom:10px;">Tambah</a>
                    <!-- <hr /> -->
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nrp</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($mahasiswa as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->nrp; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->no_telp; ?></td>
                                <td><?= $row->alamat; ?></td>
                                <td><?= $row->jurusan; ?></td>
                                <td>
                                    <a title="Edit" href="<?= base_url("/mahasiswa/edit/$row->id_mahasiswa"); ?>" class="btn btn-info"><i style="font-size: 11pt;" class="fa fa-pencil"></i></a>
                                    <a title="Delete" href="<?= base_url("/mahasiswa/delete/$row->id_mahasiswa") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i style="font-size: 11pt;" class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection('data'); ?>

<?= $this->section('script') ?>
$(".main-menu li:eq(3)").addClass("active");
<?= $this->endSection() ?>