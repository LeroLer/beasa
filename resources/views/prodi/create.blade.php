@extends('template.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Program Studi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb afloat-sm-right">
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data Prodi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="tambahaksiprodi.php" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="prodi1">Nama Prodi</label>
                      <input type="text" name="namaprodi" class="form-control" id="prodi1" placeholder="Masukkan Prodi">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>

  <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->

  <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <!-- Summernote -->
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

  </body>


@endsection