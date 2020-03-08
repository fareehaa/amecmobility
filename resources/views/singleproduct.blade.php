@extends('blueprint')
@section('content')
<div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
        <a href="#">home</a>
        <a href="#">accessories</a>
        <a href="#">gadgets</a>
        <a href="#">sport gadgets</a>
    </div>
    <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <div class="row">
                <div class="col-sm-6 col-xs-b30 col-sm-b0">
                    
                    <div class="main-product-slider-wrapper swipers-couple-wrapper">
                        <div class="swiper-container swiper-control-top">
                           <div class="swiper-button-prev hidden"></div>
                           <div class="swiper-button-next hidden"></div>
                           <div class="swiper-wrapper">
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-4.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-5.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-6.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-7.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-8.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-9.jpg')}}"></div>
                               </div>
                               <div class="swiper-slide">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="product-big-preview-entry swiper-lazy" data-background="{{asset('front/img/product-preview-10.jpg')}}"></div>
                               </div>
                           </div>
                        </div>

                        <div class="empty-space col-xs-b30 col-sm-b60"></div>

                        <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5" data-center="1" data-click="1">
                           <div class="swiper-button-prev hidden"></div>
                           <div class="swiper-button-next hidden"></div>
                           <div class="swiper-wrapper">
                               <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-4_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-5_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-6_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-7_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-8_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-9_.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-small-preview-entry">
                                        <img src="{{asset('front/img/product-preview-10_.jpg')}}" alt="" />
                                    </div>
                               </div>

                           </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                    <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                    <div class="row col-xs-b25">
                        <div class="col-sm-6">
                            <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                        </div>
                        <div class="col-sm-6 col-sm-text-right">
                            <div class="rate-wrapper align-inline">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="simple-article size-2 align-inline">128 Reviews</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                        </div>
                        <div class="col-sm-6 col-sm-text-right">
                            <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                        </div>
                    </div>
                    <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                    <div class="row col-xs-b40">
                        <div class="col-sm-3">
                            <div class="h6 detail-data-title size-1">size:</div>
                        </div>
                        <div class="col-sm-9">
                            <select class="SlectBox">
                                <option disabled="disabled" selected="selected">Choose size</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-xs-b40">
                        <div class="col-sm-3">
                            <div class="h6 detail-data-title">color:</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="color-selection size-1">
                                <div class="entry active" style="color: #a7f050;"></div>
                                <div class="entry" style="color: #50e3f0;"></div>
                                <div class="entry" style="color: #eee;"></div>
                                <div class="entry" style="color: #4d900c;"></div>
                                <div class="entry" style="color: #edb82c;"></div>
                                <div class="entry" style="color: #7d3f99;"></div>
                                <div class="entry" style="color: #3481c7;"></div>
                                <div class="entry" style="color: #bf584b;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-xs-b40">
                        <div class="col-sm-3">
                            <div class="h6 detail-data-title size-1">quantity:</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="quantity-select">
                                <span class="minus"></span>
                                <span class="number">1</span>
                                <span class="plus"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row m5 col-xs-b40">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <a class="button size-2 style-2 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('front/img/icon-2.png')}}" alt=""></span>
                                    <span class="text">add to cart</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="button size-2 style-1 block noshadow" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                <span class="text">add to favourites</span>
                            </span>
                        </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="h6 detail-data-title size-2">share:</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="follow light">
                                <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
        @include('layouts.categories')
    </div>

   

  

    

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-md-b70"></div>

    <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Hot Sale</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-28.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-29.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-30.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$32.00</span></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Top Rated</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-31.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-32.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-33.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Popular</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-34.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-35.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-36.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Best Choice</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-37.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-38.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="{{asset('front/img/product-39.jpg')}}" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5">CASES</div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection