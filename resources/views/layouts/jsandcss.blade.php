<link rel="stylesheet" href="{{asset('css/tostr.min.css')}}">
<script src="{{ asset('js/app.js') }}"></script>

    @yield('styles')

    <script src="{{asset('js/tostr.min.js')}}"></script>
 <script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")

        @endif

        @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")

     @endif
 </script>
@yield('scripts')
    