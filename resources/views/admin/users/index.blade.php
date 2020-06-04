@extends('admin.layouts.layout')

@section('header')


@endsection

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>  المستخدمين لهذا التطبيق</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">.</a></li>
              <li class="breadcrumb-item active">.</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> إسم المستخدم  </th>
                  <th>البريد الإلكتروني </th>
                  <th> nombre interve  </th>
                  <th> عمليات </th>


                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@include('sweetalert::alert')
 <script type="text/javascript">

$(function () {

    $('#example1 thead th ').each( function () {
      var title = $(this).text();




if (  $(this).index() == 0) {

$(this).html( '  <label > إسم المستخدم  </label><br> <input type="text" placeholder="البحث" />' );
}

if (  $(this).index() == 1) {

$(this).html( '  <label >   البريد الإلكتروني   </label><br> <input type="text" placeholder="البحث" />' );
}

  } );


  var table = $('#example1').DataTable({
    "order": [[ 1, "desc" ]] ,
      scrollX: false  ,
    "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Arabic.json"
      } ,



     dom: 'Bfrtip',

    "lengthMenu": [ [10, 25, 50, 100 , 200 , 500 ,  -1], [10, 25, 50, 100 , 200 , 500 ,  "All"] ] ,
    buttons: [
"pageLength" ,
  'excel' ,



  {
  title : '' ,
      extend: "print",
       footer: 'true',
       head: 'true' ,
      exportOptions: {
           columns: ':visible',

       } ,
      customize: function(win)
      {
        $(win.document.body)

                 .prepend(
                     '<p>جدول ليوم <label > التاريخ في الجدول </label> </p>'+
                     ' <h3 style="text-align : center">  العدد الإجمالي المتواجد حاليا و الغير مستعمل حاليا على مستوى وحدات الولاية </h3>'
                 );
          var last = null;
          var current = null;
          var bod = [];

          var css = '@page { size: landscape; }',
              head = win.document.head || win.document.getElementsByTagName('head')[0],
              style = win.document.createElement('style');

          style.type = 'text/css';
          style.media = 'print';

          if (style.styleSheet)
          {
            style.styleSheet.cssText = css;
          }
          else
          {
            style.appendChild(win.document.createTextNode(css));
          }

          head.appendChild(style);
   }
},

 'colvis' ,


] ,

      processing: true,

    serverSide: true,

      ajax: "{{ route('users.index') }}",

      columns: [


          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},

            {data: 'counts', name: 'counts'},

          {data: 'action', name: 'action', orderable: false, searchable: false},





      ]

  });

      table.columns().eq(0).each(function (colIdx) {
         $('input' , table.column(colIdx).header()).on('keyup change' , function () {

                table
                       .column(colIdx)
                       .search(this.value)
                       .draw() ;
         }) ;
       }) ;




});



</script>
@endsection
