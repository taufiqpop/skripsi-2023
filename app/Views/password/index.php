<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Password</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <?php if (isset($validation)) { ?>
                <div class="col-md-12">
                    <?php foreach ($validation->getErrors() as $error) : ?>
                        <div class="alert alert-warning" role="alert">
                            <i class="mdi mdi-alert-outline me-2"></i>
                            <?= esc($error) ?>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php } ?>

            <form action="<?= base_url(); ?>/ChangePassword/setPassword" method="post">
                <input type="hidden" name="id" class="id" value="<?= $id; ?>">
                <div class="form-group row">
                    <div class="col-6">
                        <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                </div>
                <a href="\user\profile" class="btn btn-dark">Back</a>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Change Password</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>