<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://taufiqpop99.github.io/Web-Rapma-FM/index.html" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-microphone fa-spin"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rapma FM</div>
    </a>

    <!-- User Management -->
    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>

    <!-- User Profile -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/edit/<?= user()->id; ?>" ; ?>
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Jurnalistik -->
    <?php if (in_groups('admin') || in_groups('jurnalistik') || in_groups('user')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Jurnalistik
        </div>

        <!-- Nav Item - NewsFlash -->
        <li class="nav-item">
            <a class="nav-link" href="/newsflash/newsflash" ; ?>
                <i class="fas fa-newspaper"></i>
                <span>NewsFlash</span></a>
        </li>
    <?php endif; ?>

    <!-- Produksi -->
    <?php if (in_groups('admin') || in_groups('produksi')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Produksi
        </div>

        <!-- Nav Item - Podcast -->
        <li class="nav-item">
            <a class="nav-link" href="/podcast/podcast">
                <i class="fas fa-microphone"></i>
                <span>Podcast</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>