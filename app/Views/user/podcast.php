<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Podcast</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link Podcast</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="https://" name="link" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="program" class="col-sm-2 col-form-label">Program</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="program" id="program">
                            <option selected>--Choose Programs--</option>
                            <option value="basosapi">BASOSAPI</option>
                            <option value="11n1">11N1</option>
                            <option value="rapmanesia">RAPMANESIA</option>
                            <option value="tgv">THE GOOD VIBES</option>
                            <option value="kp">KHASANAH PETANG</option>
                            <option value="mb">MUSIC BOX</option>
                            <option value="top15">TOP 15</option>
                            <option value="rapmatalks">RAPMATALKS</option>
                            <option value="afterday">AFTERDAY</option>

                            <option value="ms">MOVIE SCREEN</option>
                            <option value="knq">KING & QUEEN</option>
                            <option value="indiezone">INDIEZONE</option>
                            <option value="teksas">TEKSAS</option>
                            <option value="merinding">MERINDING</option>
                            <option value="karena">K-ARENA</option>
                            <option value="sportacular">SPORTACULAR</option>
                            <option value="sk">SUDUT KAMPUS</option>
                            <option value="ns">NO SATNIGHT</option>
                            <option value="cn">CLASSIC NIGHT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="\user" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>