<?php
include_once  'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Applications</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./assets/plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">



    <?php include 'sidebar.php' ?>





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Applications</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Application</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <div class="col-md-2 ml-auto">
                      <a href="holiday-form.php" class="btn btn-block btn-primary">Primary</a>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <?php if ($_SESSION['import_success'] == 1) { ?>

                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="icon fas fa-check"></i> Successful Submission!</h5>
                      Holiday period added successfully.
                    </div>

                  <?php $_SESSION['import_success'] = 0;
                  } ?>

                  <table id="applications" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>Date Created</th>
                        <th>Dates Requested</th>
                        <th>Days Requested</th>
                        <th>Status</th>
                      </tr>
                    </thead>

                  </table>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="./assets/plugins/jszip/jszip.min.js"></script>
  <script src="./assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="./assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="./assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="./assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./assets/dist/js/dashboard.js"></script> -->
  <!-- Page specific script -->

</body>

</html>