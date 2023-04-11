<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Details Podcast</h1>

    <!-- Table -->
    <?php $i = 1; ?>
    <?php foreach ($podcast as $podcast) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?= base_url('/img/' . $podcast['images']); ?>" class="card-img podcast-img img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4>
                                            <?= $podcast['judul']; ?>
                                        </h4>
                                    </li>

                                    <li class="list-group-item justify">
                                        <?= $podcast['deskripsi']; ?>
                                    </li>
                                </ul>
                                <div class="container tombol-newsflash">
                                    <a href="<?= base_url('podcast/podcast'); ?>" class="btn btn-dark col-3">Back</a>
                                    <a href="<?= base_url('podcast/editPodcast/' . $podcast['id']); ?>" class="btn btn-warning col-3">Edit</a>

                                    <form action="/podcast/<?= $podcast['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endSection(); ?>