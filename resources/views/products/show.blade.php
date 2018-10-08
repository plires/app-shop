@extends('user.layout.app')

<!-- Header User -->
@section('header')
  @include('user.header.header')
@endsection
<!-- Header User end -->

<!-- Extra Plugins -->
@section('extra_css')
  <!-- Plugins -->
  <link href="{{ asset('assets/plugins/magnific-popup/magnific-popup.css') }}"  rel="stylesheet">
  <link href="{{ asset('assets/css/animations.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet">

  <!-- The Project's core CSS file -->
  <!-- Use css/rtl_style.css for RTL version -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" >
  <!-- The Project's Typography CSS file, includes used fonts -->
  <!-- Used font for body: Roboto -->
  <!-- Used font for headings: Raleway -->
  <!-- Use css/rtl_typography-default.css for RTL version -->
  <link href="{{ asset('assets/css/typography-default.css') }}" rel="stylesheet" >
  <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
  <link href="{{ asset('assets/css/skins/light_blue.css') }}" rel="stylesheet">
@endsection
<!-- xtra Plugins end -->

<!-- Content User -->
@section('content')

  <div class="page-wrapper">


    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

      <div class="container">
        <div class="row">

          <!-- main start -->
          <!-- ================ -->
          <div class="main col-12">

            <!-- page-title start -->
            <!-- ================ -->
            <h1 class="page-title">Shop Product</h1>
            <div class="separator-2"></div>
            <!-- page-title end -->

            <div class="row">
              <div class="col-lg-4">
                <!-- pills start -->
                <!-- ================ -->
                <!-- Nav tabs -->
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#pill-1" data-toggle="tab" title="images"><i class="fa fa-camera pr-1"></i> Photo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#pill-2" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-1"></i> Video</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content clear-style">
                  <div class="tab-pane active" id="pill-1">
                    <div class="slick-carousel content-slider-with-large-controls">
                      <div class="overlay-container overlay-visible">
                        <img src="{{ asset('assets/images/product-1.jpg') }}" alt="">
                        <a href="images/product-1.jpg" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
                      </div>
                      <div class="overlay-container overlay-visible">
                        <img src="{{ asset('assets/images/product-1-2.jpg') }}" alt="">
                        <a href="images/product-1-2.jpg" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="pill-2">
                    <div class="overlay-container">
                      <img src="{{ asset('assets/images/page-about-2.jpg') }}" alt="">
                      <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <!-- pills end -->
              </div>
              <div class="col-lg-8 pv-30">
                <h2 class="mt-4">Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem debitis enim facilis porro quia in voluptates praesentium, cupiditate, dolorum. Facilis minus, quidem! Id perspiciatis labore praesentium voluptatibus assumenda odio, magni.</p>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sint beatae delectus obcaecati eveniet nulla voluptate odio est laborum veniam? Natus nemo provident, voluptate molestias sint, nam dolor blanditiis minus!</p>
                <hr class="mb-10">
                <div class="clearfix mb-20">
                  <span>
                    <i class="fa fa-star text-default"></i>
                    <i class="fa fa-star text-default"></i>
                    <i class="fa fa-star text-default"></i>
                    <i class="fa fa-star text-default"></i>
                    <i class="fa fa-star"></i>
                  </span>
                  <a href="#" class="wishlist"><i class="fa fa-heart-o pl-10 pr-1"></i>Wishlist</a>
                  <ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  </ul>
                </div>
                  <form class="clearfix row grid-space-10">
                      <div class="form-group col-lg-4">
                        <label>Quantity</label>
                        <input type="text" class="form-control" value="1">
                      </div>
                      <div class="form-group col-lg-4">
                        <label>Color</label>
                        <select class="form-control">
                          <option>Red</option>
                          <option>White</option>
                          <option>Black</option>
                          <option>Blue</option>
                          <option>Orange</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-4">
                        <label>Size</label>
                        <select class="form-control">
                          <option>5.3"</option>
                          <option>5.7"</option>
                        </select>
                      </div>
                  </form>
                <div class="light-gray-bg p-20 bordered clearfix">
                  <span class="product price"><i class="fa fa-tag pr-10"></i>$99.00</span>
                  <div class="product elements-list pull-right clearfix">
                    <input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- main end -->

        </div>
      </div>
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="pv-30 light-gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs style-4" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-1"></i>Specifications</a></li>
              <li class="nav-item"><a class="nav-link" href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-1"></i>(3) Reviews</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding-top-clear padding-bottom-clear">
              <div class="tab-pane active" id="h2tab2">
                <h4 class="space-top">Specifications</h4>
                <hr>
                <dl class="row">
                  <dt class="col-sm-3 text-sm-right">Consectetur</dt>
                  <dd class="col-sm-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
                  <dt class="col-sm-3 text-sm-right">Culla</dt>
                  <dd class="col-sm-9">Adipisci autem illo hic itaque nulla velit quod laboriosam ipsum in illum!</dd>
                  <dt class="col-sm-3 text-sm-right">Quas</dt>
                  <dd class="col-sm-9">Velit mollitia vel nemo, repudiandae quas nisi consectetur maiores beatae.</dd>
                  <dt class="col-sm-3 text-sm-right">Sapiente</dt>
                  <dd class="col-sm-9">Dolor, architecto, accusamus. Explicabo, culpa hic sapiente amet libero, recusandae laudantium consequatur velit possimus ratione quo. Ipsum maxime officia quasi quos magni!</dd>
                  <dt class="col-sm-3 text-sm-right">Dignissimos</dt>
                  <dd class="col-sm-9">Odio cum deleniti mollitia, quisquam dignissimos voluptatem, unde rem alias.</dd>
                  <dt class="col-sm-3 text-sm-right">Adipisicing</dt>
                  <dd class="col-sm-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora rerum veritatis nam blanditiis.</dd>
                  <dt class="col-sm-3 text-sm-right">Werspiciatis</dt>
                  <dd class="col-sm-9">Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
                </dl>
                <hr>
              </div>
              <div class="tab-pane" id="h2tab3">
                <!-- comments start -->
                <div class="comments margin-clear space-top">
                  <!-- comment start -->
                  <div class="comment clearfix">
                    <div class="comment-avatar">
                      <img class="rounded-circle" src="{{ asset('assets/images/avatar.jpg') }}" alt="avatar">
                    </div>
                    <header>
                      <h3>Amazing!</h3>
                      <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
                    </header>
                    <div class="comment-content">
                      <div class="comment-body clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                    </div>
                  </div>
                  <!-- comment end -->

                  <!-- comment start -->
                  <div class="comment clearfix">
                    <div class="comment-avatar">
                      <img class="rounded-circle" src="{{ asset('assets/images/avatar.jpg') }}" alt="avatar">
                    </div>
                    <header>
                      <h3>Really Nice!</h3>
                      <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
                    </header>
                    <div class="comment-content">
                      <div class="comment-body clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                    </div>
                  </div>
                  <!-- comment end -->

                  <!-- comment start -->
                  <div class="comment clearfix">
                    <div class="comment-avatar">
                      <img class="rounded-circle" src="{{ asset('assets/images/avatar.jpg') }}" alt="avatar">
                    </div>
                    <header>
                      <h3>Worth to Buy!</h3>
                      <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
                    </header>
                    <div class="comment-content">
                      <div class="comment-body clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                    </div>
                  </div>
                  <!-- comment end -->
                </div>
                <!-- comments end -->

                <!-- comments form start -->
                <div class="comments-form">
                  <h2 class="title">Add your Review</h2>
                  <form>
                    <div class="form-group has-feedback">
                      <label for="name4">Name</label>
                      <input type="text" class="form-control" id="name4" placeholder="" required>
                      <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="subject4">Subject</label>
                      <input type="text" class="form-control" id="subject4" placeholder="" required>
                      <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <div class="form-group">
                      <label>Rating</label>
                      <select class="form-control" id="review">
                        <option value="five">5</option>
                        <option value="four">4</option>
                        <option value="three">3</option>
                        <option value="two">2</option>
                        <option value="one">1</option>
                      </select>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="message4">Message</label>
                      <textarea class="form-control" rows="8" id="message4" placeholder="" required></textarea>
                      <i class="fa fa-envelope-o form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-default">
                  </form>
                </div>
                <!-- comments form end -->
              </div>
            </div>
          </div>

          <!-- sidebar start -->
          <!-- ================ -->
          <aside class="col-lg-4 col-xl-3 ml-xl-auto">
            <div class="sidebar">
              <div class="block clearfix">
                <h3 class="title">Related Products</h3>
                <div class="separator-2"></div>
                <div class="media margin-clear">
                  <div class="d-flex pr-2">
                    <div class="overlay-container">
                      <img class="media-object" src="{{ asset('assets/images/product-5.jpg') }}" alt="blog-thumb">
                      <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h6>
                    <p class="margin-clear">
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                    </p>
                    <p class="price">$99.00</p>
                  </div>
                </div>
                <hr>
                <div class="media margin-clear">
                  <div class="d-flex pr-2">
                    <div class="overlay-container">
                      <img class="media-object" src="{{ asset('assets/images/product-6.jpg') }}" alt="blog-thumb">
                      <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="shop-product.html">Eum repudiandae ipsam</a></h6>
                    <p class="margin-clear">
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star"></i>
                    </p>
                    <p class="price">$299.00</p>
                  </div>
                </div>
                <hr>
                <div class="media margin-clear">
                  <div class="d-flex pr-2">
                    <div class="overlay-container">
                      <img class="media-object" src="{{ asset('assets/images/product-7.jpg') }}" alt="blog-thumb">
                      <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="shop-product.html">Quia aperiam velit fuga</a></h6>
                    <p class="margin-clear">
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star"></i>
                    </p>
                    <p class="price">$9.99</p>
                  </div>
                </div>
                <hr>
                <div class="media margin-clear">
                  <div class="d-flex pr-2">
                    <div class="overlay-container">
                      <img class="media-object" src="{{ asset('assets/images/product-8.jpg') }}" alt="blog-thumb">
                      <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="shop-product.html">Fugit non natus officiis</a></h6>
                    <p class="margin-clear">
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                    <p class="price">$399.00</p>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <!-- sidebar end -->

        </div>
      </div>
    </section>
    <!-- section end -->
  </div>


  {{-- <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center mt-5">
        <h1>Producto {{ $product->name }}</h1>
        <p>Descripcion {{ $product->long_description }} </p>
      </div>
    </div>
  </div>   --}}


@endsection
<!-- Content User end -->

<!-- Footer User -->
@section('footer')
  @include('user.footer.footer')
@endsection
<!-- Footer User end -->

<!-- Extra JS & PlugIng -->
  @section('scripts')
  <!-- JavaScript files placed at the end of the document so the pages load faster -->
  <!-- ================================================== -->

  <!-- Isotope javascript -->
  <script src="{{ asset('assets/plugins/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/isotope/isotope.pkgd.min.js') }}"></script>

  <!-- Magnific Popup javascript -->
  <script src="{{ asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }} "></script>

  <!-- Appear javascript -->
  <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }} "></script>
  <script src="{{ asset('assets/plugins/waypoints/sticky.min.js') }}"></script>
  <!-- Count To javascript -->
  <script src="{{ asset('assets/plugins/countTo/jquery.countTo.js') }}"></script>
  <!-- Slick carousel javascript -->
  <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
  <!-- Initialization of Plugins -->
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <!-- Custom Scripts -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
<!-- Extra JS & PlugIng end -->
