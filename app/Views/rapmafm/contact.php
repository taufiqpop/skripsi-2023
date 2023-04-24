<?= $this->extend('rapmafm/templates/index'); ?>
<?= $this->section('page-content'); ?>

<main id="main">
    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2 style="text-align: center;">Contact</h2>
            </div>
            <div class="row" data-aos="fade-in">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="info">
                        <div class="email">
                            <i class="bi bi-envelope" title="Email"></i>
                            <h4>Email</h4>
                            <p>
                                umsrapmafm@gmail.com<br>
                                radio.rapmafm@yahoo.co.id (Music Director)
                            </p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone" title="Whatsapp"></i>
                            <h4>Whatsapp</h4>
                            <p>
                                <a href="https://wa.me/+62895343956772" target="_blank" style="color: #008C52;">Aqsal : 0895343956772 (MedPart)</a><br>
                                <a href="https://wa.me/+6287737837843" target="_blank" style="color: #008C52;">Vania : 087737837843 (MC/M-Talent)</a><br>
                                <!-- <a href="https://wa.me/+6285691615895" target="_blank" style="color: #008C52;">Maudy : 085691615895 (MedPart)</a><br> -->
                                <!-- <a href="https://wa.me/+6283146061692" target="_blank" style="color: #008C52;">Falah : 083146061692 (MC/M-Talent)</a> -->
                            </p>
                        </div>
                        <div class="address">
                            <i class="bi bi-geo-alt" title="Location"></i>
                            <h4>Location</h4>
                            <p style="text-align: justify;">Sayap Kanan Perpustakaan Lantai Dasar, Kampus II
                                Universitas Muhammadiyah Surakarta, Jalan Ahmad Yani Tromol Pos I Pabelan, Kartasura,
                                Sukoharjo, Jawa Tengah, Indonesia, 57162.</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1722825033103!2d110.76873700406814!3d-7.556185825852349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a145b44ab2e7b%3A0x907e13e28374d39b!2sRapma+FM!5e0!3m2!1sid!2sid!4v1547644067180" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="/rapmafm/save" method="post" enctype="multipart/form-data" class="php-email-form">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" title="Send Message">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>