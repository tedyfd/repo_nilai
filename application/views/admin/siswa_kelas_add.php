<?php $this->load->view('admin/templates/header'); ?>
<?php
$siswa = $this->db->query("SELECT * FROM siswa")->result_array();
$kelas_ajaran = $this->db->query("SELECT * FROM kelas_ajaran
INNER JOIN kelas ON kelas_ajaran.id_kelas = kelas.id_kelas
INNER JOIN matpel ON kelas_ajaran.id_matpel = matpel.id_matpel")->result_array();
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Kelas Tahun Ajaran </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/siswa_kelas_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Siswa</label>
                                    <select name="siswa" id="siswa" class="form-control">
                                        <?php foreach ($siswa as $row) : ?>
                                        <option value="<?= $row['nis'] ?>">
                                            <?= $row['nis'] . ' - ' . $row['nama'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($kelas_ajaran as $row) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input"
                                        id="kelas_ajaran<?= $row['id_kelas_ajaran'] ?>" name="kelas_ajaran[]"
                                        value="<?= $row['id_kelas_ajaran'] ?>">
                                    <label class="form-check-label"
                                        for="kelas_ajaran<?= $row['id_kelas_ajaran'] ?>"><?= $row['th_ajaran'] . '-' . $row['kelas'] . '-' . $row['matpel'] . '-' ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <button class="col btn btn-lg btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/templates/footer'); ?>