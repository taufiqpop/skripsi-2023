<?= $this->extend('rapmafm/templates/index'); ?>
<?= $this->section('page-content'); ?>

<main id="main">
    <!-- Event -->
    <section id="event" class="portfolio section-bg">
        <div class="row g-4 g-md-6">
            <div class="section-title">
                <h2 style="text-align: center;">Event</h2>
            </div>
            <div class="col-6 col-md-6">
                <div class="card-body">
                    <center>
                        <h2 class="card-title"><b>RAPMADAY #7</b></h2>
                    </center>
                    <center>
                        <img class="card-img-top" src="<?= base_url('img/Rapmaday7.png') ?>" style="width:100%">
                    </center>
                    <div class="card-body">
                        <center>
                            <a href="#" target="_blank" class="btn btn-dark disabled">See Event</a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="card-body">
                    <center>
                        <h2 class="card-title"><b>RAPMAFEST #8</b></h2>
                    </center>
                    <center>
                        <img class="card-img-top" src="<?= base_url('img/Rapmafest8.png') ?>" style="width:100%">
                    </center>
                    <div class="card-body">
                        <center>
                            <a href="<?= base_url('rapmafm/rapmafest8'); ?>" target="_blank" class="btn btn-success">See Event</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>