<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dr. Baba Network Marketing Private Limited</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('user.layouts.header')
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
 @include('user.layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

         @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      @include('admin.layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backend/assets/vendors/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery.cookie.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/assets/js/template.js')}}"></script>
  <script src="{{asset('backend/assets/js/settings.js')}}"></script>
  <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>


