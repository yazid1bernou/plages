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
  <div class="row">
 <div class="col-md-12"  >
 <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">  تغيير معلومات هذا المستخدم  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

               {!! Form::model($user , ['route' => ['users.update' , $user->id ] , 'method' => 'PATCH']) !!}
                {{ csrf_field() }}

                <div class="card-body">



                  <div class="row">
                       <div class="col-md-3">
                         <div class="form-group">
                           <label >  إسم المستخدم </label>
                         <input type="text" name="name" class="form-control" id="" value="{{ $user->name}}">
                         </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                          <label >البريد الإلكتروني  </label>
                        <input type="email" name="email" class="form-control" id="" value="{{ $user->email}}">
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                           <div class="custom-control custom-radio">
                             <input class="custom-control-input" type="radio"
                             id="customRadio2" name="role" value="utilisateur_principale" {{ $user->role =='utilisateur_principale' ? 'checked' : ''}} >
                             <label for="customRadio2" class="custom-control-label"> مستخدم رئيسي </label>
                           </div>

                             <div class="custom-control custom-radio">
                               <input class="custom-control-input" type="radio"
                               id="customRadio1" name="role" value="utilisateur_wilaya" {{ $user->role =='utilisateur_wilaya' ? 'checked' : ''}}>
                               <label for="customRadio1" class="custom-control-label">  مستخدم ولائي</label>
                             </div>

                             <div class="custom-control custom-radio">
                               <input class="custom-control-input" type="radio"
                               id="customRadio3" name="role" value="utilisateur_simple" {{ $user->role =='utilisateur_simple' ? 'checked' : ''}} >
                               <label for="customRadio3" class="custom-control-label">  مستخدم عادي</label>
                             </div>
                         </div>
                       </div>
                       <div class="col-md-3">


                       </div>

                  </div>


                  <div class="row">
                       <div class="col-md-3">
                         <div class="form-group">
                           <label > الولاية   </label>
                         <input type="text" name="wilaya" class="form-control" id="wilaya" value="{{ $user->wilaya}}">
                         </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                             <label > الدائرة   </label>
                           <input type="text" name="daira" class="form-control" id="daira" value="{{ $user->daira}}">
                           </div>

                       </div>
                       <div class="col-md-3">
                         <div class="form-group">
                           <label > البلدية  </label>
                          <input type="text" name="commune" class="form-control" id="" value="{{ $user->commune }}">
                         </div>

                       </div>

                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                       <label>   </label>
                     <input type="hidden" name="latitude" class="form-control" id="Longitude"  value="{{ $user->latitude }}" readonly>
                     </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                       <label >  </label>
                     <input type="hidden" name="longitude" class="form-control" id="Latitude"  value="{{ $user->longitude }}" readonly>
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


           {!! Form::close() !!}
  </div>
  </div>
</div>
<div class="row">
           <div class="col-xs-12">
             <div class="box">
               <div class="box-header">
                 <h3 class="box-title">  تغيير كلمة المرور الخاصة بالعضو   {{ $user->name }}  </h3>
               </div><!-- /.box-header -->
               <div class="box-body">


               {!! Form::open([ 'url' => 'users/changePassword' , 'method' => 'post']) !!}
                    <input type="hidden" value="{{ $user->id }}" name="user_id" >

                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-8 control-label">كلمة المرور</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" placeholder="كلمة المرور">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4 ">
                              <div class="form-group">
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-btn fa-user"></i>  تغيير كلمة المرور
                                </button>
                                 </div>
                                @if ($user->id != 1)
                                <div class="form-group">
                                <a href="{{ url('/users/' . $user->id . '/delete') }}" class="btn btn-danger btn-circle"> <i class="fa fa-trash-o"></i> حذف هذا العضو</a>
                                </div>
                                @endif
                             </div>
                            </div>
                        </div>


                 {!! Form::close() !!}



               </div>
           </div>
           </div>
           </div>
</div>
 @include('sweetalert::alert')
 <script>
 $(function() {
   // use below if you want to specify the path for leaflet's images
   //L.Icon.Default.imagePath = '@Url.Content("~/Content/img/leaflet")';

   var curLocation = [0, 0];
   // use below if you have a model
   // var curLocation = [@Model.Location.Latitude, @Model.Location.Longitude];

   if (curLocation[0] == 0 && curLocation[1] == 0) {
     curLocation = [ {{ $user->longitude }} , {{ $user->latitude }}]  ;
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
