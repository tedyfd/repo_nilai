<?php $this->load->view('admin/templates/header'); ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Kelas</h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/kelas_edit/') . $kelas['id_kelas'] ?>" id="form">
                    <input type="hidden" name="id_kelas" id="id_kelas" class="form-control"
                        value="<?= $kelas['id_kelas'] ?>">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelas">kelas</label>
                                    <input type="text" name="kelas" id="kelas" class="form-control"
                                        value="<?= $kelas['kelas'] ?>">
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