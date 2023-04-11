<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Newsflash</h1>
            <form action="/newsflash/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Judul Berita" name="judul" value="" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" placeholder="Deskripsi Berita" name="deskripsi" value="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="https://" name="link" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="images.png" name="images" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="\newsflash\newsflash" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>