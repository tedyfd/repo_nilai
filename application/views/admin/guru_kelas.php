<?php $this->load->view('admin/templates/header'); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Kelas Tahun Ajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/guru_kelas_add') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>tahun ajaran</th>
                            <th>kelas</th>
                            <th>matpel</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($guru as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['nip'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['th_ajaran'] ?></td>
                            <td><?= $row['kelas'] ?></td>
                            <td><?= $row['matpel'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/') ?>guru_kelas_edit/<?= $row['id_guru_kelas'] ?>"
                                    class="text-primary">Ubah</a>
                                |
                                <a href="<?= base_url('admin/') ?>guru_kelas_del/<?= $row['id_guru_kelas'] ?>"
                                    class="text-primary">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/templates/footer'); ?>