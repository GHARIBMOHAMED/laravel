@extends('client.layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

 <!--============= Banner Section Starts Here =============-->
 <section class="banner-section-4 bg_img oh" data-background=" /images/banner/banner-bg-4.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10 col-lg-7 col-xl-8">
                <div class="banner-content cl-white">
                    <h1 class="title">Buy Your Car In Real Time <span class="d-xl-block">Bidding</span></h1>
                    <p class="mw-500">
                        Thousands of Vehicles for Sale Every Day, We havejust the right one for you.
                    </p>
                    @if(auth()->user())
                         <a href="/product" class="custom-button yellow btn-large">Explore</a>
                        @else
                         <a href="/signup" class="custom-button yellow btn-large">Get Started</a>
                    @endif

                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="banner-thumb-4">

                    <img src=" /images/banner/banner-1.png" alt="banner">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape d-none d-lg-block bot-0">
        <img src=" /css/img/banner-shape-4.png" alt="css">
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<!--============= How Section Starts Here =============-->
<section class="how-section padding-bottom pos-rel" style="padding-top: 5%">

    <div class="container">
        <div class="section-header text-lg-left">
            <h2 class="title">How it works</h2>
            <p>Easy 3 steps to win</p>
        </div>
        <div class="row justify-content-center mb--40">
            <div class="col-md-6 col-lg-4">
                <div class="how-item">
                    <div class="how-thumb">
                        <img src=" /images/how/how1.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Sign Up</h4>
                        <p>No Credit Card Required</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="how-item">
                    <div class="how-thumb">
                        <img src=" /images/how/how2.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Bid</h4>
                        <p>Bidding is free Only pay if you win</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="how-item">
                    <div class="how-thumb">
                        <img src=" /images/how/how3.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Win</h4>
                        <p>Fun - Excitement - Great deals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--============= How Section Starts Here =============-->



<!--============= Trending Section Starts Here =============-->
<section class="car-auction-section padding-bottom pos-rel oh">
    <div class="car-bg"><img src=" /images/auction/car/car-bg.png" alt="car"></div>
    <div class="container">
        <div class="section-header-3">
            <div class="left d-block">
                <h3>The Best </h3>
            </div>
            <a href="{{ url('product') }}" class="custom-button yellow btn-large">View All</a>
        </div>

        <div id="carsdetail"></div>

    </div>
</section>
<!--============= Trending Section Ends Here =============-->


<!--============= Call In Section Starts Here =============-->
<section class="call-in-section padding-top">
    <div class="container">
        <div class="call-wrapper cl-white bg_img" data-background=" /images/call-in/call-bg.png">
            <div class="section-header">
                <h3 class="title">Register for Free & Start Bidding Now!</h3>
                <p>From cars to diamonds to iPhones, we have it all.</p>
            </div>
            <a href="/signup" class="custom-button white">Register</a>
        </div>
    </div>
</section>
<!--============= Call In Section Ends Here =============-->


<!--============= Client Section Starts Here =============-->
<section class="client-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Don’t just take our word for it!</h2>
            <p>Our hard work is paying off. Great reviews from amazing customers.</p>
        </div>
        <div class="m--15">
            <div class="client-slider owl-theme owl-carousel">
                <div class="client-item">
                    <div class="client-content">
                        <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src=" /images/client/client01.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src=" /images/client/client02.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src=" /images/client/client03.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Tom Powell</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#carsdetail').load("{{ url('/carsdetail') }}").fadeIn()

</script>

@endsection
