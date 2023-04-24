<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Newsflash</h1>
            <a href="\newsflash\addNewsflash" class="btn btn-primary">Add Newsflash</a>
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
                                    <th scope="col" class="cursor-stop">Photo</th>
                                    <th scope="col" class="cursor-active">Judul</th>
                                    <th scope="col" class="cursor-active col-2">Created</th>
                                    <th scope="col" class="cursor-active col-2">Updated</th>
                                    <th scope="col" class="cursor-stop">Link</th>
                                    <th scope="col" class="cursor-stop">Action</th>
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
                                        <td><?= $newsflash['created_at']; ?></td>
                                        <td><?= $newsflash['updated_at']; ?></td>
                                        <td>
                                            <a href="<?= $newsflash['link']; ?>" class="btn btn-warning" target="_blank">Link</a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('newsflash/detailNewsflash/' . $newsflash['id']); ?>" class="btn btn-info">Details</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= $pager->links('newsflash', 'newsflash_pagination'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>