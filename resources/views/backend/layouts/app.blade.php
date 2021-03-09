<script src=" {{ asset('backend/js/lib/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" media="all" href="{{ asset('backend/css/app.css') }}">
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


