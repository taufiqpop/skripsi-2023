<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <?php $i = 1; ?>
    <?php foreach ($user as $user) : ?>
        <div class="row">
            <div class="col-8">
                <h2>Form Ubah Password</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="<?= $users['password_hash']; ?>" name="password" id="old-password" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="" name="password" id="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Confirm New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="" name="password" id="conf-new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="\user" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>