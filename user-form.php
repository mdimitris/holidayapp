<?php
include_once  'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="./assets/plugins/daterangepicker/daterangepicker.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Advanced Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Advanced Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create User</h3>
                </div>
                <div class="card-body">
                  <!-- Date -->
                  <form action='user-functions.php' id="userForm" method='post'>

                    <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="<?php if (isset($_SESSION['edit'])) echo $_SESSION['edit']['firstname']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="firstname">Lastname</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" value="<?php if (isset($_SESSION['edit'])) echo $_SESSION['edit']['lastname']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php if (isset($_SESSION['edit'])) echo $_SESSION['edit']['email']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Retype Password</label>
                      <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label>User type</label>
                      <select class="form-control" id="user_type" name="user_type">
                      </select>
                    </div>

                    <input type="hidden" name="actiontype" value="<?php if (isset($_SESSION['edit'])) echo 'update';
                                                                  else echo 'create'; ?>" />

                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-primary btn-lg" name='userSubmit' value="<?php if (isset($_SESSION['edit'])) echo 'Update User';
                                                                                                              else echo 'Create User'; ?>" />
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (right) -->
          </div>

        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once('footer.php'); ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- InputMask -->
  <script src="./assets/plugins/moment/moment.min.js"></script>
  <script src="./assets/plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="./assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/dist/js/adminlte.min.js"></script>
  <!-- jquery-validation -->
<script src="./assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./assets/plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./assets/dist/js/application.js"></script>
  <script src="./assets/dist/js/user-form.js"></script>
  <!-- Page specific script -->

</body>

</html>