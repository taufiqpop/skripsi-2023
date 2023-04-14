<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <a href="\admin\create" class="btn btn-primary">Add Account</a>
    <br><br>

    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Photo Profile</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
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
<?= $this->endSection(); ?>