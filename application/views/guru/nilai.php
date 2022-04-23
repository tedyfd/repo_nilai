<?php $this->load->view('guru/templates/header') ?>
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Nilai</h3>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Tahun Ajaran</th>
                            <th>Kelas</th>
                            <th>Matpel</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($nilai as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td> <?= $row['th_ajaran'] ?> </td>
                            <td><?= $row['kelas'] ?></td>
                            <td><?= $row['matpel'] ?></td>
                            <td> <a href="<?= base_url('guru/nilai/') . $row['id_kelas_ajaran'] ?>"
                                    class="btn btn-primary">
                                    Detail </a>
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
<?php $this->load->view('guru/templates/footer') ?>