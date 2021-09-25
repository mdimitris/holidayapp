<?php
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="./assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $first_name . ' ' . $last_name; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">MENU</li>
        <?php if ($_SESSION['user']['role'] == 2) { ?>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Applications</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="holiday-form.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Submit Holiday</p>
            </a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="users-dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-form.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Add User</p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="user-functions.php" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Log Out</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>