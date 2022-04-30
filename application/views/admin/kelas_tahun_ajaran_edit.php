<?php $this->load->view('admin/templates/header'); ?>
<?php
$th_ajaran = $this->db->query("SELECT * FROM th_ajaran")->result_array();
$kelas = $this->db->query("SELECT * FROM kelas")->result_array();
$matpel = $this->db->query("SELECT * FROM matpel")->result_array();
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
                <form method="POST" action="<?= base_url('admin/kelas_tahun_ajaran_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Tahun Ajaran</label>
                                    <select name="th_ajaran" id="th_ajaran" class="form-control">
                                        <?php foreach ($th_ajaran as $row) : ?>
                                        <option value="<?= $row['th_ajaran'] ?>">
                                            <?= $row['th_ajaran'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelas">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($kelas as $row) : ?>
                                        <option value="<?= $row['id_kelas'] ?>">
                                            <?= $row['kelas'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($matpel as $row) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="hari" name="matpel[]"
                                        value="<?= $row['id_matpel'] ?>">
                                    <label class="form-check-label" for="exampleCheck1"><?= $row['matpel'] ?></label>
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