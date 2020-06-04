@extends('admin.layouts.layout')



@section('header')
<style>
  * {
     font-family: 'XBRiyaz'  ;
  }
</style>

@endsection

@section('content')

<div class="container">
     <div class="row">



       <div class="col-md-12" >
         <form  enctype ="multipart/form-data"  action="{{url('/intervention_plages/'.$intervention_plage->id.'/store')}}" method="post" style="direction:rtl">
        {{ csrf_field() }}

        <!-- radio -->
       <h3>     هل يوجد ضحايا ؟     </h3>
                 <div class="form-group">

                   <label>
                  نعم يوجد
                     <input type="radio" name="question_victime"  value="oui" >
                   </label>
                   <label>
                      لا يوجد
                     <input type="radio" name="question_victime"  value="non" checked>
                   </label>

                 </div>


         <div class="desc card card-danger" id="question_victimeoui" style="display:none">
             <div class="card-header">
               <h3 class="card-title">إضافةبطاقةلتعريف بالضحية</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                 </button>
               </div>
               <!-- /.card-tools -->
             </div>
             <!-- /.card-header -->
             <div class="card-body">
                 <div class="row">
                   <div class="col-3">
                       <div class="form-group">
                     <label> الإسم </label>
                    <input type="text" name="nom_victime" class="form-control" placeholder="">
                      </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                    <label> اللقب </label>
                   <input type="text" name="prenom_victime" class="form-control" placeholder="">
                 </div>
                 </div>
                 <div class="col-3">
                   <div class="form-group">
                   <label> الجنس </label>
                    <div class="form-group">
                   ذكر  <input type="radio" name="sexe"  value="masculin" class="form-control flat-red">
                  أنثى  <input type="radio" name="sexe" value="feminin" class="form-control flat-red">
                   </div>
                </div>
                </div>
                 <div class="col-3">
                  <div class="form-group">
                   <label> الجنسية : </label>
                     <div class="form-group">
                جزائرية  <input type="radio" name="nationalite" value="algerienne" class="form-control flat-red" checked>
                    </div>
                  </div>
                </div>

                 </div>

                 <div class="row">
                   <div class="col-3">
                     <div class="form-group">
                     <label> تاريخ الإزدياد  </label>
                    <input type="date" name="date_naissance" class="form-control" placeholder="">
                   </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                      <label> مكان الإزدياد </label>
                      <input type="text" name="lieu_naissance" class="form-control" placeholder="">
                    </div>
                 </div>
                 <div class="col-3">
                   <div class="form-group">
                   <label> الوظيفة</label>
                  <input type="text" name="fonction" class="form-control" placeholder="" >
                 </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                  <label> العنوان الشخصي</label>
                 <input type="text" name="address_personnel" class="form-control" placeholder="">
                </div>
               </div>

                 </div>

                    <div class="row">
                      <div class="col-4" >

                      </div>
                      <div class="col-4" style="color:#F00">
                        <div class="form-group">
                          <label>
                         معلومات خاصة بمكان الغرق :
                         </label>
                         <hr>
                        </div>
                      </div>
                      <div class="col-4" >

                      </div>
                    </div>

                 <div class="row">


                   <div class="col-3">
                       <div class="form-group">
                        <label> الولاية </label>
                        <input type="text" name="wilaya_victime" class="form-control" placeholder="" value="{{Auth::user()->wilaya}}" readonly>
                      </div>
                  </div>

                  <div class="col-3">
                      <div class="form-group">
                       <label> الدائرة</label>
                       <input type="text" name="daira_victime" class="form-control" placeholder="">
                      </div>
                 </div>
                 <div class="col-3">
                  <div class="form-group">
                   <label> البلدية</label>
                  <input type="text"  name="commune_victime" class="form-control" placeholder="" >
                  </div>
                </div>


                 </div>

                 <div class="row">

                   <div class="col-4">
                       <div class="form-group">
                     <label> المكان المسمي </label>
                    <input type="text" name="lieu_dit_victime" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="col-4">
                   <div class="form-group">
                    <label> تسمية الشاطىء</label>
                   <input type="text" name="denomination_plage" class="form-control" placeholder="">
                  </div>
                  </div>
              </div>

          <div class="row">
            <div class="col-3"  >
                 <div class="form-group">
                   <label style="color:#F00">
                     الوضعية القانونية للشاطىء  :
                   </label>
                 </div>
               </div>

                  <div class="col-8"  >
                       <div class="form-group">
                         <label>
                           مسموح :
                           شاطىء مراقب P.H.S
                           <input type="radio" name="situation_juridique_plage" value="autorise_phs" class="flat-red" checked>
                              شاطىء مراقب H.H.S
                          <input type="radio" name="situation_juridique_plage"value="autorise_hhs" class="flat-red" >
                         </label>
                         <label>
                           ممنوع
                          <input type="radio" name="situation_juridique_plage" value="interdite" class="flat-red">
                         </label>
                      </div>

                     </div>


                   <div class="col-4" >
                     <div class="form-group">

                     </div>
                   </div>
            </div>

           <div class="row">
              <div class="col-1">
                <div class="form-group">
                <label style="color:#F00">
                      حالة البحر :
                </label>
                </div>
              </div>

              <div class="col-5">
                <div class="form-group">
                  <label>
                    هادئ
                    <input type="radio" name="situation_mer" value="calme" class="minimal-red" checked>
                  </label>
                  <label>
                    هائج قليلا
                    <input type="radio" name="situation_mer" value="peu_agitee" class="minimal-red">
                  </label>
                  <label>
                    هائج
                    <input type="radio" name="situation_mer" value="agitee" class="minimal-red">
                  </label>
                  <label>
                    هائج كثيرا
                    <input type="radio" name="situation_mer"  value="tres_agitee" class="minimal-red">
                  </label>
                  <label>
                    عاصف
                    <input type="radio" name="situation_mer" value="houleuse" class="minimal-red">
                  </label>

                </div>

              </div>

            <div class="col-1">
              <div class="form-group">
              <label style="color:#F00">
                  لون الراية :
              </label>
              </div>
            </div>
            <div class="col-5">
              <div class="form-group">
                <label>
                    أخضر
                  <input type="radio" name="couleur_fanion" value="vert" class="minimal-red" checked>
                </label>
                <label>
                 برتقالي
                  <input type="radio" name="couleur_fanion" value="orange" class="minimal-red">
                </label>
                <label>
                   أحمر
                  <input type="radio" name="couleur_fanion" value="rouge" class="minimal-red">
                </label>



              </div>

            </div>
          </div>

        <div class="row">
          <div class="col-2">
           <div class="form-group">
            <label> تاريخ الغرق</label>
           <input type="date"  name="date_heure_noyade" class="form-control" placeholder="">
          </div>
          </div>
          <div class="col-2">
            <div class="form-group">
            <label> تاريخ الإجلاء </label>
           <input type="date" name="date_heure_repechage" class="form-control" placeholder="">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label> ملخص سبب الغرق </label>
           <textarea type="text" name="cause_noyade" class="form-control" placeholder=""> </textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
           <div class="form-group">
            <label> الوسائل المتدخلة</label>
           <input type="text" name="moyen_engage" class="form-control" placeholder="">
          </div>
          </div>
          <div class="col-3">
            <div class="form-group">
            <label> الإجلاء نحو</label>
           <input type="text" name="evacuee_vers" class="form-control" placeholder="">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label> الحاضرون في المكان</label>
           <textarea type="text" name="presents_lieux" class="form-control" placeholder=""> </textarea>
            </div>
          </div>
        </div>

           </div>



             <!-- /.card-body -->
           </div>
           <!-- /.card -->
           <button type="submit" class="btn btn-block btn-success btn-sm ">قم بحفظ هذه المعلومات</button>
       </div>



       </form>
        @include('sweetalert::alert')
  <!---end form ------------------------------------>
  </div>


<!---- star display list data victimes --------------------------------------->
     <div class="row">
       <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>

                        <th>  الإسم </th>
                        <th> اللقب   </th>
                        <th> الجنس</th>
                        <th> الولاية</th>
                        <th> الدائرة</th>
                        <th> البلدية</th>
                        <th> العنوان الشخصي </th>
                        <th> تغيير</th>
                        <th> حذف</th>
                        <th> pdf</th>


                      </tr>
                      </thead>
                      <tbody>

                       @foreach($intervention_plage->plage_victimes as $plage_victime)
                         <tr>
                        <td> {{  $plage_victime->nom_victime }}  </td>
                        <td> {{  $plage_victime->prenom_victime }} </td>
                        <td> {{  $plage_victime->sexe }} </td>
                        <td> {{  $plage_victime->wilaya_victime }} </td>
                        <td> {{  $plage_victime->daira_victime }} </td>
                        <td> {{  $plage_victime->commune_victime }} </td>
                        <td> {{  $plage_victime->address_personnel }} </td>
                  <td>
                   <a href="{{ url('plage_victimes/'.$plage_victime->id.'/edit')}}">  <i class="fa fa-pencil-square-o"></i> </i> </a>
                  </td>

                        <td> <a href="" class="btn btn-danger"> حذف </a> </td>
                        <td>

                         <a href="{{ url('pdf_plage_victime/'.$plage_victime->id)}}"> PDF </a>

                        </td>

                        </tr>
                       @endforeach


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

                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>

              </div>
       </div>
</div>



<script>
$(document).ready(function() {
  $("input[name$='question_victime']").click(function() {
      var test = $(this).val();

      $(".desc").hide();
      $("#question_victime" + test).show(); 
  });
})
$(function () {

  //Initialize Select2 Elements
     $('.select2').select2()

     //Datemask dd/mm/yyyy
     $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
     //Datemask2 mm/dd/yyyy
     $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
     //Money Euro
     $('[data-mask]').inputmask()

     //iCheck for checkbox and radio inputs
     $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
       checkboxClass: 'icheckbox_minimal-blue',
       radioClass   : 'iradio_minimal-blue'
     })
     //Red color scheme for iCheck
     $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
       checkboxClass: 'icheckbox_minimal-red',
       radioClass   : 'iradio_minimal-red'
     })
     //Flat red color scheme for iCheck
     $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
       checkboxClass: 'icheckbox_flat-green',
       radioClass   : 'iradio_flat-green'
     })

     //Colorpicker
     $('.my-colorpicker1').colorpicker()
     //color picker with addon
     $('.my-colorpicker2').colorpicker()


     $('.normal-example').persianDatepicker();




 });


 $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example1 thead th').each( function () {
        var title = $(this).text();


        if (  $(this).index() == 0) {
        $(this).html( '  <label >  الإسم   </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
         }
         if (  $(this).index() == 1) {
        $(this).html( '  <label >  اللقب    </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
         }

         if (  $(this).index() == 2) {
        $(this).html( '  <label >  الجنس   </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
         }

         if (  $(this).index() == 4) {
        $(this).html( '  <label >  الدائرة   </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
         }
         if (  $(this).index() == 5) {
        $(this).html( '  <label >   البلدية   </label><br> <input type="text" placeholder="البحث" style="width:120px"/>' );
         }



    } );

    // DataTable
    var table = $('#example1').DataTable({
      scrollX: true  , 
 dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.header() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

     // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'select', this.header() ).on( 'change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );




} );
</script>

@endsection
