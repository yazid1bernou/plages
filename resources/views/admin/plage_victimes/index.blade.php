@extends('admin.layouts.layout')



@section('header')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

@endsection

@section('content')
<div class="container"> 

	<h1 class="text-5xl font-bold"> Plages  victimes </h1>
<div class="flex">
   <div class="w-1/2">
   	{!! $chart->container() !!}
   </div>

</div>

</div>


{!! $chart->script() !!}



@endsection 