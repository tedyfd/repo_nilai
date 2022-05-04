<?php $this->load->view('admin/templates/header'); ?>
<div class="row">
    <div class="col col-5">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Ubah Password</h3>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('err') ?>
                <form method="POST" action="<?= base_url('admin/setting') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="form-group col-lg-12">
                                <label class="form-control-label" for="password_lama">Password Lama</label>
                                <input type="password" name="password_lama" id="password_lama" class="form-control">
                                <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-control-label" for="password_1">Password Baru</label>
                                <input type="password" name="password_1" id="password_1" class="form-control">
                                <?= form_error('password_1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-control-label" for="password_2">Ulangi</label>
                                <input type="password" name="password_2" id="password_2" class="form-control">
                                <?= form_error('password_2', '<small class="text-danger pl-3">', '</small>'); ?>
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
            <!-- Card footer -->
            <div class="card-footer py-4">
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/templates/footer'); ?>