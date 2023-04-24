<?= $this->extend('rapmafm/templates/index'); ?>
<?= $this->section('page-content'); ?>

<main id="main">
    <!-- Structure of Organization -->
    <section id="structure" class="portfolio-details-slider">
        <div class="container">
            <div class="section-title">
                <h2 style="text-align: center;">Structure of Organization</h2>
            </div>
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('img/GMPA.png') ?>" class="img-fluid" alt="GMPA" data-aos="fade-up">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('img/Umum.png') ?>" class="img-fluid" alt="Divisi Umum" data-aos="fade-up">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('img/Kepenyiaran.png') ?>" class="img-fluid" alt="Divisi Kepenyiaran" data-aos="fade-up">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('img/Marketing.png') ?>" class="img-fluid" alt="Divisi Marketing" data-aos="fade-up">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('img/Personalia.png') ?>" class="img-fluid" alt="Divisi Personalia" data-aos="fade-up">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col section-bottom-button" data-aos="fade-up">
                    <img src="<?= base_url('img/Crew.png') ?>" class="img-fluid" alt="Crew">
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>