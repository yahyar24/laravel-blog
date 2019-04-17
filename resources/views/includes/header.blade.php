
    <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">{{$settings->site_name}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav   id="nav-menu-container">
        <ul  class="nav-menu">

        @foreach($categories as $category)
          <li><a style="font-size:18px;" href="{{route('category.single', ['id' => $category->id])}}">{{$category->name}}</a></li>
          @endforeach
          <!--li><a style="font-size:18px;" href="#contact">الاتصال بنا</a></li-->

          <!--li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            
            </ul>
          </li-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #heade -->
    
    
    <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('img/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>الموقع الاحترافي للتقنية</h2>
                <p>تجدون كل ما هو جديد .</p>
                <!--a href="#featured-services" class="btn-get-started scrollto"-->Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/2.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>طور عالمك</h2>
                <p>تعرفوا معنا على اخر الاخبار التقنية عالم لا مثيل له.</p>
                <!--a href="#featured-services" class="btn-get-started scrollto"-->Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/3.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>عالمكم المفضل</h2>
                <p>اخر  اخبار التقنية.</p>
                <!--a href="#featured-services" class="btn-get-started scrollto"-->Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ريبوتات</h2>
                <p>.</p>
                <!--a href="#featured-services" class="btn-get-started scrollto"-->البداي</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/2.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>عالم التقنية </h2>
                <p>زورو موقعنا للاطلاع على كل ماهو جديد </p>
                <!--a href="#featured-services" class="btn-get-started scrollto"-->Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
