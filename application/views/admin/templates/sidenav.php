    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center">
                <a class="navbar-brand" href="<?= base_url('admin') ?>">
                    <img src="<?= base_url() ?>assets/img/brand/blue.png" class="" style="height: 200px;" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Relasi</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/kelas_tahun_ajaran') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">tahun ajaran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/guru') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">guru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/guru_kelas') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">guru_kelas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/siswa') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">siswa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/siswa_kelas') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">siswa_kelas</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Data</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/kelas') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">Kelas</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/matpel') ?>" target="">
                                <i class=""></i>
                                <span class="nav-link-text">Mata Pelajaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>