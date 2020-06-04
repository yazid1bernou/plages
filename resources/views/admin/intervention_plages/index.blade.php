@extends('admin.layouts.layout')

@section('header')
  <style>
    
    *  {
       font-family: 'XBRiyaz'  ;
    }
  </style>

@endsection

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5> إحصائيات التدخل على مستوى الشواطىء </h5>
          </div>

          <div class="col-sm-2">
          <a href="{{ url('/intervention_plages/create')}}" >  <button type="button"   class="btn btn-block btn-success">إضافة</button> </a>
          </div>
          <div class="col-sm-4">

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
                  <th> الولاية </th>
                  <th> التاريخ </th>
                  <th> عدد المصطافين </th>
                  <th> عدد التدخلات </th>
                  <th> الأشخاص المنقذين من الغرق </th>
                  <th>   الأشخاص المسعفين في المكان </th>
                  <th> الأشخاص الذي تم إجلائهم الى المركزالصحي</th>
                  <th>   عدد الجرحى بسبب المركبات البحرية</th>
                  <th> عدد المتوفين بسبب المركبات البحرية</th>
                  <th> الأشخاص المنقذين بواسطة الطائرة </th>


                  <th> عدد المتوفين في شاطئ مراقب  H.H.S </th>
                  <th>  عدد المتوفين في شاطئ مراقب P.H.S </th>
                  <th> عدد الأشخاص المتوفين فى شاطئ ممنوع</th>

                  <th>  قائمة الضحايا بالتفصيل</th>
                  <th> PDF </th>
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
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>
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

$(this).html( '  <label >  الولاية  </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
}
if (  $(this).index() == 1) {

$(this).html( '  <label >  التاريخ </label><br> <input type="date" placeholder="البحث" />' );
}



  } );


  var table = $('#example1').DataTable({
    "order": [[ 1, "desc" ]] ,
      scrollX: true  ,
    "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Arabic.json"
      } ,

            "footerCallback": function ( row, data, start, end, display ) {
               var api = this.api(), data;

               // Remove the formatting to get integer data for summation
               var intVal = function ( i ) {
                   return typeof i === 'string' ?
                       i.replace(/[\$,]/g, '')*1 :
                       typeof i === 'number' ?
                           i : 0;
               };
               // Total over all pages
               total = api
                   .column( 0 )
                   .data()
                   .reduce( function (a, b) {
                       return intVal(a) + intVal(b);
                   }, 0 );

               // Total over this page
               pageTotal = api
                   .column(0, { page: 'current'} )
                   .data()
                   .reduce( function (a, b) {
                       return intVal(a) + intVal(b);
                   }, 0 );

               // Update footer
               $( api.column(0 ).footer() ).html(
                   'المجموع'
               );


                 // column 2
               total = api
                   .column( 2 )
                   .data()
                   .reduce( function (a, b) {
                       return intVal(a) + intVal(b);
                   }, 0 );

               // Total over this page
               pageTotal = api
                   .column(2, { page: 'current'} )
                   .data()
                   .reduce( function (a, b) {
                       return intVal(a) + intVal(b);
                   }, 0 );

               // Update footer
               $( api.column(2 ).footer() ).html(
                   pageTotal
               );
               // column 3
             total = api
                 .column( 3 )
                 .data()
                 .reduce( function (a, b) {
                     return intVal(a) + intVal(b);
                 }, 0 );

             // Total over this page
             pageTotal = api
                 .column(3, { page: 'current'} )
                 .data()
                 .reduce( function (a, b) {
                     return intVal(a) + intVal(b);
                 }, 0 );

             // Update footer
             $( api.column(3 ).footer() ).html(
                 pageTotal
             );

             // column 4------------------
           total = api
               .column( 4 )
               .data()
               .reduce( function (a, b) {
                   return intVal(a) + intVal(b);
               }, 0 );

           // Total over this page
           pageTotal = api
               .column(4, { page: 'current'} )
               .data()
               .reduce( function (a, b) {
                   return intVal(a) + intVal(b);
               }, 0 );

           // Update footer
           $( api.column(4).footer() ).html(
               pageTotal
           );

           // column 5------------------
         total = api
             .column( 5 )
             .data()
             .reduce( function (a, b) {
                 return intVal(a) + intVal(b);
             }, 0 );

         // Total over this page
         pageTotal = api
             .column(5, { page: 'current'} )
             .data()
             .reduce( function (a, b) {
                 return intVal(a) + intVal(b);
             }, 0 );

         // Update footer
         $( api.column(5).footer() ).html(
             pageTotal
         );




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

      ajax: "{{ route('intervention_plages.index') }}",

      columns: [


          {data: 'wilaya', name: 'wilaya'},
          {data: 'date_jour', name: 'date_jour'},
          {data: 'nombre_estivants', name: 'nombre_estivants'},
          {data: 'nombre_intervs', name: 'nombre_intervs'},
          {data: 'pers_sauve_noyade', name: 'pers_sauve_noyade'},
          {data: 'pers_soigne_place', name: 'pers_soigne_place'},
          {data: 'pers_evacue_c_s', name: 'pers_evacue_c_s'},
          {data: 'pers_nautique_blesse', name: 'pers_nautique_blesse'},
          {data: 'pers_nautique_decede', name: 'pers_nautique_decede'},
          {data: 'pers_sauve_avion', name: 'pers_sauve_avion'},



          {data: 'count_autorise_hhs', name: 'count_autorise_hhs'},
          {data: 'count_autorise_phs', name: 'count_autorise_phs'},
          {data: 'count_autorise_interdite', name: 'count_autorise_interdite'},

          {data: 'liste_victimes', name: 'liste_victimes'},

            {data: 'pdf_plage_intervention', name: 'pdf_plage_intervention'},


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
