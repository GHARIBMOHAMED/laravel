@extends('client.layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
 <!--============= Banner Section Starts Here =============-->
 <section class="banner-section-4 bg_img oh" data-background=" /images/banner/banner-bg-4.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10 col-lg-7 col-xl-8">
                <div class="banner-content cl-white">
                    <h5 class="cate">Enjoy Exclusive</h5>
                    <h1 class="title">Buy Your Car In Real Time <span class="d-xl-block">Bidding</span></h1>
                    <p class="mw-500">
                        Thousands of Vehicles for Sale Every Day, We havejust the right one for you.
                    </p>
                    <a href="/signup" class="custom-button yellow btn-large">Get Started</a>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="banner-thumb-4">
                    <a href="#0" class="bid-now"><i class="flaticon-auction"></i><span>Bid Now</span></a>
                    <img src=" /images/banner/banner-4.png" alt="banner">
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
<section class="how-section padding-top padding-bottom pos-rel">
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
    <div class="car-2 d-none d-lg-block"><img src=" /images/how/car2.png" alt="how"></div>
</section>
<!--============= How Section Starts Here =============-->



<!--============= Car Auction Section Starts Here
<section class="car-auction-section padding-bottom pos-rel oh">
    <div class="car-bg"><img src=" /images/auction/car/car-bg.png" alt="car"></div>
    <div class="container">
        <div class="section-header-3">
            <div class="left d-block">
                <h2 class="title mb-3">Featured Items</h2>
                <p>Start winning cars with comfort</p>
            </div>
            <a href="/productw" class="normal-button">View All</a>
        </div>
        <div class="row justify-content-center mb-30-none">



            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src=" /media/" alt="car"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#"></a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Estimated value</div>
                                    <div class="amount">$</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount"></div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter26"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
 Car Auction Section Ends Here =============-->


<!--============= Trending Section Starts Here =============-->
<section class="trending-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header-3">
            <div class="left d-block">
                <h2 class="title mb-3">Trending Items</h2>
                <p>Bid on 1,000’s of vehicles from more than 25 countries</p>
            </div>
            <a href="#0" class="normal-button">View All</a>
        </div>
        <div class="row justify-content-center mb-30-none">
            @if(count($cars) > 0)
            @foreach($cars as $car)

            <div class="col-md-6 col-lg-12"  id="component{{ $car->id }}">
                <div class="auction-item-6">
                    <div class="auction-inner">
                        <div class="auction-thumb">
                            <a href="{{ url('cardetail/'.$car->id) }}"><img src="/media/{{ $car->images[7] }}" alt="trending"></a>
                            <a href="#0"  class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <h5 class="title"><a href="{{ url('cardetail/'.$car->id) }}">{{ $car->year }} - {{ $car->model }}</a></h5>
                            <div class="item-information">
                                <ul>
                                    <li><span>Number</span>{{ $car->plate }}</li>
                                    <li><span>VIN</span>2G1WG5EK3B1312245</li>
                                    <li><span>Milage</span> ({{ $car->km }} km)</li>
                                    <li><span>Location</span>{{ $car->location }}</li>
                                </ul>
                                <ul>
                                    <li><span>Engine</span>{{ $car->fuleType }}</li>
                                    <li><span>Transmission</span>{{ $car->transmittion }}</li>
                                    <li><span>Body</span>{{ $car->vehicleType }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <div class="countdown">
                                <span> {{ $car->saleDate }}</span>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">${{ $car->price }}</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                Total Bids : <span class="total-bids"> Bids {{ $car->bids }}</span>
                            </div>
                            <a href="{{ url('bidin/'.$car->id .'/'.$car->price) }}" class="custom-button">Increace bid by 50$</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @endif
        </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
{{-- <script>
jQuery(document).ready(function() {
$("#target" ).on('click', '[data-record]', function() {
    var id =0;
    var id = this.dataset.record;
    $.ajax({
                        url: 'http://127.0.0.1:8000/bidin/1',//+id ,
                        method:'POST',
                        data: id,
                        contentType: 'application/json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function(response) {
                            if(response) {

                                //$('#deleteForm1').attr("action", '/newCar/'+response.id);

                            }
                        }
                        });
});
});

</script> --}}
@endsection
