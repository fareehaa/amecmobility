@include('user.layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('user.layouts.header')
  
  <!-- Left side column. contains the logo and sidebar -->
 @include('user.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @section('main-content')
   @show
  </div>
      <!-- /.box -->

  </div>
  <!-- /.content-wrapper -->


@include('user.layouts.footer')
@include('user.layouts.foot')
</body>
</html>