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
           {!! Form::model($plage_victime , ['route' => ['plage_victimes.update' , $plage_victime->id ] , 'method' => 'PATCH']) !!}
                {{ csrf_field() }}



         <div class="desc card card-danger" >
             <div class="card-header">
               <h3 class="card-title"> تغيير معلومات الضحية </h3>

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
                    <input type="text" name="nom_victime" class="form-control" placeholder=""
                     value="{{ $plage_victime->nom_victime }}"
                    >
                      </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                    <label> اللقب </label>
                   <input type="text" name="prenom_victime" class="form-control" placeholder=""
                    value="{{ $plage_victime->prenom_victime }}"
                   >
                 </div>
                 </div>
                 <div class="col-3">
                   <div class="form-group">
                   <label> الجنس </label>
                    <div class="form-group">
                   ذكر  <input type="radio" name="sexe"  value="masculin"   class="form-control flat-red"
                  {{ $plage_victime->sexe =='masculin' ? 'checked' : ''}}
                   >
                  أنثى  <input type="radio" name="sexe" value="feminin" class="form-control flat-red"
                  {{ $plage_victime->sexe =='feminin' ? 'checked' : ''}}
                  >
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
                    <input type="date" name="date_naissance" class="form-control"
                    value="{{ $plage_victime->date_naissance }}"
                    placeholder="">
                   </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                      <label> مكان الإزدياد </label>
                      <input type="text" name="lieu_naissance" class="form-control"
                      value="{{ $plage_victime->lieu_naissance }}"
                       placeholder="">
                    </div>
                 </div>
                 <div class="col-3">
                   <div class="form-group">
                   <label> الوظيفة</label>
                  <input type="text" name="fonction" class="form-control"
                   value="{{ $plage_victime->fonction }}"
                   placeholder="" >
                 </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                  <label> العنوان الشخصي</label>
                 <input type="text" name="address_personnel" class="form-control"
                   value="{{ $plage_victime->address_personnel }}"
                 placeholder="">
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
                       <input type="text" name="daira_victime" class="form-control"
                      value="{{ $plage_victime->daira_victime }}"
                        placeholder="">
                      </div>
                 </div>
                 <div class="col-3">
                  <div class="form-group">
                   <label> البلدية</label>
                  <input type="text"  name="commune_victime" class="form-control"
                   value="{{ $plage_victime->commune_victime }}"
                   placeholder="" >
                  </div>
                </div>


                 </div>

                 <div class="row">

                   <div class="col-4">
                       <div class="form-group">
                     <label> المكان المسمي </label>
                    <input type="text" name="lieu_dit_victime" class="form-control"
                 value="{{ $plage_victime->lieu_dit_victime }}"
                    placeholder="">
                  </div>
                  </div>
                  <div class="col-4">
                   <div class="form-group">
                    <label> تسمية الشاطىء</label>
                   <input type="text" name="denomination_plage" class="form-control"
               value="{{ $plage_victime->denomination_plage }}"
                    placeholder="">
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
                           <input type="radio" name="situation_juridique_plage" value="autorise_phs" class="flat-red"
                              {{ $plage_victime->situation_juridique_plage =='autorise_phs' ? 'checked' : ''}}
                           >
                              شاطىء مراقب H.H.S
                          <input type="radio" name="situation_juridique_plage" value="autorise_hhs" class="flat-red"
                           {{ $plage_victime->situation_juridique_plage =='autorise_hhs' ? 'checked' : ''}}
                          >
                         </label>
                         <label>
                           ممنوع
                          <input type="radio" name="situation_juridique_plage" value="interdite" class="flat-red"
                             {{ $plage_victime->situation_juridique_plage =='interdite' ? 'checked' : ''}}
                          >
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
                    <input type="radio" name="situation_mer" value="calme" class="minimal-red"
                      {{ $plage_victime->situation_mer =='calme' ? 'checked' : ''}}
                     >
                  </label>
                  <label>
                    هائج قليلا
                    <input type="radio" name="situation_mer" value="peu_agitee" class="minimal-red"
                       {{ $plage_victime->situation_mer =='peu_agitee' ? 'checked' : ''}}
                    >
                  </label>
                  <label>
                    هائج
                    <input type="radio" name="situation_mer" value="agitee" class="minimal-red"
                   {{ $plage_victime->situation_mer =='agitee' ? 'checked' : ''}}
                    >
                  </label>
                  <label>
                    هائج كثيرا
                    <input type="radio" name="situation_mer"  value="tres_agitee" class="minimal-red"
                          {{ $plage_victime->situation_mer =='tres_agitee' ? 'checked' : ''}}
                    >
                  </label>
                  <label>
                    عاصف
                    <input type="radio" name="situation_mer" value="houleuse" class="minimal-red"
                    {{ $plage_victime->situation_mer =='houleuse' ? 'checked' : ''}}
                    >
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
                  <input type="radio" name="couleur_fanion" value="vert" class="minimal-red"
                {{ $plage_victime->couleur_fanion =='vert' ? 'checked' : ''}}
                  >
                </label>
                <label>
                 برتقالي
                  <input type="radio" name="couleur_fanion" value="orange" class="minimal-red"
                 {{ $plage_victime->couleur_fanion =='orange' ? 'checked' : ''}}
                  >
                </label>
                <label>
                   أحمر
                  <input type="radio" name="couleur_fanion" value="rouge" class="minimal-red"
                 {{ $plage_victime->couleur_fanion =='rouge' ? 'checked' : ''}}
                  >
                </label>



              </div>

            </div>
          </div>

        <div class="row">
          <div class="col-2">
           <div class="form-group">
            <label> تاريخ الغرق</label>
           <input type="date"  name="date_heure_noyade" class="form-control"
            value="{{ $plage_victime->date_heure_noyade }}"
            placeholder="">
          </div>
          </div>
          <div class="col-2">
            <div class="form-group">
            <label> تاريخ الإجلاء </label>
           <input type="date" name="date_heure_repechage" class="form-control"
          value="{{ $plage_victime->date_heure_repechage }}"
            placeholder="">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label> ملخص سبب الغرق </label>
           <textarea type="text" name="cause_noyade" class="form-control"

           placeholder="">{{ $plage_victime->cause_noyade }} </textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
           <div class="form-group">
            <label> الوسائل المتدخلة</label>
           <input type="text" name="moyen_engage" class="form-control"
           value="{{ $plage_victime->moyen_engage }}"
           placeholder="">
          </div>
          </div>
          <div class="col-3">
            <div class="form-group">
            <label> الإجلاء نحو</label>
           <input type="text" name="evacuee_vers" class="form-control"
           value="{{ $plage_victime->evacuee_vers }}"
            placeholder="">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label> الحاضرون في المكان</label>
           <textarea type="text" name="presents_lieux" class="form-control"

           placeholder="">{{ $plage_victime->presents_lieux }} </textarea>
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




       </div>
</div>



<script>

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
</script>


@endsection
