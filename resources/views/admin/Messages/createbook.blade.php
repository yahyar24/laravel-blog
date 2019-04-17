@extends('layouts.cssandjs')

@include('includes.header_book')

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
          <h4 class="">احجز الان : يرجى ادخال بياناتك </h4>
          @include('admin.includes.errors')


            

            <form action="{{route('messagebook.store')}}" method="post"  enctype="multipart/form-data">
            {{csrf_field()}}

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="last_name_book">الاسم الثاني</label>
                  <input name="last_name_book" type="text" id="fname" class="form-control" placeholder="اسمك الثاني">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="first_name_book">الاسم الاول</label>
                  <input name="first_name_book" type="text" id="lname" class="form-control" placeholder="اسمك الاول">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">تاريخ العودة</label> 
                  <input name="date_last" type="text" id="date" class="form-control datepicker px-2" placeholder="ادخل تاريخ عودتك`..">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date_last">تاريخ الذهاب</label> 
                  <input name="date" type="text" id="date" class="form-control datepicker px-2" placeholder="ادخل تاريخ ذهابك ..">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email_book">البريد الالكتروني</label> 
                  <input name="email_book" type="email" id="email" class="form-control" placeholder="ادخل بريدك الالكتروني.. ">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="Phone">رقم الهاتف</label> 
                  <input name="Phone" type="number" id="Phone" class="form-control" placeholder="ادخل رقم هاتفك.. ">
                </div>
              </div>
              <div class="col-md-6">
                  <label class="text-black" for="lname">ارفق جواز السفر </label>
                  <input width="30px;" name="featured" type="file" id="lname" class="form-control" placeholder="جواز السفر">
                </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label  class="text-black" >العدد</label> 
                  <input name="how_many" type="number" id="" class="form-control" placeholder="العدد ">

                  <!--select name="how_many"  id="treatment" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5+</option>
                  </select-->
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label  class="text-black" > ..اكتب اسم المطار ذهاب من </label> 
                  <input name="Destination" type="text" id="" class="form-control" placeholder="اسم المطار للذهاب   ">

                  <!--select  id="treatment" class="form-control" name="Destination" >
                    <option value="">اسطنبول</option>
                    <option value="">انطاليا</option>
                    <option value="">القاهرة</option>
                    <option value="">سوريا</option>
                    <option value="">ايران</option>
                  </select-->
                </div>
                <div class="col-md-12">
                  <label  class="text-black" > ..اكتب اسم المطار ذهاب الى</label> 
                  <input name="Destination_last" type="text" id="" class="form-control" placeholder=" اسم المطار للعودة  ">

                  <!--select  id="treatment" class="form-control" name="Destination" >
                    <option value="">اسطنبول</option>
                    <option value="">انطاليا</option>
                    <option value="">القاهرة</option>
                    <option value="">سوريا</option>
                    <option value="">ايران</option>
                  </select-->
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message_book">ملاحظات</label> 
                  <textarea name="message_book" id="note" cols="30" rows="5" class="form-control" placeholder="اكتب ملاحظاتك هنا..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                <button style="margin-left:300px;"  class="btn btn-info btn-lg" type="submit">ارسال طلب الحجز</button>
                </div>
              </div>

  
            </form>
          </div>