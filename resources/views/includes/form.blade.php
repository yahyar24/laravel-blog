
   @extends('layouts.jsandcss')

   
    @include('admin.includes.errors')

<div class="mb-5">
              <h3 class="footer-heading mb-2">اشترك معنا </h3>
              <p>ضع البريد الالكتروني للاشتراك في الموقع.</p>

              <form action="{{route('email.store')}}" method="post">
              {{csrf_field()}}
                <div class="input-group mb-3">
                  <input name="email_sub" type="text" class="form-control border-secondary text-white bg-transparent" placeholder="ضع البريد الالكتروني" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="submit" id="button-addon2">ارسال</button>
                  </div>
                </div>
              </form>

            </div>


