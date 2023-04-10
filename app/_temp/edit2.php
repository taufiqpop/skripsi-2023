<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <?php $i = 1; ?>
    <?php foreach ($user as $user) : ?>
        <div class="row">
            <div class="col-8">
                <h2>Form Edit Data</h2>
                <form action="/admin/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="<?= $users['email']; ?>" name="email" id="email" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="<?= $users['username']; ?>" name="username" id="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="<?= $users['fullname']; ?>" name="fullname" id="fullname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="<?= $users['password_hash']; ?>" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_image" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="<?= $users['user_image']; ?>" name="user_image" id="user_image">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Roles</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="roles" value="admin" <?= $user['name'] == 'admin' ? 'checked' : ''; ?>>
                                    <label class="form-check-label">
                                        Admin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="roles" value="jurnalistik" <?= $user['name'] == 'jurnalistik' ? 'checked' : ''; ?>>
                                    <label class="form-check-label">
                                        Jurnalistik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="roles" value="produksi" <?= $user['name'] == 'produksi' ? 'checked' : ''; ?>>
                                    <label class="form-check-label">
                                        Produksi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="roles" value="user" <?= $user['name'] == 'user' ? 'checked' : ''; ?>>
                                    <label class="form-check-label">
                                        User
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="\admin" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Edit Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>