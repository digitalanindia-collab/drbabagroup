<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <title>Dr. Baba Network Marketing Private Limited</title>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- Stylesheets -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">

</head>
@include('frontend/layout/header')
@include('frontend/layout/banner')


@yield('content')
@include('frontend/layout/footer')
    <script src="{{ asset('frontend/js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('frontend/js/appear.js')}}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{ asset('frontend/js/tilt.jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.paroller.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.js')}}"></script>
    <script src="{{ asset('frontend/js/nav-tool.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('frontend/js/script.js')}}"></script>
    <script src="{{ asset('frontend/js/validate.js')}}"></script>


</body></html>
