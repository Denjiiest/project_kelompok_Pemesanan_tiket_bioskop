<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cinema MM2 </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>
    <li class="nav-item">
        <style media="screen">
        </style>
        <a class="nav-link pb-0" href="<?= base_url(''); ?>">
            <i class="fas fa-book-open"></i>
            <span>Ruang admin sementara</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <style media="screen">
        </style>

        <a class="nav-link pb-0" href="<?= base_url('tiket'); ?>">
            <i class="fas fa-book-open"></i>
            <span>Tiket User</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
        User
    </div>
    <li class="nav-item">
        <style media="screen">
        </style>
        <a class="nav-link pb-0" href="<?= base_url('film/index'); ?>">
            <i class="fab fa-youtube"></i>
            <span>List Film</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pesanfilm'); ?>">
            <i class="fas fa-video"></i>
            <span>Pesan FIlm</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- >