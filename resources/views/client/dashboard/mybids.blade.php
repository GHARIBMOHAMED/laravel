
@extends('client.layouts.app')

@section('content')





    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                @include('client.dashboard.sidebar')
                @yield('sidebar')
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">My Bids</h4>
                            <span class="notify"><i class="flaticon-alarm"></i> Manage Notifications</span>
                        </div>
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#upcoming" data-toggle="tab" class="custom-button active">Upcoming</a>
                            </li>
                            <li>
                                <a href="#past" data-toggle="tab" class="custom-button">Past</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upcoming">
                            <div class="row mb-30-none justify-content-center">
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="#0">2018 Hyundai Sonata</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
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
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/car/auction-2.jpg" alt="car"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="#0">2018 Nissan Versa, S</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter27"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/product/01.png" alt="product"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="#0">2019 Mercedes-Benz C, 300</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter1"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/product/02.png" alt="product"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="#0">2017 Harley-Davidson XG750,</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter2"></div>
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
                        <div class="tab-pane fade" id="past">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="product-details.html">Gold Ring With Clear Stones</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter23"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/jewelry/auction-2.jpg" alt="jewelry"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="product-details.html">Ring With Clear Stone Accents</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter24"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/jewelry/auction-3.jpg" alt="jewelry"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="product-details.html">Gold Ring With Clear Stones</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter25"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div>
                                            <div class="text-center">
                                                <a href="#0" class="custom-button">Submit a bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="assets/images/auction/product/04.png" alt="jewelry"></a>
                                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="product-details.html">Gold Ring With Clear Stones</a>
                                            </h6>
                                            <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter30"></div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->
@endsection
