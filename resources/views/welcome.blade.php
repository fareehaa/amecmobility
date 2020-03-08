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
 @include('layouts.slider')

        <div class="grey-background">
            <div class="empty-space col-xs-b40 col-sm-b80"></div>
            <div class="container">
                <div class="row">
                    
                    @include('layouts.products-cat')
                    
                  </div>   
                  <div class="text-center">
                    <a class="button size-2 style-3" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                            <span class="text">view all accessories</span>
                        </span>
                    </a>
                </div>   
                 <div class="empty-space col-xs-b30"></div>
                
            </div>
        </div>

    </div>
    @include('layouts.foot')
    @include('layouts.footer')

</body>

<!-- Mirrored from unionagency.one/exzo/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2019 07:01:07 GMT -->
</html>
