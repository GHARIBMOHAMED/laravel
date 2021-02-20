<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/sbidu/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 18:42:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bid Maroc</title>

    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/owl.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/main.css') }}">

    <link rel="shortcut icon" href=" images/favicon.ico" type="image/x-icon">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('client.layouts.head')
@yield('head')

@yield('content')

@include('client.layouts.footer')
@yield('footer')
</body>


<!-- Mirrored from pixner.net/sbidu/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 18:44:32 GMT -->
</html>
