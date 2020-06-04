<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> حراسة الشواطئ-العمليات البحرية</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    {!! Html::style('admin/plugins/font-awesome/css/font-awesome.min.css') !!}
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
     {!! Html::style('admin/dist/css/adminlte.css') !!}
   <!-- iCheck -->
   {!! Html::style('admin/plugins/iCheck/flat/blue.css') !!}

   <!-- Morris chart -->
   {!! Html::style('admin/plugins/morris/morris.css') !!}
   <!-- jvectormap -->
   {!! Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
   <!-- Date Picker -->
   {!! Html::style('admin/plugins/datepicker/datepicker3.css') !!}
   <!-- Daterange picker -->
   {!! Html::style('admin/plugins/daterangepicker/daterangepicker-bs3.css') !!}
   <!-- bootstrap wysihtml5 - text editor -->
   {!! Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- bootstrap rtl -->
   {!! Html::style('admin/dist/css/bootstrap-rtl.min.css') !!}
   <!-- template rtl version -->
   {!! Html::style('admin/dist/css/custom-style.css') !!}


  {!! Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') !!}


<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

 <!-- jQuery -->
  {!! Html::script('admin/plugins/jquery/jquery.min.js') !!}

  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  {!! Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  {!! Html::script('admin/plugins/morris/morris.min.js') !!}
  <!-- Sparkline -->
  {!! Html::script('admin/plugins/sparkline/jquery.sparkline.min.js') !!}
  <!-- jvectormap -->
  {!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
  {!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
  <!-- jQuery Knob Chart -->
  {!! Html::script('admin/plugins/knob/jquery.knob.js') !!}

  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  {!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}
  <!-- datepicker -->
  {!! Html::script('admin/plugins/datepicker/bootstrap-datepicker.js') !!}
  <!-- Bootstrap WYSIHTML5 -->
  {!! Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

  <!-- Slimscroll -->
  {!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
  <!-- FastClick -->
  {!! Html::script('admin/plugins/fastclick/fastclick.js') !!}
  <!-- AdminLTE App -->
  {!! Html::script('admin/dist/js/adminlte.min.js') !!}
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {!! Html::script('admin/dist/js/pages/dashboard.js') !!}
  <!-- AdminLTE for demo purposes -->
  {!! Html::script('admin/dist/js/demo.js') !!}

<!-- DataTables -->
{!! Html::script('admin/plugins/datatables/jquery.dataTables.js') !!}
{!! Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') !!}
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<!-------------- button print and visibilite --------------------------------------------->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" />
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"> </script>

<!----- framework leaflet ------------------------------------------------------>
{!! Html::style('admin/maps/leaflet/leaflet.css') !!}
{!! Html::script('admin/maps/leaflet/leaflet.js') !!}

 @yield('header')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">




  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark " style="text-align:center"> تطبيق حراسة الشواطىء - العمليات البحرية </h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="login-box">
      <div class="login-logo">

      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg"> أدخل البريد الإلكتروني و كلمة المرور</p>

          <form   action="{{ route('login') }}"  method="post" > 
              @csrf
            <div class="input-group mb-3">
              <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد الإلكتروني">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append">
                <span class="fa fa-envelope input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control" name="password" placeholder="كلمة المرور">


              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append">
                <span class="fa fa-lock input-group-text"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-8">

              </div>
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-success btn-block btn-flat"> الدخول</button>
              </div>
              <!-- /.col -->
            </div>
          </form>


          <!-- /.social-auth-links -->


        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer  style="text-align:center">
    <strong><a href=""> المديرية العامة للحماية المدنية</a>.CopyLeft &copy; 2020 </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





</body>
</html>
