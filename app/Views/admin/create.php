<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Tambah Data Akun</h1>
            <form action="/admin/save" method="post">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="<?= lang('Auth.email') ?>" name="email" id="email" autofocus required>
                        <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="<?= lang('Auth.username') ?>" name="username" id="username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" id="fullname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_hash" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="<?= lang('Auth.password') ?>" name="password_hash" id="password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_image" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Photo Profile" name="user_image" id="user_image">
                    </div>
                </div>
                <!-- <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Roles</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="roles" value="admin">
                                <label class="form-check-label">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="roles" value="jurnalistik">
                                <label class="form-check-label">
                                    Jurnalistik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="roles" value="produksi">
                                <label class="form-check-label">
                                    Produksi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="roles" value="user" checked>
                                <label class="form-check-label">
                                    User
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset> -->

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="\admin" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-primary">Add Akun</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>