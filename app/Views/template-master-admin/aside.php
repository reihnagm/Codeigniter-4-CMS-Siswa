<?php
use Config\Services;
  $request = Services::request();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#!" class="brand-link ml-3">
    <span class="brand-text font-weight-light">CMS Siswa</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#!" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('/') ?>" class="nav-link <?= $request->uri->getSegment(1) == "" ? "active" : "" ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a id="logout" href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>