@extends('admin.layouts.layout')



@section('header')
<style>
     .map {
     height: 400px;
     width: 100%;
   }
</style>
@endsection

@section('content')

<div class="container">
 <div class="col-md-12"  >
 <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"> إضافة مستخدم جديد </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

             <form  enctype ="multipart/form-data"  action="{{url('/users/store')}}" method="post" style="direction:rtl">
                {{ csrf_field() }}

                <div class="card-body">



                  <div class="row">
                       <div class="col-md-3">
                         <div class="form-group">
                           <label >  إسم المستخدم </label>
                         <input type="text" name="name" class="form-control" id="" placeholder="أدخل الإسم">
                         </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                          <label >البريد الإلكتروني  </label>
                        <input type="email" name="email" class="form-control" id="" placeholder=" البريد  الإلكتروني">
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                           <div class="custom-control custom-radio">
                             <input class="custom-control-input" type="radio"
                             id="customRadio2" name="role" value="utilisateur_principale" >
                             <label for="customRadio2" class="custom-control-label"> مستخدم رئيسي </label>
                           </div>

                             <div class="custom-control custom-radio">
                               <input class="custom-control-input" type="radio"
                               id="customRadio1" name="role" value="utilisateur_wilaya" checked>
                               <label for="customRadio1" class="custom-control-label">  مستخدم ولائي</label>
                             </div>

                             <div class="custom-control custom-radio">
                               <input class="custom-control-input" type="radio"
                               id="customRadio3" name="role" value="utilisateur_simple" >
                               <label for="customRadio3" class="custom-control-label">  مستخدم عادي</label>
                             </div>
                         </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                          <label >  كلمة المرور </label>
                        <input type="password" name="password" class="form-control" id="" placeholder="كلمة المرور">
                        </div>

                       </div>

                  </div>


                  <div class="row">
                       <div class="col-md-3">
                         <div class="form-group">
                           <label >  الولاية </label>
                         <input type="text" name="wilaya" class="form-control" id="" placeholder=" أدخل الولاية ">
                         </div>
                       </div>
                       <div class="col-md-3">

                          <div class="form-group">
                              <label >  الدائرة </label>
                              <input type="text" name="daira" class="form-control" id="" placeholder=" أدخل الدائرة ">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                             <label >  البلدية </label>
                             <input type="text" name="commune" class="form-control" id="" placeholder=" أدخل البلدية ">
                         </div>

                       </div>

                  </div>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                       <label>   </label>
                     <input type="hidden" name="latitude" class="form-control" id="Longitude" placeholder="" readonly>
                     </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                       <label >  </label>
                     <input type="hidden" name="longitude" class="form-control" id="Latitude" placeholder="" readonly>
                     </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-warning-gradient">
                           <div class="card-header">
                             <h3 class="card-title"> موقع المستخدم على الخريطة </h3>

                             <div class="card-tools">
                               <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                               </button>
                             </div>
                             <!-- /.card-tools -->
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                            <div id="map" class="map"> </div>
                           </div>
                           <!-- /.card-body -->
                         </div>



                    </div>
                  </div>
<!---------------------------------------------------------------------------------------------->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success"> حفظ المعلومات<i class="fa fa-save"></i></button>
                </div>
              </form>

               @include('sweetalert::alert')
  </div>
  </div>
</div>
<script>
$(function() {
  // use below if you want to specify the path for leaflet's images
  //L.Icon.Default.imagePath = '@Url.Content("~/Content/img/leaflet")';

  var curLocation = [0, 0];
  // use below if you have a model
  // var curLocation = [@Model.Location.Latitude, @Model.Location.Longitude];

  if (curLocation[0] == 0 && curLocation[1] == 0) {
    curLocation = [ 36.776 , 3.060]  ;
  }

  var map = L.map('map').setView(curLocation, 6);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  map.attributionControl.setPrefix(false);

  var marker = new L.marker(curLocation, {
    draggable: 'true'
  });

  marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
      draggable: 'true'
    }).bindPopup(position).update();
    $("#Latitude").val(position.lat);
    $("#Longitude").val(position.lng).keyup();
  });

  $("#Latitude, #Longitude").change(function() {
    var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
    marker.setLatLng(position, {
      draggable: 'true'
    }).bindPopup(position).update();
    map.panTo(position);
  });

  map.addLayer(marker);
})
</script>
@endsection
