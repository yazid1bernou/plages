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
   {!! Html::style('admin/plugins/iCheck/all.css') !!}
   {!! Html::style('admin/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}
   {!! Html::style('admin/plugins/timepicker/bootstrap-timepicker.min.css') !!}

  {!! Html::style('admin/dist/css/persian-datepicker.min.css') !!}
  {!! Html::style('admin//plugins/select2/select2.min.css') !!}




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
  {!! Html::script('admin/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}
  {!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
  {!! Html::script('admin/plugins/iCheck/icheck.min.js') !!}


  <!-- datepicker -->
  {!! Html::script('admin/plugins/datepicker/bootstrap-datepicker.js') !!}
  <!-- Bootstrap WYSIHTML5 -->
  {!! Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

  <!-- Slimscroll -->
  {!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
  <!-- FastClick -->
  {!! Html::script('admin/plugins/fastclick/fastclick.js') !!}
  {!! Html::script('admin/dist/js/persian-date.min.js') !!}
  {!! Html::script('admin/dist/js/persian-datepicker.min.js') !!}


  <!-- AdminLTE App -->
  {!! Html::script('admin/dist/js/adminlte.min.js') !!}
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {!! Html::script('admin/dist/js/pages/dashboard.js') !!}
  <!-- AdminLTE for demo purposes -->
  {!! Html::script('admin/dist/js/demo.js') !!}
  {!! Html::script('admin/plugins/select2/select2.full.min.js') !!}
  {!! Html::script('admin/plugins/input-mask/jquery.inputmask.js') !!}
  {!! Html::script('admin/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
  {!! Html::script('admin/plugins/input-mask/jquery.inputmask.extensions.js') !!}


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

  <!-- Navbar -->
  <nav class=" navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->

            <div class="btn-group">
                               <button type="button" class="btn btn-success">   {{ Auth::user()->name }} </button>
                               <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                 <span class="caret"></span>
                                 <span class="sr-only">Toggle Dropdown</span>
                               </button>
                               <div class="dropdown-menu" role="menu">

                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('تسجيل الخروج') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                               </div>
             </div>
             <div class="btn-group">
                                <a type="button" href="{{ url('/users')}}"  class="btn btn-success">  قائمة المستخدمين  </a>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="{{ url('/intervention_plages/create')}}"> إضافة مستخدم </a>


                                </div>
              </div>
                     <div class="btn-group">
                                        <a type="button" href="{{ url('/home')}}"  class="btn btn-success">   الصفحة الرئيسية  </a>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                          <span class="caret"></span>
                                          <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                          <a class="dropdown-item" href="{{ url('/intervention_plages/create')}}"> إضافة إحصائيات التدخل على مستوى الشواطىء</a>
                                          <a class="dropdown-item" href="{{ url('/intervention_plages')}}">عرض كل إحصائيات التدخل على مستوى الشواطىء </a>

                                        </div>
                      </div>



    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  محمدرضا عطوان
                  <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">با من تماس بگیر لطفا...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  پیمان احمدی
                  <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">من پیامتو دریافت کردم</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  سارا وکیلی
                  <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
            <span class="float-left text-muted text-sm">3 دقیقه</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
            <span class="float-left text-muted text-sm">12 ساعت</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
            <span class="float-left text-muted text-sm">2 روز</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>


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
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
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
