<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unionagency.one/exzo/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 07:00:51 GMT -->
@include('layouts.head')
<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">
        <!-- HEADER -->
        @include('layouts.header')

        <div class="header-empty-space"></div>
           

        <div class="grey-background">
            <div class="empty-space col-xs-b40 col-sm-b80"></div>
            <div class="container">
                <div class="row">
                  @section('content')
                  @show
                 <div class="empty-space col-xs-b30"></div>
                </div>{{-- row --}}
            </div>{{-- container --}}

         </div>{{-- grey-background --}}
    @include('layouts.foot')
    @include('layouts.footer')

</body>

<!-- Mirrored from unionagency.one/exzo/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 07:01:07 GMT -->
</html>
