<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>{{$settings->site_name}}</h3>
            <p>شركة الاجيال هي شركة تقدم كل ما هو جديد في عالم التقنية .</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>القائمة الرئيسية</h4>
            <ul>
            @foreach($categories as $category)
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('category.single', ['id' => $category->id])}}">{{$category->name}}</a></li>
              @endforeach
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4> للتواصل معنا</h4>
            <p>
            {{$settings->address}} <br>
              <br>
               <br>
              <strong>الهاتف:</strong> {{$settings->contact_number}}<br>
              <strong>البريد الالكتروني:</strong> {{$settings->contact_email}}<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>الاشتراك</h4>
            <p>.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> </strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://yahya-developer.000webhostapp.com">yahya</a>
      </div>
    </div>
  </footer><!-- #footer -->
