<?= $this->extend('rapmafm/templates/index'); ?>
<?= $this->section('page-content'); ?>
<main id="main">
    <!-- Podcast -->
    <section id="newsflash" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2 style="text-align: center;">Daftar Newsflash</h2>
            </div>
            <div class="row" data-aos="fade-in">
                <div class="d-flex align-items-stretch">
                    <div class="container-fluid">
                        <div class="row">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Table -->
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Photo</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                                <?php foreach ($newsflash as $newsflash) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $i++; ?></th>
                                                        <td>
                                                            <img src="<?= base_url('img/' . $newsflash['images']); ?>" class="thumbnail">
                                                        </td>
                                                        <td id="judul-rata-kiri"><?= $newsflash['judul']; ?></td>
                                                        <td>
                                                            <a href="<?= $newsflash['link']; ?>" class="btn btn-warning" target="_blank">Link</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <?= $pager->links('podcast', 'podcast_pagination'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<?= $this->endSection(); ?>