<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <?php $i = 1; ?>
    <?php foreach ($user as $user) : ?>
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data</h1>
                <form action="/admin/update/<?= $user['userid']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="<?= (old('email')) ? old('email') : $user['email']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" value="<?= (old('username')) ? old('username') : $user['username']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fullname" id="fullname" value="<?= (old('fullname')) ? old('fullname') : $user['fullname']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_image" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_image" id="user_image" value="<?= (old('user_image')) ? old('user_image') : $user['user_image']; ?>" required>
                        </div>
                    </div>
                    <?php if (in_groups('admin')) : ?>
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
                    <?php endif; ?>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="\user" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-primary">Confirm Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>