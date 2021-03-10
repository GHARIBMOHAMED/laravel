<script src=" {{ asset('backend/js/lib/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" media="all" href="{{ asset('backend/css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />

@include('backend.layouts.head')



@yield('head')
<div class="page__container ">
     @yield('page')

</div>

</div>

@include('backend.layouts.footer')



@yield('footer')
</div>
<script src=" {{ asset('backend/js/lib/svg4everybody.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/jquery.nice-select.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/apexcharts.min.js') }}"></script>
<script src=" {{ asset('backend/js/lib/jquery.magnific-popup.min.js') }}"></script>
<script src=" {{ asset('backend/js/charts.js') }}"></script>
<script src=" {{ asset('backend/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://kit.fontawesome.com/4238661f77.js" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function($){
     @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
});
</script>


