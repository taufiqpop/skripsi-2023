<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1 class="h3 mb-4 text-gray-800">Daftar Newsflash</h1>
            <a href="\newsflash\addNewsflash" class="btn btn-primary">Add Newsflash</a>
            <br><br>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
                    </div>
                </div>
            </form>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Table -->
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($newsflash as $newsflash) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td id="judul-rata-kiri"><?= $newsflash['judul']; ?></td>
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

<?= $this->endSection(); ?>