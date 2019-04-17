<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{$settings->site_name}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{asset('skins/default.css')}}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!--start 2 blog -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--end  2 --> 

  <!--start blog css-->


  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/imagehover.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


  <!--end blog-->

  <!--start blog2 css -->
  

  <!-- Google Fonts -->

  <!-- Bootstrap CSS File -->

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib2/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('lib2/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('lib2/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('lib2/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib2/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib2/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('css2/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css2/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('css2/responsive.css')}}" rel="stylesheet">

  <!--end blog2 css-->

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

@include('includes.header')

    <!-- end header -->
    

     <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>معلومات عنا</h3>
          <p>شركة عالمية لتقديم المعرفة التقنية.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/train-1728537_1920.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">رسالتنا</a></h2>
              <p>
             مهتمنا تمكين الافراد من الحصول على معرفة بمجال التقنيات  

              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-bg.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#"> تخطيط</a></h2>
              <p>
              نطمح لاكتساب ثقة الناس والمحافظة على التقدم في مجالنا
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/facts-bg.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">رؤويتنا</a></h2>
              <p>
              إتاحة الفرصة أمام جميع الناس للاستفادة من المعلومات التقنية  
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


        <!--start blog -->
        <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div  style="margin-left:250px;">
          <h2 class="test">{{$career->name}}</h2>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      @foreach($career->posts()->orderBy('created_at','desc')->take(3)->get() as $post)

        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{$post->featured}}" class="img-responsive">
            <figcaption>
              <p style="color:#fff;" class="text-center">للتفاصيل اكثر انقر هنا لرؤية المزيد.</p>
            </figcaption>
            <a style="font-size:16px;color:#fff;" class="text-center" href="{{route('post.single', ['slug' => $post->slug  ])}}">{{$post->title}}</a>
          </figure>
        </div>
        @endforeach
        
        
         
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
<!--new blog-->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>احدث الاخبار</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="{{$first_post->featured}}">
										<img src="{{$first_post->featured}}" alt="{{$first_post->title}}">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<!--a href="#">13 comments</a-->
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i> {{$first_post->created_at->diffForHumans()}}

									</span>
              </div>
              <div class="blog-text">
                <h4>
                      <a href="{{route('post.single', ['slug' => $first_post->slug  ])}}">{{$first_post->title}}</a>
									</h4>
                
              </div>
              <span>
									<a href="{{route('post.single', ['slug' => $first_post->slug  ])}}" class="ready-btn">قراءة المزيد </a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="{{$second_post->featured}}">
										<img src="{{$second_post->featured}}" alt="{{$second_post->title}}">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<!--a href="#">130 comments</a-->
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>       {{$second_post->created_at->toFormattedDateString()}}

									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="{{route('post.single', ['slug' => $second_post->slug  ])}}">{{$second_post->title}}.</a>
									</h4>
              
              </div>
              <span>
									<a href="{{route('post.single', ['slug' => $second_post->slug  ])}}" class="ready-btn"> قراءة المزيد</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="{{$third_post->featured}}" alt="{{$third_post->title}}">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<!--a href="#">10 comments</a-->
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>  {{$third_post->created_at->toFormattedDateString()}}

									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="{{route('post.single', ['slug' => $third_post->slug  ])}}">{{$third_post->title}}</a>
									</h4>
                <!--p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p-->
              </div>
              <span>
									<a href="{{route('post.single', ['slug' => $third_post->slug  ])}}" class="ready-btn">قراءة المزيد </a>
								</span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
        <!--end blog-->
        <!-- end divider -->
        <!-- Portfolio Projects -->
   
    </section>
    @include('includes.footer')
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/jcarousel/jquery.jcarousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
  <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('js/portfolio/setting.js')}}"></script>
  <script src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('js/modernizr.custom.js')}}"></script>
  <script src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
  <script src="{{asset('js/jquery.slitslider.js')}}"></script>
  <script src="{{asset('js/animate.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('js/custom.js')}}"></script>

  <!--start js blog -->

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('contactform/contactform.js')}}"></script>
  <!--end blog js-->

  <!--start 2 blog-->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

  <!--end 2 blog-->

</body>
</html>
