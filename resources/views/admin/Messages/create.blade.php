


@extends('layouts.cssandjs')
@include('includes.header_book')



<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
          @include('admin.includes.errors')
<div style="font-size:20px;margin-left:100px;" class="text-center">
          <h2>الاتصال بنا </h2>

</div>
         
            <form style="margin-left:200px;" action="{{route('message.store')}}"  method="post">
            {{csrf_field()}}
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="last_name">الاسم الثاني</label>
                  <input name="last_name" type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="first_name">الاسم الاول</label>
                  <input name="first_name" type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">البريد الالكتروني</label> 
                  <input name="email" type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">الموضوع</label> 
                  <input name="subject" type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">الرسالة</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="اكتب رسالتك هنا ..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button style="margin-left:300px;" class="btn btn-danger btn-lg" type="submit">ارسال الرسالة</button>
                </div>
              </div>

  
            </form>
          </div>
          

          </div>
        </div>
      </div>
    </div>
