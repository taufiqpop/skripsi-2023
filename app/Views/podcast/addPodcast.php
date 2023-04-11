<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Podcast</h1>
            <form action="/podcast/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Judul Podcast" name="judul" value="" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="program" class="col-sm-2 col-form-label">Program</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="program" id="program" required>
                            <option selected>--Choose Programs--</option>
                            <option value="BASOSAPI">BASOSAPI</option>
                            <option value="11N1">11N1</option>
                            <option value="RAPMANESIA">RAPMANESIA</option>
                            <option value="THE GOOD VIBES">THE GOOD VIBES</option>
                            <option value="KHASANAH PETANG">KHASANAH PETANG</option>
                            <option value="MUSIC BOX">MUSIC BOX</option>
                            <option value="TOP 15">TOP 15</option>
                            <option value="RAPMATALKS">RAPMATALKS</option>
                            <option value="AFTERDAY">AFTERDAY</option>

                            <option value="MOVIE SCREEN">MOVIE SCREEN</option>
                            <option value="KING & QUEEN">KING & QUEEN</option>
                            <option value="INDIEZONE">INDIEZONE</option>
                            <option value="TEKSAS">TEKSAS</option>
                            <option value="MERINDING">MERINDING</option>
                            <option value="K-ARENA">K-ARENA</option>
                            <option value="SPORTACULAR">SPORTACULAR</option>
                            <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                            <option value="NOSATNIGHT">NOSATNIGHT</option>
                            <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" placeholder="Deskripsi Podcast" name="deskripsi" value="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="https://" name="link" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Artwork</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="images" id="images" required>
                            <option selected>--Choose Artwork--</option>
                            <option value="BasoSapi.png">BASOSAPI</option>
                            <option value="11N1.png">11N1</option>
                            <option value="Rapmanesia.png">RAPMANESIA</option>
                            <option value="TGV.png">THE GOOD VIBES</option>
                            <option value="KhasanahPetang.jpg">KHASANAH PETANG</option>
                            <option value="MusicBox.png">MUSIC BOX</option>
                            <option value="TOP15.png">TOP 15</option>
                            <option value="Rapmatalks.png">RAPMATALKS</option>
                            <option value="Afterday.png">AFTERDAY</option>

                            <option value="MovieScreen.png">MOVIE SCREEN</option>
                            <option value="KingNQueen.png">KING & QUEEN</option>
                            <option value="Indiezone.png">INDIEZONE</option>
                            <option value="Teksas.png">TEKSAS</option>
                            <option value="Merinding.png">MERINDING</option>
                            <option value="K-Arena.png">K-ARENA</option>
                            <option value="Sportacular.png">SPORTACULAR</option>
                            <option value="SudutKampus.png">SUDUT KAMPUS</option>
                            <option value="NoSatnight.png">NOSATNIGHT</option>
                            <option value="ClassicNight.png">CLASSIC NIGHT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="\podcast\podcast" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>