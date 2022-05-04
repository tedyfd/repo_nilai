<?php $this->load->view('kepsek/templates/header') ?>
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
                <form>
                    <h6 class="heading-small text-muted mb-4"></h6>
                    <div class="pl-lg-4">
                        <input type="hidden" name="id_nilai" id="id_nilai" class="form-control"
                            value="<?= $nilai['id_nilai'] ?>">
                        <input type="hidden" name="nis" id="nis" class="form-control" value="<?= $nilai['nis'] ?>">
                        <input type="hidden" name="id_kelas_ajaran" id="id_kelas_ajaran" class="form-control"
                            value="<?= $nilai['id_kelas_ajaran'] ?>">
                        <input type="hidden" name="th_ajaran" id="th_ajaran" class="form-control"
                            value="<?= $nilai['th_ajaran'] ?>">
                        <input type="hidden" name="kelas" id="kelas" class="form-control"
                            value="<?= $nilai['kelas'] ?>">
                        <input type="hidden" name="matpel" id="matpel" class="form-control"
                            value="<?= $nilai['matpel'] ?>">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="">nis</label>
                                <input type="text" name="" id="" class="form-control" value="<?= $nilai['nis'] ?>"
                                    disabled>
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-control-label" for="nama">nama</label>
                                <input type="text" name="" id="nama" class="form-control" value="<?= $nilai['nama'] ?>"
                                    disabled>
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
                        </div>
                        <div class="col-lg-12">
                            <hr>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="tugas_harian">Tugas Harian</label>
                                    <input type="number" name="tugas_harian" id="tugas_harian" class="form-control"
                                        value="<?= $nilai['tugas_harian'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="pts">PTS</label>
                                    <input type="number" name="pts" id="pts" class="form-control"
                                        value="<?= $nilai['pts'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="hpts">HPTS</label>
                                    <input type="number" name="hpts" id="hpts" class="form-control"
                                        value="<?= $nilai['hpts'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="predikat_mid">Predikat</label>
                                    <select type="number" name="predikat_mid" id="predikat_mid" class="form-control"
                                        disabled>
                                        <option><?= $nilai['predikat_mid'] ?></option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nilai_raport_mid">Nilai Raport Mid</label>
                                    <input type="number" name="nilai_raport_mid" id="nilai_raport_mid"
                                        class="form-control" value="<?= $nilai['nilai_raport_mid'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="hph">HPH</label>
                                    <input type="number" name="hph" id="hph" class="form-control"
                                        value="<?= $nilai['hph'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="pas">PAS</label>
                                    <input type="number" name="pas" id="pas" class="form-control"
                                        value="<?= $nilai['pas'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="hpas">hpas</label>
                                    <input type="number" name="hpas" id="hpas" class="form-control"
                                        value="<?= $nilai['hpas'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"
                                        for="nilai_raport_final">nilai_raport_final</label>
                                    <input type="number" name="nilai_raport_final" id="nilai_raport_final"
                                        class="form-control" value="<?= $nilai['nilai_raport_final'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                                        value="<?= $nilai['deskripsi'] ?>" disabled>
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
<?php $this->load->view('kepsek/templates/footer') ?>