<?php $this->load->view('guru/templates/header') ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Nilai siswa</h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('guru/nilai_siswa_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <input type="hidden" name="id_nilai" id="id_nilai" class="form-control"
                            value="<?= $nilai['id_nilai'] ?>">
                        <input type="hidden" name="th_ajaran" id="th_ajaran" class="form-control"
                            value="<?= $nilai['th_ajaran'] ?>">
                        <input type="hidden" name="kelas" id="kelas" class="form-control"
                            value="<?= $nilai['kelas'] ?>">
                        <input type="hidden" name="matpel" id="matpel" class="form-control"
                            value="<?= $nilai['matpel'] ?>">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="nis">nis</label>
                                <input type="text" name="nis" id="nis" class="form-control"
                                    value="<?= $nilai['nis'] ?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="nama">nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="<?= $nilai['nama'] ?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="">tahun ajaran</label>
                                <input type="text" name="" id="" class="form-control" value="<?= $nilai['th_ajaran'] ?>"
                                    disabled>
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="">Kelas</label>
                                <input type="text" name="" id="" class="form-control" value="<?= $nilai['kelas'] ?>"
                                    disabled>
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="">Matapelajaran</label>
                                <input type="text" name="" id="" class="form-control" value="<?= $nilai['matpel'] ?>"
                                    disabled>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nilai">Nilai</label>
                                    <input type="number" name="nilai" id="nilai" class="form-control"
                                        value="<?= $nilai['nilai'] ?>">
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
<?php $this->load->view('guru/templates/footer') ?>