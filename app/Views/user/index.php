<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <?php if (in_groups('admin')) : ?>
                    <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50 fa-spin"></i> Live Chat</a>
                <?php endif; ?>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Total Users -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Users
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUsers; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('admin/index'); ?>">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Newsflash -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Newsflash
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlNewsflash; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('newsflash/newsflash'); ?>">
                                        <i class="fas fa-newspaper fa-2x text-warning"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Podcast -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Podcast
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPodcast; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('podcast/podcast'); ?>">
                                        <i class="fas fa-microphone fa-2x text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Program -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Listener
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">-</div>
                                </div>
                                <div class="col-auto">
                                    <a href="http://rapmafm.onlivestreaming.net:9999/" target="_blank">
                                        <i class="fas fa-volume-up fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>