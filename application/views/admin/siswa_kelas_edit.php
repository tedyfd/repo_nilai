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
                        <h3 class="mb-0">Siswa Kelas</h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/siswa_kelas_edit/') . $siswa_kelas['id_siswa_kelas'] ?>"
                    id="form">
                    <input type="hidden" class="form-control" name="id_siswa_kelas"
                        value="<?= $siswa_kelas['id_siswa_kelas'] ?>">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Siswa</label>
                                    <input type="text" class="form-control" name=""
                                        value="<?= $siswa_kelas['nis'] . ' - ' . $siswa_kelas['nama'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="id_kelas_ajaran">Kelas Ajaran</label>
                                    <select id="id_kelas_ajaran" name="id_kelas_ajaran" class="form-control">
                                        <?php foreach ($kelas_ajaran as $row) : ?>
                                        <?php if ($row['id_kelas_ajaran'] == $siswa_kelas['id_kelas_ajaran']) : ?>
                                        <option value="<?= $row['id_kelas_ajaran'] ?>" selected>
                                            <?= $row['th_ajaran'] . "-" . $row['kelas'] . "-" . $row['matpel'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_kelas_ajaran'] ?>">
                                            <?= $row['th_ajaran'] . "-" . $row['kelas'] . "-" . $row['matpel'] ?>
                                        </option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('id_kelas_ajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
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