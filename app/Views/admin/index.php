<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <a href="\admin\create" class="btn btn-primary">Add Account</a>
    <br><br>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif; ?>

    <!-- Table -->
    <div class="row card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" class="cursor-active">No</th>
                            <th scope="col" class="cursor-stop">Photo Profile</th>
                            <th scope="col" class="cursor-active">Full Name</th>
                            <th scope="col" class="cursor-active">Username</th>
                            <th scope="col" class="cursor-active">Role</th>
                            <th scope="col" class="cursor-stop">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>
                                    <img src="/img/<?= $user['user_image']; ?>" class="thumbnail">
                                </td>
                                <td><?= $user['fullname']; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['name']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/detail/' . $user['userid']); ?>" class="btn btn-info">Details</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>