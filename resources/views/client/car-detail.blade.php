@extends('client.layouts.app')
@section('content')





    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">


                    @for($i = 0; $i < 10; $i++)

                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="/media/{{ $cars->images[$i] }}" alt="product" style="max-height: 100%;">
                        </div>
                    </div>

                    @endfor


                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">


                    @for($i = 0; $i < 10; $i++)

                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="/media/{{ $cars->images[$i] }}" alt="product">
                        </div>
                    </div>

                    @endfor


                </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{ $cars->year }} - {{ $cars->model }} ({{ $cars->location }})</h2>
                            <ul>
                                <li>Listing ID: {{ $cars->id }}</li>
                                <li>Item #: {{ $cars->plate }}</li>
                            </ul>
                        </div>
                        <ul class="price-table mb-30">
                            <li class="header">
                                <h5 class="current">Current Price</h5>
                                <h3 class="price">DH {{ $cars->price }}</h3>
                            </li>
                            <li>
                                <span class="details">Buyer's Premium</span>
                                <h5 class="info">10.00%</h5>
                            </li>
                            <li>
                                <span class="details">Bid Increment (MAD)</span>
                                <h5 class="info">DH 500.00</h5>
                            </li>
                        </ul>
                        <div class="product-bid-area">
                            <form class="product-bid-form" method="GET" action="/bidindetail">
                                <div class="search-icon">
                                    <img src="{{ asset('images/product/search-icon.png') }}" alt="product">
                                </div>
                                <input type="text" name="prices" placeholder="Enter you bid amount">
                                <input type="text" name="id" hidden value="{{ $cars->id }}">
                                <button type="submit" class="custom-button">Submit a bid</button>
                            </form>
                        </div>
                        <div class="buy-now-area">
                            <a href="#0" class="custom-button">Buy Now: DH {{ $cars->estValue }}</a>
                            <a href="{{ url('favorite/'.$cars->id) }}" class="rating custom-button active border"><i class="flaticon-star"></i> Add to Favorite</a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-3">
                            <h6 class="title">This Auction Ends in:</h6>
                            <div class="countdown">
                                <div data-countdown="{{ $cars->saleDate  }}"></div>
                            </div>
                            <div class="side-counter-area">
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('images/product/icon1.png') }}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">{{ $cars->uninque }}</span></h3>
                                        <p>Active Bidders</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('images/product/icon2.png') }}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">0</span></h3>
                                        <p>Watching</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('images/product/icon3.png') }}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">{{ $cars->bids }}</span></h3>
                                        <p>Total Bids</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
                <ul class="product-tab-menu nav nav-tabs">
                    <li>
                        <a href="#details" class="active" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('images/product/tab1.png') }}" alt="product">
                            </div>
                            <div class="content">Description</div>
                        </a>
                    </li>
                    <li>
                        <a href="#delevery" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('images/product/tab2.png') }}" alt="product">
                            </div>
                            <div class="content">Delivery Options</div>
                        </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('images/product/tab3.png') }}" alt="product">
                            </div>
                            <div class="content">Bid History ({{ count($bidders) }})</div>
                        </a>
                    </li>
                    <li>
                        <a href="#questions" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('images/product/tab4.png') }}" alt="product">
                            </div>
                            <div class="content">Questions </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">{{ $cars->year }} - {{ $cars->model }} ({{ $cars->location }})</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Condition</th>
                                            <td>{{ $cars->damage }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mileage</th>
                                            <td>{{ $cars->km }} KM</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>{{ $cars->year }}</td>
                                        </tr>
                                        <tr>
                                            <th>Engine</th>
                                            <td>{{ $cars->engineType }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel</th>
                                            <td>{{ $cars->fuleType }}</td>
                                        </tr>
                                        <tr>
                                            <th>Transmission</th>
                                            <td>{{ $cars->transmittion }}</td>
                                        </tr>
                                        <tr>
                                            <th>Seller</th>
                                            <td>{{ $cars->saleName }}</td>
                                        </tr>
                                        <tr>
                                            <th>featured</th>
                                            <td>{{ $cars->featured }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">NYC Fleet / DCAS units may be located at either of two locations:</h5>
                                <ul>
                                    <li>{{ $cars->location }}</li>
                                    <li>{{ auth()->user()->getAttribute('add-1') }}</li>

                                </ul>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">This unit is located at:</h5>
                                <ul>
                                    <li>{{ auth()->user()->getAttribute('country') }} , {{ auth()->user()->state }}</li>
                                    <li>{{ auth()->user()->getAttribute('add-1') }}</li>
                                    <li>{{ auth()->user()->getAttribute('add-2') }}</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="delevery">
                    <div class="shipping-wrapper">
                        <div class="item">
                            <h5 class="title">shipping</h5>
                            <div class="table-wrapper">
                                <table class="shipping-table">
                                    <thead>
                                        <tr>
                                            <th>Available delivery methods </th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Customer Pick-up (within 10 days)</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Standard Shipping (5-7 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                        <tr>
                                            <td>Expedited Shipping (2-4 business days)</td>
                                            <td>Not Applicable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="title">Notes</h5>
                            <p>Please carefully review our shipping and returns policy before committing to a bid.
                            From time to time, and at its sole discretion, Bid Maroc may change the prevailing fee structure for shipping and handling.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Bid History</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Bidder</th>
                                            <th>date</th>
                                            <th>Bid value</th>
                                            <th>location</th>
                                            <th>country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bidders as $bid)
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ $bid->avatar }}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        {{ $bid->name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">{{ $bid->saleDate }}</td>
                                            <td data-history="value">{{ $bid->bidValue }}</td>
                                            <td data-history="location">{{ $bid->location }}</td>
                                            <td data-history="country">
                                                @if (empty($bid->country))
                                                Unknown
                                                @else
                                                    {{$bid->country }}
                                                @endif</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="questions">
                        <h5 class="faq-head-title">Frequently Asked Questions</h5>
                        <div class="faq-wrapper">
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">How to start bidding?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">Security Deposit / Bidding Power </span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">Delivery time to the destination port </span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">How to register to bid in an auction?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item open active">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">How will I know if my bid was successful?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <img src="{{ asset('css/img/faq.png') }}" alt="css"><span class="title">What happens if I bid on the wrong lot?</span><span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>All successful bidders can confirm their winning bid by checking the “Bid Maroc”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->




@endsection
