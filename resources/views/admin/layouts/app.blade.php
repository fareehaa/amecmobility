@include('admin.layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')
  
  <!-- Left side column. contains the logo and sidebar -->
 @include('admin.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @section('main-content')
   @show
  </div>
      <!-- /.box -->

  </div>
  <!-- /.content-wrapper -->


@include('admin.layouts.footer')
@include('admin.layouts.foot')
</body>
</html>