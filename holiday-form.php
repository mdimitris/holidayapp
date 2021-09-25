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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="./assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
              <h1>Holiday Form</h1>
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
                  <h3 class="card-title">Date picker</h3>
                </div>
                <div class="card-body">
                  <!-- Date -->
                  <form action='applications.php' method='post'>
                    <div class="form-group">
                      <label>Date From:</label>
                      <div class="input-group date" id="dateFrom" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#dateFrom" name="date_from" />
                        <div class="input-group-append" data-target="#dateFrom" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Date To:</label>
                      <div class="input-group date" id="dateTo" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#dateTo" name="date_to" />
                        <div class="input-group-append" data-target="#dateTo" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Reason</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="comments"></textarea>
                    </div>

                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-primary btn-lg" name='employeeSubm' value='Submit' />
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
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

  <script src="./assets/dist/js/application.js"></script>
  <!-- Page specific script -->

</body>

</html>