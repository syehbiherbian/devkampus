<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dev Kampus - Dashboard</title>

<link href="{{asset('template/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('template/admin/assets/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('template/admin/assets/css/styles.css')}}" rel="stylesheet">
<script src="{{asset('template/admin/assets/js/jquery-1.11.1.min.js')}}"></script>

<!--Icons-->
<script src="{{asset('template/admin/assets/js/lumino.glyphs.js')}}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
@yield('content')

    
    <script src="{{asset('template/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/chart.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/chart-data.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/easypiechart.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/easypiechart-data.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/bootstrap-datepicker.js')}}"></script>
  
</body>

</html>
