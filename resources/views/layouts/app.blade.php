 @include('layouts.head')
 @yield('head')
 <!--begin::Content-->
   <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
<div class="subheader py-3 py-lg-8  subheader-transparent " id="kt_subheader">
<div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
<!--begin::Info-->
<div class="d-flex align-items-center flex-wrap mr-1">

<!--begin::Page Heading-->
<div class="d-flex align-items-baseline flex-wrap mr-5">
<!--begin::Page Title-->
<h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">

</h2>
<!--end::Page Title-->

</div>
<!--end::Page Heading-->
</div>
<!--end::Info-->

<!--begin::Toolbar-->

<!--end::Toolbar-->
</div>
</div>
<!--end::Subheader-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<script>
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
  </script>
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
<!--begin::Container-->
<div class=" container ">

@yield('main')


</div>
<!--end::Container-->
</div>
<!--end::Entry-->
@yield('add')
</div>

<!--end::Content-->


@include('layouts.footer')
@yield('footer')


