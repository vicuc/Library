<!DOCTYPE html>
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/login/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/login/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/login/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/login/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/login/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('public/login/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
	@yield('login_content')
<script src="{{asset('public/login/js/bootstrap.js')}}"></script>
<script src="{{asset('public/login/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/login/js/scripts.js')}}"></script>
<script src="{{asset('public/login/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/login/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('public/login/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('public/login/js/jquery.scrollTo.js')}}"></script>
</body>
</html>