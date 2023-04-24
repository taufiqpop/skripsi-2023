<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Podcast</h1>
            <a href="\podcast\addPodcast" class="btn btn-primary">Add Podcast</a>
            <br><br>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Table -->
            <div class="row card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col" class="cursor-active">No</th>
                                    <th scope="col" class="cursor-stop">Artwork</th>
                                    <th scope="col" class="cursor-active col-2">Program</th>
                                    <th scope="col" class="cursor-active col-3">Judul</th>
                                    <th scope="col" class="cursor-active col-2">Created</th>
                                    <th scope="col" class="cursor-active col-2">Updated</th>
                                    <th scope="col" class="cursor-stop">Link</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                <?php foreach ($podcast as $podcast) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td>
                                            <img src="<?= base_url('img/' . $podcast['images']); ?>" class="thumbnail">
                                        </td>
                                        <td><?= $podcast['program']; ?></td>
                                        <td id="judul-rata-kiri"><?= $podcast['judul']; ?></td>
                                        <td><?= $podcast['created_at']; ?></td>
                                        <td><?= $podcast['updated_at']; ?></td>
                                        <td>
                                            <a href="<?= $podcast['link']; ?>" class="btn btn-warning" target="_blank">Link</a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('podcast/detailPodcast/' . $podcast['id']); ?>" class="btn btn-info">Details</a>
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

<?= $this->endSection(); ?>