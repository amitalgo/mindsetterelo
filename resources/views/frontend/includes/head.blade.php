<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->

<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />


<link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{asset('js/modernizr.min.js')}}"></script>



