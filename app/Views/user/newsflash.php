<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Daftar Newsflash</h1>
            <a href="\user\addNewsflash" class="btn btn-primary">Add Newsflash</a>
            <br><br>
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
                            <?php $i = 1; ?>
                            <?php foreach ($newsflash as $newsflash) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $newsflash['judul']; ?></td>
                                    <td>
                                        <a href="<?= $newsflash['link']; ?>" class="btn btn-warning" target="_blank">Link</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('user/detailNewsflash/' . $newsflash['id']); ?>" class="btn btn-info">Details</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>