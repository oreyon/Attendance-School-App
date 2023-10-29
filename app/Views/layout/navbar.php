<?php

use App\Controllers\Teachers;
?>
<!-- Sidebar -->

<!-- =========================================================== -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMKN 3 BANJARMASIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Nav Item - Presensi -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>presents">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Presensi</span></a>
            </li>

            <!-- Divider -->
            <?php if(in_groups('admin')): ?>
            <hr class="sidebar-divider">


            <!-- Nav Item - Mata Pelajaran -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>mapels">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Mata Pelajaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Guru -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>teachers">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Guru</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Kelas -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>classes">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Kelas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Siswa -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>students">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Siswa</span></a>
            </li>

            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

           <!-- Nav Item - Siswa -->
           <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

  
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


